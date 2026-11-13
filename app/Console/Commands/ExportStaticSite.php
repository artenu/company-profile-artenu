<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class ExportStaticSite extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'site:export {--dist=dist : The target output directory relative to project root}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Export the website as pure static HTML, CSS, JS, and images (no PHP or Laravel needed on production).';

    /**
     * Execute the console command.
     */
    public function handle(): int
    {
        $this->info('🚀 Starting Static Site Export...');

        // 1. Ensure Vite production assets are built
        $hotFile = public_path('hot');
        if (File::exists($hotFile)) {
            File::delete($hotFile);
        }

        if (!File::exists(public_path('build/manifest.json'))) {
            $this->warn('⚠️ Production build not found. Running "npm run build"...');
            exec('npm run build');
        }

        // 2. Prepare target dist folder
        $distDir = $this->option('dist');
        $distPath = base_path($distDir);

        if (File::exists($distPath)) {
            $this->info("Cleaning existing {$distDir} directory...");
            File::deleteDirectory($distPath);
        }
        File::makeDirectory($distPath, 0755, true);

        // 3. Copy static asset folders
        $this->info('📦 Copying compiled assets, images, and icons...');

        // Copy build directory (CSS, JS, Fonts)
        if (File::exists(public_path('build'))) {
            File::copyDirectory(public_path('build'), $distPath . '/build');
        }

        // Copy images directory
        if (File::exists(public_path('images'))) {
            File::copyDirectory(public_path('images'), $distPath . '/images');
        }

        // Copy standalone root assets (favicon, robots, etc.)
        $rootAssets = ['favicon.png', 'favicon.ico', 'robots.txt'];
        foreach ($rootAssets as $asset) {
            if (File::exists(public_path($asset))) {
                File::copy(public_path($asset), $distPath . '/' . $asset);
            }
        }

        // 4. Render English Version (Default / index.html)
        $this->info('📄 Generating English static page (index.html)...');
        app()->setLocale('en');
        $htmlEn = view('home', ['locale' => 'en'])->render();
        $htmlEn = $this->sanitizeStaticHtml($htmlEn, 'en');
        File::put($distPath . '/index.html', $htmlEn);

        // 5. Render Indonesian Version (/id/index.html & /id.html)
        $this->info('📄 Generating Indonesian static page (id/index.html & id.html)...');
        app()->setLocale('id');
        $htmlId = view('home', ['locale' => 'id'])->render();
        $htmlId = $this->sanitizeStaticHtml($htmlId, 'id');

        File::put($distPath . '/id.html', $htmlId);
        File::makeDirectory($distPath . '/id', 0755, true);
        File::put($distPath . '/id/index.html', $htmlId);

        // 6. Create fallback 404 & hosting helper files
        File::put($distPath . '/404.html', $htmlEn);
        File::put($distPath . '/.nojekyll', ''); // For GitHub Pages

        $this->newLine();
        $this->info('✅ Export completed successfully!');
        $this->line("📁 Output directory: <comment>{$distPath}</comment>");
        $this->newLine();

        $this->line('Generated files:');
        $this->line('  ├── index.html        (English Homepage)');
        $this->line('  ├── id.html           (Indonesian Homepage)');
        $this->line('  ├── id/index.html     (Indonesian Sub-path)');
        $this->line('  ├── 404.html          (Fallback Page)');
        $this->line('  ├── build/            (Production CSS, JS, and Web Fonts)');
        $this->line('  └── images/           (Optimized Logo & Graphics)');
        $this->newLine();

        $this->info('How to deploy:');
        $this->line('  1. Vercel / Netlify / Cloudflare Pages:');
        $this->line("     Upload or set publish directory to \"{$distDir}\".");
        $this->line('  2. GitHub Pages:');
        $this->line("     Push the contents of \"{$distDir}\" to the gh-pages branch.");
        $this->line('  3. Shared Hosting / cPanel (Apache / Nginx):');
        $this->line("     Upload the contents of \"{$distDir}\" directly into your public_html folder.");
        $this->line('     No PHP, Laravel, or MySQL server is required on the host!');

        return Command::SUCCESS;
    }

    /**
     * Clean up and transform rendered HTML into standalone static links.
     */
    protected function sanitizeStaticHtml(string $html, string $locale): string
    {
        // 1. Remove local development hostnames (e.g. http://localhost:8000, http://127.0.0.1:8000)
        $baseUrl = url('/');
        $html = str_replace($baseUrl, '', $html);
        $html = str_replace(['http://localhost:8000', 'http://127.0.0.1:8000', 'http://localhost'], '', $html);

        // 2. Adjust language switcher links for static hosting
        // The English page links to "/id/" or "id.html", and the Indonesian page links to "/" or "index.html"
        $html = preg_replace('/href="[^"]*\/lang\/id"/i', 'href="/id/"', $html);
        $html = preg_replace('/href="[^"]*\/lang\/en"/i', 'href="/"', $html);

        // 3. Make sure root logo link works properly in subfolder if needed
        if ($locale === 'id') {
            // Keep logo pointing to / or /id/ as preferred
            $html = str_replace('<a href="/" class="group flex items-center', '<a href="/id/" class="group flex items-center', $html);
        }

        return $html;
    }
}


<header class="sticky top-0 z-50 border-b border-slate-200/80 bg-[#FBFBFA]/90 backdrop-blur-md">
    <div class="mx-auto flex h-20 max-w-7xl items-center justify-between px-4 sm:px-6 lg:px-8">

        <!-- Bespoke Minimalist Logo -->
        <a href="/" class="group flex items-center gap-3.5">
            <div
                class="flex h-10 w-10 items-center justify-center rounded-xl bg-slate-900 shadow-md shadow-slate-900/10 transition-colors group-hover:bg-slate-800">
                <!-- Architectural Geometric 'A' Mark -->
                <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12 3L3.5 19.5H8.5L12 12.5L15.5 19.5H20.5L12 3Z" fill="#FFFFFF" />
                    <polygon points="12,14.5 9.8,19 14.2,19" fill="#2563EB" />
                </svg>
            </div>
            <div class="flex flex-col">
                <div class="flex items-center gap-1.5 text-lg font-bold tracking-tight text-slate-900">
                    <span>ARTA</span>
                    <span class="h-1.5 w-1.5 rounded-full bg-blue-600"></span>
                    <span class="font-normal text-slate-600">TEKNOLOGI</span>
                </div>
                <span class="-mt-0.5 font-mono text-[9px] uppercase tracking-widest text-slate-400">Software Engineering
                    & Advisory</span>
            </div>
        </a>

        <!-- Desktop Navigation -->
        <nav class="hidden items-center gap-8 text-sm font-medium text-slate-600 md:flex">
            <a href="{{ url("/#") }}" class="transition-colors hover:text-slate-950">Home</a>
            <a href="{{ url("/#layanan") }}" class="transition-colors hover:text-slate-950">Layanan</a>
            <a href="{{ url("/#portofolio") }}" class="transition-colors hover:text-slate-950">Studi Kasus</a>
            <a href="{{ url("/#tentang") }}" class="transition-colors hover:text-slate-950">Tentang Kami</a>
            <a href="{{ url("/#kontak") }}" class="transition-colors hover:text-slate-950">Kontak</a>
        </nav>

        <!-- CTA Actions -->
        <div class="flex items-center gap-3">
            <a href="#kontak"
                class="inline-flex items-center justify-center rounded-xl bg-slate-900 px-4 py-2 text-sm font-semibold text-white shadow-sm transition hover:bg-slate-800 hover:shadow">
                Mulai Konsultasi
            </a>
        </div>
    </div>
</header>

<header class="sticky top-0 z-50 border-b border-slate-200/80 bg-[#FBFBFA]/90 backdrop-blur-md">
    <div class="mx-auto flex h-20 max-w-7xl items-center justify-between px-4 sm:px-6 lg:px-8">

        <!-- Brand Logo -->
        <a href="/" class="group flex items-center transition-opacity hover:opacity-90" aria-label="Artenu">
            <img src="{{ asset("images/logo.png") }}" alt="Artenu"
                class="h-8 w-auto transition-transform duration-200 group-hover:scale-[1.02] sm:h-9">
        </a>

        <!-- Desktop Navigation -->
        <nav class="hidden items-center gap-8 text-sm font-medium text-slate-700 md:flex">
            <a href="{{ url("/#hero") }}"
                class="hover:text-brand-primary transition-colors">{{ __("messages.nav.home") }}</a>
            <a href="{{ url("/#layanan") }}"
                class="hover:text-brand-primary transition-colors">{{ __("messages.nav.services") }}</a>
            <a href="{{ url("/#portofolio") }}"
                class="hover:text-brand-primary transition-colors">{{ __("messages.nav.case_studies") }}</a>
            <a href="{{ url("/#tentang") }}"
                class="hover:text-brand-primary transition-colors">{{ __("messages.nav.about") }}</a>
            <a href="{{ url("/#kontak") }}"
                class="hover:text-brand-primary transition-colors">{{ __("messages.nav.contact") }}</a>
        </nav>

        <!-- CTA Actions & Language Switcher -->
        <div class="flex items-center gap-3">
            <!-- Language Switcher Pill -->
            <div
                class="shadow-xs flex items-center rounded-xl border border-slate-200/90 bg-white p-1 text-xs font-bold">
                <a href="{{ route("lang.switch", "id") }}"
                    class="{{ app()->getLocale() === "id" ? "bg-brand-primary text-white shadow-xs" : "text-slate-700 hover:text-brand-primary" }} rounded-lg px-2.5 py-1 transition-all"
                    title="Bahasa Indonesia">
                    ID
                </a>
                <a href="{{ route("lang.switch", "en") }}"
                    class="{{ app()->getLocale() === "en" ? "bg-brand-primary text-white shadow-xs" : "text-slate-700 hover:text-brand-primary" }} rounded-lg px-2.5 py-1 transition-all"
                    title="English">
                    EN
                </a>
            </div>

            <a href="#kontak"
                class="bg-brand-primary hover:bg-brand-hover hidden items-center justify-center rounded-xl px-4 py-2 text-sm font-semibold text-white shadow-sm transition hover:shadow sm:inline-flex">
                {{ __("messages.nav.cta") }}
            </a>

            <!-- Mobile Menu Button -->
            <button id="mobile-menu-btn" type="button" aria-label="Toggle Menu"
                class="inline-flex h-10 w-10 items-center justify-center rounded-xl border border-slate-200 bg-white text-slate-700 shadow-sm transition hover:bg-slate-50 md:hidden">
                <svg id="hamburger-icon" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                    stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
                <svg id="close-icon" class="hidden h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                    stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
    </div>

    <!-- Mobile Navigation Drawer -->
    <div id="mobile-menu" class="hidden border-b border-slate-200/80 bg-[#FBFBFA] px-4 pb-6 pt-2 md:hidden">
        <nav class="flex flex-col space-y-2 font-medium text-slate-700">
            <a href="{{ url("/#hero") }}"
                class="mobile-nav-link hover:text-brand-primary rounded-lg px-3 py-2 transition hover:bg-slate-100">{{ __("messages.nav.home") }}</a>
            <a href="{{ url("/#layanan") }}"
                class="mobile-nav-link hover:text-brand-primary rounded-lg px-3 py-2 transition hover:bg-slate-100">{{ __("messages.nav.services") }}</a>
            <a href="{{ url("/#portofolio") }}"
                class="mobile-nav-link hover:text-brand-primary rounded-lg px-3 py-2 transition hover:bg-slate-100">{{ __("messages.nav.case_studies") }}</a>
            <a href="{{ url("/#tentang") }}"
                class="mobile-nav-link hover:text-brand-primary rounded-lg px-3 py-2 transition hover:bg-slate-100">{{ __("messages.nav.about") }}</a>
            <a href="{{ url("/#kontak") }}"
                class="mobile-nav-link hover:text-brand-primary rounded-lg px-3 py-2 transition hover:bg-slate-100">{{ __("messages.nav.contact") }}</a>

            <div class="flex items-center justify-between border-t border-slate-200/80 pt-3">
                <span class="text-xs font-semibold text-slate-700">Bahasa / Language:</span>
                <div
                    class="shadow-xs flex items-center rounded-xl border border-slate-200 bg-white p-1 text-xs font-bold">
                    <a href="{{ route("lang.switch", "id") }}"
                        class="{{ app()->getLocale() === "id" ? "bg-brand-primary text-white" : "text-slate-700 hover:text-brand-primary" }} rounded-lg px-2.5 py-1 transition-all">
                        ID
                    </a>
                    <a href="{{ route("lang.switch", "en") }}"
                        class="{{ app()->getLocale() === "en" ? "bg-brand-primary text-white" : "text-slate-700 hover:text-brand-primary" }} rounded-lg px-2.5 py-1 transition-all">
                        EN
                    </a>
                </div>
            </div>

            <div class="pt-2">
                <a href="#kontak"
                    class="mobile-nav-link bg-brand-primary hover:bg-brand-hover flex w-full items-center justify-center rounded-xl py-2.5 text-sm font-semibold text-white shadow-sm transition">
                    {{ __("messages.nav.cta") }}
                </a>
            </div>
        </nav>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const btn = document.getElementById('mobile-menu-btn');
            const menu = document.getElementById('mobile-menu');
            const hamburgerIcon = document.getElementById('hamburger-icon');
            const closeIcon = document.getElementById('close-icon');

            if (btn && menu) {
                btn.addEventListener('click', function() {
                    const isClosed = menu.classList.contains('hidden');
                    menu.classList.toggle('hidden');
                    hamburgerIcon.classList.toggle('hidden', isClosed);
                    closeIcon.classList.toggle('hidden', !isClosed);
                });

                document.querySelectorAll('.mobile-nav-link').forEach(link => {
                    link.addEventListener('click', () => {
                        menu.classList.add('hidden');
                        hamburgerIcon.classList.remove('hidden');
                        closeIcon.classList.add('hidden');
                    });
                });
            }
        });
    </script>
</header>


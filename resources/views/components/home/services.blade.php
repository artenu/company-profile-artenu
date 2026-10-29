<!-- SECTION LAYANAN -->
<section id="layanan" class="border-brand-border/40 bg-brand-dark border-b py-24">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="mb-16 max-w-2xl">
            <span
                class="mb-2 block font-mono text-xs font-bold uppercase tracking-widest text-sky-400">{{ __("messages.services.tag") }}</span>
            <h2 class="text-3xl font-extrabold tracking-tight text-white sm:text-4xl">{{ __("messages.services.title") }}
            </h2>
            <p class="mt-3 text-slate-300">{{ __("messages.services.subtitle") }}</p>
        </div>

        <div class="grid max-w-6xl grid-cols-1 gap-8 md:grid-cols-3">
            <!-- 01: Web & App Development -->
            <a href="#kontak"
                class="hover:border-brand-primary/40 hover:shadow-brand-primary/10 group flex flex-col justify-between rounded-2xl border border-slate-200/90 bg-[#FBFBFA] p-8 shadow-sm transition-all duration-300 hover:-translate-y-2 hover:bg-white hover:shadow-2xl">
                <div>
                    <div
                        class="bg-brand-primary shadow-brand-primary/20 group-hover:shadow-brand-primary/30 mb-6 flex h-12 w-12 items-center justify-center rounded-xl text-white shadow-md transition-all duration-300 group-hover:scale-110 group-hover:shadow-lg">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                        </svg>
                    </div>
                    <h3 class="group-hover:text-brand-primary mb-3 text-xl font-bold text-slate-900 transition-colors">
                        {{ __("messages.services.items.web.title") }}
                    </h3>
                    <p class="text-sm leading-relaxed text-slate-600">
                        {{ __("messages.services.items.web.desc") }}
                    </p>
                </div>
                <div
                    class="text-brand-primary mt-8 flex items-center justify-between border-t border-slate-200/60 pt-4 text-xs font-semibold">
                    <span>{{ __("messages.services.items.web.tags") }}</span>
                    <span
                        class="group-hover:text-brand-primary inline-flex items-center gap-1 font-bold text-slate-900 transition-all duration-200 group-hover:translate-x-1">
                        {{ __("messages.services.consult") }} &rarr;
                    </span>
                </div>
            </a>

            <!-- 02: Integrasi Sistem -->
            <a href="#kontak"
                class="hover:border-brand-primary/40 hover:shadow-brand-primary/10 group flex flex-col justify-between rounded-2xl border border-slate-200/90 bg-[#FBFBFA] p-8 shadow-sm transition-all duration-300 hover:-translate-y-2 hover:bg-white hover:shadow-2xl">
                <div>
                    <div
                        class="group-hover:bg-brand-primary group-hover:shadow-brand-primary/30 mb-6 flex h-12 w-12 items-center justify-center rounded-xl bg-slate-900 text-white shadow-md shadow-slate-900/10 transition-all duration-300 group-hover:scale-110 group-hover:shadow-lg">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M8 9l3 3-3 3m5 0h3M5 20h14a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <h3 class="group-hover:text-brand-primary mb-3 text-xl font-bold text-slate-900 transition-colors">
                        {{ __("messages.services.items.integration.title") }}
                    </h3>
                    <p class="text-sm leading-relaxed text-slate-600">
                        {{ __("messages.services.items.integration.desc") }}
                    </p>
                </div>
                <div
                    class="text-brand-primary mt-8 flex items-center justify-between border-t border-slate-200/60 pt-4 text-xs font-semibold">
                    <span>{{ __("messages.services.items.integration.tags") }}</span>
                    <span
                        class="group-hover:text-brand-primary inline-flex items-center gap-1 font-bold text-slate-900 transition-all duration-200 group-hover:translate-x-1">
                        {{ __("messages.services.consult") }} &rarr;
                    </span>
                </div>
            </a>

            <!-- 03: Dashboard Monitoring -->
            <a href="#kontak"
                class="hover:border-brand-primary/40 hover:shadow-brand-primary/10 group flex flex-col justify-between rounded-2xl border border-slate-200/90 bg-[#FBFBFA] p-8 shadow-sm transition-all duration-300 hover:-translate-y-2 hover:bg-white hover:shadow-2xl">
                <div>
                    <div
                        class="group-hover:bg-brand-primary group-hover:shadow-brand-primary/30 mb-6 flex h-12 w-12 items-center justify-center rounded-xl bg-slate-900 text-white shadow-md shadow-slate-900/10 transition-all duration-300 group-hover:scale-110 group-hover:shadow-lg">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                        </svg>
                    </div>
                    <h3 class="group-hover:text-brand-primary mb-3 text-xl font-bold text-slate-900 transition-colors">
                        {{ __("messages.services.items.dashboard.title") }}
                    </h3>
                    <p class="text-sm leading-relaxed text-slate-600">
                        {{ __("messages.services.items.dashboard.desc") }}
                    </p>
                </div>
                <div
                    class="text-brand-primary mt-8 flex items-center justify-between border-t border-slate-200/60 pt-4 text-xs font-semibold">
                    <span>{{ __("messages.services.items.dashboard.tags") }}</span>
                    <span
                        class="group-hover:text-brand-primary inline-flex items-center gap-1 font-bold text-slate-900 transition-all duration-200 group-hover:translate-x-1">
                        {{ __("messages.services.consult") }} &rarr;
                    </span>
                </div>
            </a>
        </div>
    </div>
</section>


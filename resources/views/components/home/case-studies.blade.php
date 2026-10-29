<!-- SECTION STUDI KASUS -->
<section id="portofolio" class="bg-[#FBFBFA] py-24">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="mb-16 flex flex-col items-start justify-between sm:flex-row sm:items-end">
            <div class="max-w-2xl">
                <span class="mb-2 block font-mono text-xs font-bold uppercase tracking-widest text-brand-primary">
                    {{ __('messages.case_studies.tag') }}
                </span>
                <h2 class="text-3xl font-extrabold tracking-tight text-slate-950 sm:text-4xl">
                    {{ __('messages.case_studies.title') }}
                </h2>
                <p class="mt-3 text-slate-600">
                    {{ __('messages.case_studies.subtitle') }}
                </p>
            </div>
        </div>

        <div class="grid max-w-6xl grid-cols-1 gap-8 md:grid-cols-2">
            <!-- Case 1 -->
            <a href="#kontak"
                class="group flex flex-col justify-between overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm transition-all duration-300 hover:-translate-y-2 hover:border-brand-primary/40 hover:shadow-2xl hover:shadow-brand-primary/10">
                <div>
                    <div
                        class="relative flex h-48 w-full items-center justify-center overflow-hidden border-b border-slate-100 bg-gradient-to-br from-brand-midnight via-brand-dark to-brand-midnight p-6 text-center">
                        <div
                            class="absolute inset-0 bg-[radial-gradient(#3b82f6_1px,transparent_1px)] opacity-20 [background-size:16px_16px]">
                        </div>
                        <div class="relative z-10 flex flex-col items-center gap-2">
                            <span
                                class="rounded-full border border-sky-500/30 bg-sky-500/10 px-3 py-1 font-mono text-xs font-semibold text-sky-400">
                                {{ __('messages.case_studies.items.fleet.badge') }}
                            </span>
                            <span class="font-mono text-sm font-bold uppercase tracking-wider text-white">
                                {{ __('messages.case_studies.items.fleet.title_tag') }}
                            </span>
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="mb-2 flex items-center justify-between">
                            <span
                                class="font-mono text-[11px] font-bold uppercase tracking-wider text-brand-primary">
                                {{ __('messages.case_studies.items.fleet.industry') }}
                            </span>
                            <span class="text-xs font-medium text-slate-600">
                                {{ __('messages.case_studies.items.fleet.client') }}
                            </span>
                        </div>
                        <h3 class="mb-2 text-lg font-bold text-slate-900 transition-colors group-hover:text-brand-primary">
                            {{ __('messages.case_studies.items.fleet.name') }}
                        </h3>
                        <p class="text-sm leading-relaxed text-slate-600">
                            {{ __('messages.case_studies.items.fleet.desc') }}
                        </p>
                    </div>
                </div>
                <div class="mt-2 flex items-center justify-between border-t border-slate-100 px-6 pb-6 pt-3">
                    <div class="flex flex-wrap gap-1.5">
                        <span
                            class="rounded-md border border-slate-200/80 bg-slate-50 px-2 py-0.5 font-mono text-[10px] font-medium text-slate-700">Laravel</span>
                        <span
                            class="rounded-md border border-slate-200/80 bg-slate-50 px-2 py-0.5 font-mono text-[10px] font-medium text-slate-700">MySQL</span>
                        <span
                            class="rounded-md border border-slate-200/80 bg-slate-50 px-2 py-0.5 font-mono text-[10px] font-medium text-slate-700">Tailwind
                            CSS</span>
                        <span
                            class="rounded-md border border-slate-200/80 bg-slate-50 px-2 py-0.5 font-mono text-[10px] font-medium text-slate-700">Docker</span>
                    </div>
                    <span
                        class="inline-flex items-center gap-1 font-mono text-xs font-bold text-brand-primary transition-all duration-200 group-hover:translate-x-1">
                        {{ __('messages.case_studies.discuss') }} &rarr;
                    </span>
                </div>
            </a>

            <!-- Case 2 -->
            <a href="#kontak"
                class="group flex flex-col justify-between overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm transition-all duration-300 hover:-translate-y-2 hover:border-emerald-500/40 hover:shadow-2xl hover:shadow-slate-300/40">
                <div>
                    <div
                        class="relative flex h-48 w-full items-center justify-center overflow-hidden border-b border-slate-100 bg-gradient-to-br from-brand-midnight via-brand-dark to-brand-midnight p-6 text-center">
                        <div
                            class="absolute inset-0 bg-[radial-gradient(#10b981_1px,transparent_1px)] opacity-20 [background-size:16px_16px]">
                        </div>
                        <div class="relative z-10 flex flex-col items-center gap-2">
                            <span
                                class="rounded-full border border-emerald-500/30 bg-emerald-500/10 px-3 py-1 font-mono text-xs font-semibold text-emerald-400">
                                {{ __('messages.case_studies.items.procurement.badge') }}
                            </span>
                            <span class="font-mono text-sm font-bold uppercase tracking-wider text-white">
                                {{ __('messages.case_studies.items.procurement.title_tag') }}
                            </span>
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="mb-2 flex items-center justify-between">
                            <span
                                class="font-mono text-[11px] font-bold uppercase tracking-wider text-brand-primary">
                                {{ __('messages.case_studies.items.procurement.industry') }}
                            </span>
                            <span class="text-xs font-medium text-slate-600">
                                {{ __('messages.case_studies.items.procurement.client') }}
                            </span>
                        </div>
                        <h3
                            class="mb-2 text-lg font-bold text-slate-900 transition-colors group-hover:text-emerald-700">
                            {{ __('messages.case_studies.items.procurement.name') }}
                        </h3>
                        <p class="text-sm leading-relaxed text-slate-600">
                            {{ __('messages.case_studies.items.procurement.desc') }}
                        </p>
                    </div>
                </div>
                <div class="mt-2 flex items-center justify-between border-t border-slate-100 px-6 pb-6 pt-3">
                    <div class="flex flex-wrap gap-1.5">
                        <span
                            class="rounded-md border border-slate-200/80 bg-slate-50 px-2 py-0.5 font-mono text-[10px] font-medium text-slate-700">Laravel</span>
                        <span
                            class="rounded-md border border-slate-200/80 bg-slate-50 px-2 py-0.5 font-mono text-[10px] font-medium text-slate-700">PostgreSQL</span>
                        <span
                            class="rounded-md border border-slate-200/80 bg-slate-50 px-2 py-0.5 font-mono text-[10px] font-medium text-slate-700">AWS
                            S3</span>
                    </div>
                    <span
                        class="inline-flex items-center gap-1 font-mono text-xs font-bold text-emerald-700 transition-all duration-200 group-hover:translate-x-1">
                        {{ __('messages.case_studies.discuss') }} &rarr;
                    </span>
                </div>
            </a>
        </div>
    </div>
</section>

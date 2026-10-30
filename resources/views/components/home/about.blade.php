<!-- SECTION TENTANG KAMI -->
<section id="tentang" class="border-b border-brand-border/40 bg-brand-dark py-24">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

        <!-- Company Philosophy & Values -->
        <div class="grid grid-cols-1 items-center gap-16 lg:grid-cols-2">
            <div>
                <span class="mb-2 block font-mono text-xs font-bold uppercase tracking-widest text-sky-400">
                    {{ __('messages.about.tag') }}
                </span>
                <h2 class="text-3xl font-extrabold leading-tight tracking-tight text-white sm:text-4xl">
                    {{ __('messages.about.title') }}
                </h2>
                <p class="mt-6 text-base leading-relaxed text-slate-300">
                    {{ __('messages.about.desc_1') }}
                </p>
                <p class="mt-4 text-base leading-relaxed text-slate-300">
                    {{ __('messages.about.desc_2') }}
                </p>
            </div>

            <!-- 4 Pillars Grid (Kartu Clean Bone) -->
            <div class="grid grid-cols-1 gap-6 sm:grid-cols-2">
                <div class="rounded-2xl border border-slate-200 bg-[#FBFBFA] p-6 transition-all duration-300 hover:border-brand-primary/30 hover:shadow-lg">
                    <div class="mb-2 font-mono text-sm font-bold text-brand-primary">{{ __('messages.about.pillars.p1_tag') }}</div>
                    <h3 class="mb-1 text-base font-bold text-slate-900">{{ __('messages.about.pillars.p1_title') }}</h3>
                    <p class="text-xs leading-relaxed text-slate-700">{{ __('messages.about.pillars.p1_desc') }}</p>
                </div>
                <div class="rounded-2xl border border-slate-200 bg-[#FBFBFA] p-6 transition-all duration-300 hover:border-brand-primary/30 hover:shadow-lg">
                    <div class="mb-2 font-mono text-sm font-bold text-brand-primary">{{ __('messages.about.pillars.p2_tag') }}</div>
                    <h3 class="mb-1 text-base font-bold text-slate-900">{{ __('messages.about.pillars.p2_title') }}</h3>
                    <p class="text-xs leading-relaxed text-slate-700">{{ __('messages.about.pillars.p2_desc') }}</p>
                </div>
                <div class="rounded-2xl border border-slate-200 bg-[#FBFBFA] p-6 transition-all duration-300 hover:border-brand-primary/30 hover:shadow-lg">
                    <div class="mb-2 font-mono text-sm font-bold text-brand-primary">{{ __('messages.about.pillars.p3_tag') }}</div>
                    <h3 class="mb-1 text-base font-bold text-slate-900">{{ __('messages.about.pillars.p3_title') }}</h3>
                    <p class="text-xs leading-relaxed text-slate-700">{{ __('messages.about.pillars.p3_desc') }}</p>
                </div>
                <div class="rounded-2xl border border-slate-200 bg-[#FBFBFA] p-6 transition-all duration-300 hover:border-brand-primary/30 hover:shadow-lg">
                    <div class="mb-2 font-mono text-sm font-bold text-brand-primary">{{ __('messages.about.pillars.p4_tag') }}</div>
                    <h3 class="mb-1 text-base font-bold text-slate-900">{{ __('messages.about.pillars.p4_title') }}</h3>
                    <p class="text-xs leading-relaxed text-slate-700">{{ __('messages.about.pillars.p4_desc') }}</p>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- HERO SECTION -->
<section id="hero" class="md:pt-25 relative overflow-hidden border-b border-slate-200/70 pb-24 pt-20 md:pb-32">
    <div class="mx-auto max-w-7xl px-4 text-center sm:px-6 lg:px-8">

        <!-- Trust Badge -->
        <div
            class="mb-8 inline-flex items-center gap-2 rounded-full border border-slate-200 bg-white px-3 py-1.5 text-xs font-medium text-slate-700 shadow-sm">
            <span class="bg-brand-primary h-2 w-2 rounded-full"></span>
            {{ __("messages.hero.badge") }}
        </div>

        <!-- Headline -->
        <h1
            class="mx-auto max-w-4xl text-4xl font-extrabold leading-[1.12] tracking-tight text-slate-950 sm:text-6xl lg:text-7xl">
            {{ __("messages.hero.title_1") }} <span
                class="text-brand-primary underline decoration-slate-200 decoration-wavy decoration-2 underline-offset-8">{{ __("messages.hero.title_highlight") }}</span>
        </h1>

        <!-- Subheadline -->
        <p class="mx-auto mt-8 max-w-2xl text-lg leading-relaxed text-slate-600 sm:text-xl">
            {{ __("messages.hero.subtitle") }}
        </p>

        <!-- Actions -->
        <div class="mt-10 flex flex-col justify-center gap-4 sm:flex-row">
            <a href="#kontak"
                class="bg-brand-primary shadow-brand-primary/20 hover:bg-brand-hover rounded-xl px-6 py-3.5 text-sm font-semibold text-white shadow-md transition">
                {{ __("messages.hero.cta_primary") }}
            </a>
            <a href="#portofolio"
                class="rounded-xl border border-slate-200 bg-white px-6 py-3.5 text-sm font-semibold text-slate-700 shadow-sm transition hover:border-slate-300 hover:bg-slate-50">
                {{ __("messages.hero.cta_secondary") }}
            </a>
        </div>

        <!-- Value Highlights Bar -->
        <div
            class="mx-auto mt-20 grid max-w-4xl grid-cols-2 gap-8 border-t border-slate-200/80 pt-10 text-center md:grid-cols-4">
            <div>
                <div class="text-2xl font-bold tracking-tight text-slate-900">{{ __("messages.hero.stat_1_title") }}
                </div>
                <div class="mt-1 text-xs font-semibold uppercase tracking-wider text-slate-700">
                    {{ __("messages.hero.stat_1_label") }}</div>
                <p class="mt-1 text-[11px] text-slate-600">{{ __("messages.hero.stat_1_desc") }}</p>
            </div>
            <div>
                <div class="text-2xl font-bold tracking-tight text-slate-900">{{ __("messages.hero.stat_2_title") }}
                </div>
                <div class="mt-1 text-xs font-semibold uppercase tracking-wider text-slate-700">
                    {{ __("messages.hero.stat_2_label") }}</div>
                <p class="mt-1 text-[11px] text-slate-600">{{ __("messages.hero.stat_2_desc") }}</p>
            </div>
            <div>
                <div class="text-2xl font-bold tracking-tight text-slate-900">{{ __("messages.hero.stat_3_title") }}
                </div>
                <div class="mt-1 text-xs font-semibold uppercase tracking-wider text-slate-700">
                    {{ __("messages.hero.stat_3_label") }}</div>
                <p class="mt-1 text-[11px] text-slate-600">{{ __("messages.hero.stat_3_desc") }}</p>
            </div>
            <div>
                <div class="text-2xl font-bold tracking-tight text-slate-900">{{ __("messages.hero.stat_4_title") }}
                </div>
                <div class="mt-1 text-xs font-semibold uppercase tracking-wider text-slate-700">
                    {{ __("messages.hero.stat_4_label") }}</div>
                <p class="mt-1 text-[11px] text-slate-600">{{ __("messages.hero.stat_4_desc") }}</p>
            </div>
        </div>
    </div>
</section>


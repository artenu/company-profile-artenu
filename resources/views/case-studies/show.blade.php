<x-layout>
    <x-slot:title>{{ $caseStudy->title }} — Studi Kasus Arta Teknologi</x-slot:title>

    <div class="mx-auto max-w-5xl px-4 py-16 sm:px-6 md:py-24 lg:px-8">
        <!-- Breadcrumb -->
        <nav class="mb-8 flex items-center gap-2 font-mono text-xs text-slate-500">
            <a href="/" class="transition hover:text-slate-900">Beranda</a>
            <span>/</span>
            <a href="/#portofolio" class="transition hover:text-slate-900">Studi Kasus</a>
            <span>/</span>
            <span class="font-semibold text-blue-600">{{ $caseStudy->title }}</span>
        </nav>

        <!-- Header -->
        <div class="mb-10 space-y-4">
            <div class="flex items-center gap-3">
                <span
                    class="rounded-md border border-blue-200 bg-blue-50 px-2.5 py-1 font-mono text-xs font-bold uppercase tracking-wider text-blue-600">
                    {{ $caseStudy->industry ?? "IT Solution" }}
                </span>
                @if ($caseStudy->client_name)
                    <span class="text-xs font-medium text-slate-500">Klien: <strong
                            class="text-slate-800">{{ $caseStudy->client_name }}</strong></span>
                @endif
            </div>

            <h1 class="text-3xl font-extrabold leading-tight tracking-tight text-slate-950 sm:text-5xl">
                {{ $caseStudy->title }}
            </h1>

            <p class="max-w-3xl pt-2 text-lg leading-relaxed text-slate-600">
                {{ $caseStudy->summary }}
            </p>

            @if ($caseStudy->project_url)
                <div class="pt-2">
                    <a href="{{ $caseStudy->project_url }}" target="_blank"
                        class="inline-flex items-center gap-1.5 font-mono text-xs font-semibold text-blue-600 hover:underline">
                        Kunjungi Live Project &UpperRightArrow;
                    </a>
                </div>
            @endif
        </div>

        <!-- Cover Image -->
        @if ($caseStudy->thumbnail)
            <div class="mb-12 max-h-[480px] overflow-hidden rounded-2xl border border-slate-200 shadow-md">
                <img src="{{ asset("storage/" . $caseStudy->thumbnail) }}" alt="{{ $caseStudy->title }}"
                    class="h-full w-full object-cover">
            </div>
        @endif

        <!-- Tech Stack Bar -->
        @if (!empty($caseStudy->tech_stack))
            <div
                class="mb-12 flex flex-col justify-between gap-4 rounded-xl border border-slate-200 bg-white p-6 sm:flex-row sm:items-center">
                <span class="font-mono text-xs font-bold uppercase text-slate-500">Stack Teknologi</span>
                <div class="flex flex-wrap gap-2">
                    @foreach ($caseStudy->tech_stack as $tech)
                        <span
                            class="rounded-lg border border-slate-200 bg-[#FBFBFA] px-3 py-1 font-mono text-xs font-medium text-slate-700">
                            {{ $tech }}
                        </span>
                    @endforeach
                </div>
            </div>
        @endif

        <!-- Case Description -->
        <div class="prose prose-slate max-w-none space-y-6 leading-relaxed text-slate-700">
            @if ($caseStudy->description)
                {!! nl2br(e($caseStudy->description)) !!}
            @else
                <p>
                    Proyek ini dirancang untuk mengatasi tantangan operasional dan efisiensi alur kerja dengan integrasi
                    sistem real-time, arsitektur database teroptimasi, serta antarmuka pengguna yang responsif.
                </p>
            @endif
        </div>

        <!-- Back to Homepage -->
        <div class="mt-16 flex items-center justify-between border-t border-slate-200 pt-8">
            <a href="/#portofolio"
                class="flex items-center gap-1 text-sm font-semibold text-slate-900 transition hover:text-blue-600">
                &larr; Kembali ke Daftar Portofolio
            </a>
            <a href="#kontak" class="text-sm font-semibold text-blue-600 hover:underline">
                Konsultasikan Proyek Serupa &rarr;
            </a>
        </div>
    </div>
</x-layout>

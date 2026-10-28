<x-layout>
    <x-slot:title>{{ $service->title }} — Layanan Arta Teknologi</x-slot:title>

    <div class="mx-auto max-w-5xl px-4 py-16 sm:px-6 md:py-24 lg:px-8">
        <!-- Breadcrumb -->
        <nav class="mb-8 flex items-center gap-2 font-mono text-xs text-slate-500">
            <a href="/" class="transition hover:text-slate-900">Beranda</a>
            <span>/</span>
            <a href="/#layanan" class="transition hover:text-slate-900">Layanan</a>
            <span>/</span>
            <span class="font-semibold text-blue-600">{{ $service->title }}</span>
        </nav>

        <!-- Header -->
        <div class="mb-12 border-b border-slate-200 pb-12">
            <div
                class="mb-4 inline-flex items-center gap-2 rounded-full border border-blue-200 bg-blue-50 px-3 py-1 font-mono text-xs font-semibold uppercase text-blue-700">
                Enterprise Core Service
            </div>
            <h1 class="text-3xl font-extrabold leading-tight tracking-tight text-slate-950 sm:text-5xl">
                {{ $service->title }}
            </h1>
            <p class="mt-6 max-w-3xl text-lg leading-relaxed text-slate-600 sm:text-xl">
                {{ $service->short_description }}
            </p>
        </div>

        <!-- Content Body & CTA Sidebar -->
        <div class="grid grid-cols-1 gap-12 lg:grid-cols-3">
            <!-- Main Content -->
            <div class="space-y-6 text-base leading-relaxed text-slate-700 lg:col-span-2">
                @if ($service->content)
                    <div class="prose prose-slate max-w-none">
                        {!! nl2br(e($service->content)) !!}
                    </div>
                @else
                    <p>
                        Tim engineer Arta Teknologi merancang dan membangun arsitektur {{ $service->title }} dengan
                        pendekatan berorientasi performa tinggi, keamanan berstandar industri, serta kemudahan dalam
                        skalabilitas jangka panjang.
                    </p>
                    <p>
                        Kami memastikan setiap baris kode mematuhi kaidah best-practices, dilengkapi dokumentasi teknis
                        menyeluruh, pengujian terotomatisasi (automated testing), serta kesiapan integrasi CI/CD.
                    </p>
                @endif
            </div>

            <!-- Sticky Contact Card -->
            <div>
                <div class="sticky top-28 space-y-5 rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">
                    <h3 class="text-base font-bold text-slate-950">Konsultasikan Kebutuhan Ini</h3>
                    <p class="text-xs leading-relaxed text-slate-500">
                        Ingin mengimplementasikan {{ $service->title }} untuk perusahaan Anda? Diskusikan dengan lead
                        engineer kami.
                    </p>
                    <a href="mailto:halo@artateknologi.com?subject=Konsultasi%20{{ urlencode($service->title) }}"
                        class="block w-full rounded-xl bg-slate-900 py-3 text-center text-xs font-semibold text-white transition hover:bg-slate-800">
                        Hubungi via Email
                    </a>
                    <a href="https://wa.me/6281200000000?text=Halo%20Arta%20Teknologi,%20saya%20ingin%20konsultasi%20layanan%20{{ urlencode($service->title) }}"
                        target="_blank"
                        class="block w-full rounded-xl bg-emerald-600 py-3 text-center text-xs font-semibold text-white transition hover:bg-emerald-500">
                        Chat WhatsApp
                    </a>
                </div>
            </div>
        </div>

        <!-- Layanan Lainnya -->
        @if ($otherServices->isNotEmpty())
            <div class="mt-24 border-t border-slate-200 pt-16">
                <h3 class="mb-8 text-xl font-bold text-slate-950">Layanan Terkait Lainnya</h3>
                <div class="grid grid-cols-1 gap-6 sm:grid-cols-3">
                    @foreach ($otherServices as $other)
                        <a href="{{ route("services.show", $other->slug) }}"
                            class="group rounded-xl border border-slate-200 bg-white p-6 transition hover:border-blue-500 hover:shadow-md">
                            <h4 class="font-bold text-slate-900 transition group-hover:text-blue-600">
                                {{ $other->title }}</h4>
                            <p class="mt-2 line-clamp-2 text-xs text-slate-500">{{ $other->short_description }}</p>
                            <span class="mt-4 block text-xs font-semibold text-blue-600">Detail &rarr;</span>
                        </a>
                    @endforeach
                </div>
            </div>
        @endif
    </div>
</x-layout>

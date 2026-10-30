<!-- SECTION KONTAK -->
<section id="kontak" class="border-t border-slate-200/80 bg-[#FBFBFA] py-24">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 items-start gap-12 lg:grid-cols-12 lg:gap-16">

            <!-- Info Kontak Kiri -->
            <div class="space-y-4 lg:col-span-5">
                <div>
                    <span class="mb-3 block font-mono text-xs font-bold uppercase tracking-widest text-brand-primary">
                        {{ __("messages.contact.tag") }}
                    </span>
                    <h2
                        class="text-3xl font-extrabold leading-tight tracking-tight text-slate-950 sm:text-4xl lg:text-5xl">
                        {{ __("messages.contact.title") }}
                    </h2>
                    <p class="mt-4 text-base leading-relaxed text-slate-600">
                        {{ __("messages.contact.subtitle") }}
                    </p>
                </div>
                <div
                    class="flex flex-col items-start gap-6 border-t border-slate-200/80 pt-6 sm:flex-row sm:items-center">
                    <div class="flex items-start gap-4">
                        <div
                            class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl border border-slate-200 bg-white text-brand-primary shadow-sm">
                            <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                        </div>
                        <div>
                            <span class="block font-mono text-xs font-bold uppercase text-slate-600">
                                {{ __("messages.contact.email_label") }}</span>
                            <a href="mailto:artenu@artha.co.id"
                                class="text-sm font-semibold text-slate-900 transition hover:text-brand-primary">artenu@artha.co.id</a>
                        </div>
                    </div>
                    <div class="flex items-start gap-4">
                        <div
                            class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl border border-slate-200 bg-white text-slate-700 shadow-sm">
                            <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                        </div>
                        <div>
                            <span class="block font-mono text-xs font-bold uppercase text-slate-600">
                                {{ __("messages.contact.office_label") }}</span>
                            <a href="https://www.google.com/maps/dir/PT.ARMADA+LOGISTIC+INDONESIA,+Jl.+Perjuangan+No.11F,+RT.1%2FRW.7,+Kb.+Jeruk,+Kec.+Kb.+Jeruk,+Kota+Jakarta+Barat,+Daerah+Khusus+Ibukota+Jakarta+11530/Kosan+40,+RQ47%2BHQ6,+RT.9%2FRW.10,+Kb.+Jeruk,+Kec.+Kb.+Jeruk,+Kota+Jakarta+Barat,+Daerah+Khusus+Ibukota+Jakarta+11530/@-6.1937755,106.7610947,911m/data=!3m1!1e3!4m13!4m12!1m5!1m1!1s0x2e69f7006d60d671:0xb3bb7fef6b2b468f!2m2!1d106.7590156!2d-6.1910954!1m5!1m1!1s0x2e69f7d805b725e3:0x27c9dea71249acb3!2m2!1d106.76438!2d-6.1936068?entry=ttu&g_ep=EgoyMDI2MTAwNy4wIKXMDSoASAFQAw%3D%3D"
                                target="_blank"
                                class="text-sm font-semibold text-slate-900 transition hover:text-brand-primary">Jakarta,
                                Indonesia</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Kolom Kanan: Card WhatsApp CTA -->
            <div class="lg:col-span-7">
                <div
                    class="flex flex-col items-center justify-center rounded-2xl border border-slate-200/90 bg-white p-8 text-center shadow-xl shadow-slate-200/50 sm:p-12">
                    <div
                        class="mb-6 flex h-16 w-16 items-center justify-center rounded-2xl border border-emerald-200 bg-emerald-50 text-emerald-700 shadow-sm">
                        <svg class="h-8 w-8 fill-current" viewBox="0 0 24 24">
                            <path
                                d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z" />
                        </svg>
                    </div>

                    <h3 class="mb-3 text-2xl font-extrabold tracking-tight text-slate-950 sm:text-3xl">
                        {{ __("messages.contact.card_title") }}
                    </h3>

                    <p class="mx-auto mb-8 max-w-md text-sm leading-relaxed text-slate-600">
                        {{ __("messages.contact.card_desc") }}
                    </p>

                    <!-- Tombol Utama WhatsApp -->
                    <a href="https://wa.me/6281977522529?text={{ urlencode(__("messages.contact.wa_message")) }}"
                        target="_blank"
                        class="inline-flex w-full items-center justify-center gap-3 rounded-xl bg-emerald-600 px-8 py-4 text-sm font-bold text-white shadow-lg shadow-emerald-600/20 transition-all hover:scale-[1.02] hover:bg-emerald-500 sm:w-auto">
                        <svg class="h-5 w-5 fill-current" viewBox="0 0 24 24">
                            <path
                                d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z" />
                        </svg>
                        <span>{{ __("messages.contact.card_btn") }}</span>
                    </a>

                    <!-- Jaminan Respons -->
                    <div class="mt-6 flex items-center justify-center gap-2 text-xs text-slate-600">
                        <span class="h-2 w-2 animate-pulse rounded-full bg-emerald-500"></span>
                        <span>{{ __("messages.contact.response_time") }}
                            <strong class="text-slate-800">{{ __("messages.contact.response_mins") }}</strong></span>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

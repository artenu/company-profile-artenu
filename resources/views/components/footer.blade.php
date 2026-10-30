<footer class="border-t border-slate-200/80 bg-white">
    <div class="mx-auto max-w-7xl px-4 py-16 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 gap-12 md:grid-cols-4">

            <div class="space-y-4 md:col-span-2">
                <a href="/" class="inline-block transition-opacity hover:opacity-90" aria-label="Artenu">
                    <img src="{{ asset("images/logo.png") }}" alt="Artenu" class="h-8 w-auto sm:h-9">
                </a>
                <p class="max-w-sm text-sm leading-relaxed text-slate-600">
                    {{ __("messages.footer.tagline") }}
                </p>
            </div>

            <div>
                <p class="mb-4 font-mono text-xs font-bold uppercase tracking-wider text-slate-900">
                    {{ __("messages.footer.nav_title") }}</p>
                <ul class="space-y-2.5 text-sm text-slate-600">
                    <li><a href="#layanan"
                            class="hover:text-brand-primary transition">{{ __("messages.nav.services") }}</a>
                    </li>
                    <li><a href="#portofolio"
                            class="hover:text-brand-primary transition">{{ __("messages.nav.case_studies") }}</a></li>
                    <li><a href="#tentang"
                            class="hover:text-brand-primary transition">{{ __("messages.nav.about") }}</a>
                    </li>
                    <li><a href="#kontak"
                            class="hover:text-brand-primary transition">{{ __("messages.nav.contact") }}</a>
                    </li>
                </ul>
            </div>

            <div>
                <p class="mb-4 font-mono text-xs font-bold uppercase tracking-wider text-slate-900">
                    {{ __("messages.footer.contact_title") }}</p>
                <ul class="space-y-2.5 text-sm text-slate-600">
                    <li>
                        <a href="https://www.google.com/maps/dir/PT.ARMADA+LOGISTIC+INDONESIA,+Jl.+Perjuangan+No.11F,+RT.1%2FRW.7,+Kb.+Jeruk,+Kec.+Kb.+Jeruk,+Kota+Jakarta+Barat,+Daerah+Khusus+Ibukota+Jakarta+11530/Kosan+40,+RQ47%2BHQ6,+RT.9%2FRW.10,+Kb.+Jeruk,+Kec.+Kb.+Jeruk,+Kota+Jakarta+Barat,+Daerah+Khusus+Ibukota+Jakarta+11530/@-6.1937755,106.7610947,911m/data=!3m1!1e3!4m13!4m12!1m5!1m1!1s0x2e69f7006d60d671:0xb3bb7fef6b2b468f!2m2!1d106.7590156!2d-6.1910954!1m5!1m1!1s0x2e69f7d805b725e3:0x27c9dea71249acb3!2m2!1d106.76438!2d-6.1936068?entry=ttu&g_ep=EgoyMDI2MTAwNy4wIKXMDSoASAFQAw%3D%3D"
                            target="_blank" class="transition hover:text-slate-950">
                            PT. Artha Teknologi Nusantara, Jl Perjuangan Nomor 11 F Kebon Jeruk, Kota Adm Jakarta Barat,
                            DKI Jakarta 11530
                        </a>
                    </li>
                    <li>
                        <a href="mailto:artenu@artha.co.id" class="hover:text-brand-primary transition">
                            Email: artenu@artha.co.id
                        </a>
                    </li>
                    <li>
                        <a href="https://wa.me/6281977522529" target="_blank" class="transition hover:text-emerald-700">
                            WhatsApp: +62 819-7752-2529
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div
            class="mt-12 flex flex-col items-center justify-between border-t border-slate-200/80 pt-8 text-xs text-slate-600 sm:flex-row">
            <p>&copy; {{ date("Y") }} PT Arta Teknologi Nusantara. {{ __("messages.footer.rights") }}</p>
            <div class="mt-4 flex gap-6 sm:mt-0">
                <a href="#" class="transition hover:text-slate-900">{{ __("messages.footer.privacy") }}</a>
                <a href="#" class="transition hover:text-slate-900">{{ __("messages.footer.terms") }}</a>
            </div>
        </div>
    </div>
</footer>


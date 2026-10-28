<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? "Arta Teknologi — Konsultan IT & Rekayasa Perangkat Lunak" }}</title>
    <meta name="description"
        content="Mitra rekayasa perangkat lunak dan transformasi digital terpercaya untuk Startup, UKM, Enterprise, dan Pemerintah.">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600,700" rel="stylesheet" />
    @vite(["resources/css/app.css", "resources/js/app.js"])
</head>

<body
    class="flex min-h-screen flex-col justify-between bg-[#FBFBFA] font-sans text-slate-900 antialiased selection:bg-blue-600 selection:text-white">

    <x-navbar />

    <main class="flex-grow">
        {{ $slot }}
    </main>

    <x-footer />

</body>

</html>

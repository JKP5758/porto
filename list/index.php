<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Daftar Project</title>
    <meta name="description" content="Ini adalah halaman yang berisi beberapa project yang telah saya kerjakan.">
    <link rel="icon" type="image/png/ico" href="../assets//img//icons/favico.ico">
    <link href="../assets/css/style.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet" />
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>

<body class="bg-gray-100 text-gray-950">

    <!-- Header -->
    <?php include '../components/header.php'; ?>

    <div class="py-6 text-center">
        <h1 class="text-2xl sm:text-3xl font-bold text-gray-800 flex items-center justify-center gap-2">
            <span class="text-green-500 text-xl">🧪</span> Daftar Project
        </h1>
        <p class="text-sm text-gray-700 mt-1">Beberapa project atau code yang pernah Gua bikin.</p>
    </div>

    <!-- Grid Container -->
    <main class="px-4 sm:px-6 lg:px-8 max-w-6xl mx-auto pb-10 ">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-x-6 gap-y-6 ">

            <!-- Card Toko Buku -->
            <div class="group bg-white rounded-2xl shadow transition-all duration-300 overflow-hidden max-w-sm w-full mx-auto flex flex-col hover:shadow-2xl hover:-translate-y-1 hover:scale-[1.02]">
                <div class="overflow-hidden p-4 rounded-lg ">
                    <div class="bg-gray-100 aspect-[4/3] rounded-lg">
                        <img src="../assets/img/web-lists/toko_buku.webp"
                            alt="Thumbnail Project Toko Buku"
                            class="w-full h-full object-contain transition-transform duration-500 group-hover:scale-105 rounded-lg " />
                    </div>
                </div> 

                <div class="p-4 flex flex-col justify-between flex-1">
                    <div>
                        <h2 class="text-lg font-semibold mb-1 text-gray-800 group-hover:text-blue-600 transition-colors duration-300">
                            Toko Buku
                        </h2>
                        <p class="text-sm text-gray-500 min-h-[48px]">
                            Website toko yang dibuat untuk menjual buku secara online. Memiliki fitur keranjang belanja, dan lain-lain
                        </p>
                    </div>

                    <!-- Tombol Aksi -->
                    <div class="mt-4 flex gap-2">
                        <a href="https://github.com/JKP5758/Library" target="_blank" aria-label="Kunjungi Repository Toko Buku"
                            class="flex-1 bg-gray-900 hover:bg-black text-white text-sm font-semibold px-4 py-2 rounded-md transition-all duration-300 shadow-sm hover:shadow-md hover:-translate-y-0.5 text-center">
                            Repository
                        </a>
                        <a href="http://jkp.free.nf" target="_blank" aria-label="Kunjungi Toko Buku"
                            class="flex-1 bg-blue-500 hover:bg-blue-600 text-white text-sm font-semibold px-4 py-2 rounded-md transition-all duration-300 shadow-sm hover:shadow-md hover:-translate-y-0.5 text-center">
                            Kunjungi
                        </a>
                    </div>
                </div>
            </div>



            <!-- Card Tani Berkah -->
            <div class="group bg-white rounded-2xl shadow transition-all duration-300 overflow-hidden max-w-sm w-full mx-auto flex flex-col hover:shadow-2xl hover:-translate-y-1 hover:scale-[1.02]">
                <div class="overflow-hidden p-4 rounded-lg ">
                    <div class="bg-gray-100 aspect-[4/3] rounded-lg ">
                        <img src="../assets/img/web-lists/pertanian.webp"
                            alt="Thumbnail Project Tani Berkah"
                            class="w-full h-full object-contain transition-transform duration-500 group-hover:scale-105 rounded-lg " />
                    </div>
                </div>
                <div class="p-4 flex flex-col justify-between flex-1">
                    <div>
                        <h2 class="text-lg font-semibold mb-1 text-gray-800 group-hover:text-blue-600 transition-colors duration-300">Tani Berkah</h2>
                        <p class="text-sm text-gray-500 min-h-[48px]">
                            Project ini dibuat untuk lomba mahasiswa baru Teknik Rekayasa perangkat Lunak.
                        </p>
                    </div>
                    <!-- Tombol Aksi -->
                    <div class="mt-4 flex gap-2">
                        <a href="https://github.com/JKP5758/Pertanian" target="_blank" aria-label="Kunjungi repository Tani Berkah"
                            class="flex-1 bg-gray-900 hover:bg-black text-white text-sm font-semibold px-4 py-2 rounded-md transition-all duration-300 shadow-sm hover:shadow-md hover:-translate-y-0.5 text-center">
                            Repository
                        </a>
                        <a href="https://mydev-pertanian.vercel.app/" target="_blank" aria-label="Kunjungi Tani Berkah"
                            class="flex-1 bg-blue-500 hover:bg-blue-600 text-white text-sm font-semibold px-4 py-2 rounded-md transition-all duration-300 shadow-sm hover:shadow-md hover:-translate-y-0.5 text-center">
                            Kunjungi
                        </a>
                    </div>
                </div>
            </div>

            <!-- Card School Web Host -->
            <div class="group bg-white rounded-2xl shadow transition-all duration-300 overflow-hidden max-w-sm w-full mx-auto flex flex-col hover:shadow-2xl hover:-translate-y-1 hover:scale-[1.02]">
                <div class="overflow-hidden p-4 rounded-lg ">
                    <div class="bg-gray-100 aspect-[4/3]">
                        <img src="../assets/img/web-lists/web_host.webp"
                            alt="Thumbnail Project Web Host"
                            loading="lazy"
                            class="w-full h-full object-contain transition-transform duration-500 group-hover:scale-105 rounded-lg " />
                    </div>
                </div>
                <div class="p-4 flex flex-col justify-between flex-1">
                    <div>
                        <h2 class="text-lg font-semibold mb-1 text-gray-800 group-hover:text-blue-600 transition-colors duration-300">School Web Host</h2>
                        <p class="text-sm text-gray-500 min-h-[48px]">
                            Project web host dimana para siwa dan siswi dapat menghost website buatan mereka sendiri.
                        </p>
                    </div>
                    <!-- Tombol Aksi -->
                    <div class="mt-4 flex gap-2">
                        <a href="https://github.com/JKP5758/Barkab-Server" target="_blank" aria-label="Kunjungi repository Barkab Server"
                            class="flex-1 bg-gray-900 hover:bg-black text-white text-sm font-semibold px-4 py-2 rounded-md transition-all duration-300 shadow-sm hover:shadow-md hover:-translate-y-0.5 text-center">
                            Repository
                        </a>
                        <a href="http://36.95.208.166:8000/" target="_blank"
                            class="flex-1 bg-blue-500 hover:bg-blue-600 text-white text-sm font-semibold px-4 py-2 rounded-md transition-all duration-300 shadow-sm hover:shadow-md hover:-translate-y-0.5 text-center">
                            Kunjungi
                        </a>
                    </div>
                </div>
            </div>

            <!-- Card SMK Muh 04 Byl -->
            <div class="group bg-white rounded-2xl shadow transition-all duration-300 overflow-hidden max-w-sm w-full mx-auto flex flex-col hover:shadow-2xl hover:-translate-y-1 hover:scale-[1.02]">
                <div class="overflow-hidden p-4 rounded-lg ">
                    <div class="bg-gray-100 aspect-[4/3]">
                        <img src="../assets/img/web-lists/barkab.webp"
                            alt="Thumbnail Project SMK Muh 04 Byl"
                            loading="lazy"
                            class="w-full h-full object-contain transition-transform duration-500 group-hover:scale-105 rounded-lg " />
                    </div>
                </div>
                <div class="p-4 flex flex-col justify-between flex-1">
                    <div>
                        <h2 class="text-lg font-semibold mb-1 text-gray-800 group-hover:text-blue-600 transition-colors duration-300">SMK Muh 04 Byl</h2>
                        <p class="text-sm text-gray-500 min-h-[48px]">
                            Website ini dibuat pada saat lomba desain web di OlimpicAD 2023 di Bandung.
                        </p>
                    </div>
                    <!-- Tombol Aksi -->
                    <div class="mt-4 flex gap-2">
                        <a href="https://github.com/JKP5758/OlimpicAD" target="_blank" aria-label="Kunjungi repository OlimpicAD 2023"
                            class="flex-1 bg-gray-900 hover:bg-black text-white text-sm font-semibold px-4 py-2 rounded-md transition-all duration-300 shadow-sm hover:shadow-md hover:-translate-y-0.5 text-center">
                            Repository
                        </a>
                        <a href="https://barkab.vercel.app/" target="_blank" aria-label="Kunjungi SMK Muh 04 Byl"
                            class="flex-1 bg-blue-500 hover:bg-blue-600 text-white text-sm font-semibold px-4 py-2 rounded-md transition-all duration-300 shadow-sm hover:shadow-md hover:-translate-y-0.5 text-center">
                            Kunjungi
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </main>

    <!-- Footer -->
    <?php include '../components/footer.php'; ?>

</body>

</html>
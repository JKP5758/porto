<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio</title>
    <meta name="description" content="Ini adalah halaman portfolio saya yang berisi proyek-proyek terbaik saya dalam pengembangan web dan desain.">
    <link rel="icon" type="image/png/ico" href="../assets//img//icons/favico.ico">
    <link href="../assets/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/photoswipe@5/dist/photoswipe.css" media="print" onload="this.media='all'">
    <link rel="preload" as="image" href="../assets/img/bg.webp">
    <link rel="preload" as="image" href="../assets/img/Rem.webp">
    <style>
        @font-face {
            font-family: 'Inter';
            src: url('../assets/fonts/Inter-VariableFont_opsz,wght.woff2') format('woff2');
            font-weight: 100 900;
            /* karena variable */
            font-style: normal;
            font-display: swap;
        }

        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>

<body>
    <?php include '../components/header.php'; ?>

    <div class="relative">
        <!-- Background Image -->
        <img
            src="../assets/img/Rem.webp"
            alt=""
            class="absolute inset-0 w-full h-full object-cover object-center opacity-25 z-0 pointer-events-none"
            fetchpriority="high" />

        <!-- Section -->
        <section class="relative z-10  bg-white/70 py-16  px-4">
            <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-[auto_1fr_auto] items-center gap-4">

                <!-- Tombol kiri -->
                <button class="hidden md:block bg-white rounded-full p-2 shadow hover:bg-gray-100">
                    ◀
                </button>

                <div class="relative overflow-hidden rounded-2xl">

                    <!-- Background Blur Layer -->
                    <div class="absolute inset-0 bg-cover bg-center scale-110 bg-black/20" style="background-image: url('../assets/img/bg.webp');"></div>


                    <!-- Hero content -->
                    <div class="relative z-10 grid grid-cols-1 md:grid-cols-2 gap-8 px-6 py-8 backdrop-blur-sm  bg-black/25">
                        <!-- Bagian A -->
                        <div class="flex flex-col justify-center space-y-6  p-4 h-full ">

                            <!-- A1: Judul Besar -->
                            <div class="">
                                <h1 class="text-4xl font-bold text-white"><span class="text-2xl text-sky-400" style="text-shadow: 1px 1px 2px rgba(0,0, 0, 0.5);">よぉ、みな！</span><br>Namaku JKP</h1>
                            </div>

                            <!-- A2: Deskripsi Singkat -->
                            <div class="">
                                <p class="text-white">Aku adalah seorang programmer pemula yang masih belajar dalam web desain dan cyber security.</p>
                            </div>

                            <!-- A3: Tombol Read More (rata kanan) -->
                            <div class="text-right font-bold">
                                <a href="#" class="group relative inline-block text-white transition-colors duration-200 hover:text-white">
                                    Selengkapnya...
                                    <span class="absolute left-0 -bottom-1 h-[4px] w-full rounded-full bg-whitetransition-colors duration-200 group-hover:bg-white"></span>
                                </a>
                            </div>

                        </div>

                        <!-- Bagian B: Ilustrasi -->
                        <div class="flex items-center justify-center">
                            <img src="../assets/img/Rem.webp" alt="Ilustrasi Karakter" class="max-h-72 object-contain drop-shadow-lg transition-transform duration-300 hover:scale-105 animate-pop-in" />
                        </div>

                    </div>
                </div>

                <button class="hidden md:block bg-white rounded-full p-2 shadow hover:bg-gray-100">
                    ▶
                </button>

            </div>
        </section>

        <section class="relative z-10   bg-white/70 py-16 px-4 ">
            <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-6 rounded-xl p-6 max-sm:px-0">

                <!-- A (Kiri) -->
                <div class="grid grid-cols-1 lg:grid-cols-[2fr_1fr] gap-4  p-4 lg:pr-0 max-sm:px-0">

                    <!-- A1: Web List -->
                    <div class="flex flex-col justify-start space-y-4 p-4 rounded-2xl bg-white">
                        <!-- Title -->
                        <h2 class="text-3xl font-bold text-gray-800 tracking-wide pb-2">Website</h2>

                        <!-- 2 Card mendatar (pakai image, ukuran fleksibel) -->
                        <div class="flex flex-wrap gap-4">
                            <!-- Card 1 -->
                            <div class="relative group flex-1 min-w-[120px] h-48 bg-white rounded-xl overflow-hidden shadow border border-gray-400 cursor-pointer transition-transform duration-300 hover:scale-[1.02]">
                                <img id="cardA-img1" src="../assets/img/sample_web/WebA1.webp" alt="Preview Web E-commerce"
                                    class="absolute inset-0 w-full h-48 object-cover transition-opacity duration-1000 opacity-100 group-hover:blur-sm group-hover:brightness-90" />
                                <img id="cardA-img2" src="" alt=""
                                    class="absolute inset-0 w-full h-48 object-cover transition-opacity duration-1000 opacity-0 group-hover:blur-sm group-hover:brightness-90" />

                                <!-- Overlay gelap bawah (bisa diatur tingginya) -->
                                <div class="absolute bottom-0 left-0 w-full h-[60%] bg-gradient-to-t from-black to-transparent px-4 flex items-end pb-2">
                                    <h3 class="text-white text-sm font-semibold mb-1 transition-opacity duration-300 group-hover:opacity-0">
                                        E-commerce
                                    </h3>
                                </div>

                                <!-- Deskripsi muncul saat hover -->
                                <div class="absolute inset-0 bg-black/30 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center p-4 text-center">
                                    <p class="text-white text-sm">Pembuatan website sistem jual beli buku untuk Toko buku</p>
                                </div>
                            </div>



                            <!-- Card 2 -->
                            <div class="relative group flex-1 min-w-[120px] h-48 bg-white rounded-xl overflow-hidden shadow border border-gray-400 cursor-pointer transition-transform duration-300 hover:scale-[1.02]">
                                <img id="cardB-img1" src="../assets/img/sample_web/WebB1.webp" alt="Preview Web Company Profile"
                                    class="absolute inset-0 w-full h-48 object-cover transition-opacity duration-1000 opacity-100 group-hover:blur-sm group-hover:brightness-90" />
                                <img id="cardB-img2" src="" alt=""
                                    class="absolute inset-0 w-full h-48 object-cover transition-opacity duration-1000 opacity-0 group-hover:blur-sm group-hover:brightness-90" />

                                <!-- Overlay gelap bawah (bisa diatur tingginya) -->
                                <div class="absolute bottom-0 left-0 w-full h-[60%] bg-gradient-to-t from-black to-transparent px-4 flex items-end pb-2">
                                    <h3 class="text-white text-sm font-semibold mb-1 transition-opacity duration-300 group-hover:opacity-0">
                                        Company Profile
                                    </h3>
                                </div>

                                <!-- Deskripsi muncul saat hover -->
                                <div class="absolute inset-0 bg-black/30 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center p-4 text-center">
                                    <p class="text-white text-sm">Pembuatan website intuk menunjukkan Profil Perusahaan</p>
                                </div>
                            </div>
                        </div>



                        <!-- Tombol View More -->
                        <div class="text-right font-bold">
                            <button class="w-full px-6 py-3 rounded-xl bg-zinc-100 text-zinc-800 shadow-md shadow-zinc-200 transition-all duration-300 hover:bg-zinc-200 hover:text-zinc-900 hover:shadow-zinc-400 hover:shadow-lg hover:scale-[1.03]">
                                Lihat Selengkapnya
                            </button>
                        </div>


                    </div>

                    <!-- A2: Web List -->
                    <div class="flex flex-col justify-start space-y-4 p-4 rounded-2xl bg-white">

                        <!-- Title -->
                        <h2 class="text-3xl font-bold text-gray-800 tracking-wide pb-2">Keahlian</h2>

                        <!-- List Skills -->
                        <div class="space-y-3">

                            <!-- Skill Item -->
                            <!-- PHP (warna ungu) -->
                            <div class="flex items-center gap-4 px-4 py-3 bg-gray-50 hover:bg-purple-100 transition duration-300 rounded-xl shadow-md hover:shadow-purple-400/80 shadow-purple-200/60">
                                <img src="../assets/img/icons/icons8-php-96.png" alt="PHP" class="w-8 h-8 object-contain" />
                                <span class="text-gray-800 font-semibold text-sm">PHP</span>
                            </div>

                            <!-- CSS3 (warna biru) -->
                            <div class="flex items-center gap-4 px-4 py-3 bg-gray-50 hover:bg-blue-100 transition duration-300 rounded-xl shadow-md hover:shadow-blue-400/80 shadow-blue-200/60">
                                <img src="../assets/img/icons/icons8-css-96.png" alt="CSS3" class="w-8 h-8 object-contain" />
                                <span class="text-gray-800 font-semibold text-sm">CSS3</span>
                            </div>

                            <!-- MySQL (warna kuning/orange) -->
                            <div class="flex items-center gap-4 px-4 py-3 bg-gray-50 hover:bg-yellow-100 transition duration-300 rounded-xl shadow-md hover:shadow-yellow-400/80 shadow-yellow-200/60">
                                <img src="../assets/img/icons/icons8-mysql-96.png" alt="MySQL" class="w-8 h-8 object-contain" />
                                <span class="text-gray-800 font-semibold text-sm">MySQL</span>
                            </div>

                            <!-- Linux (warna hitam/abu gelap → efek terang saat hover) -->
                            <div class="flex items-center gap-4 px-4 py-3 bg-gray-50 hover:bg-gray-200 transition duration-300 rounded-xl shadow-md hover:shadow-gray-500/80 shadow-gray-300/60">
                                <img src="../assets/img/icons/icons8-linux-96.png" alt="Linux" class="w-8 h-8 object-contain" />
                                <span class="text-gray-800 font-semibold text-sm">Linux</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- B (Kanan) -->
                <div class=" grid grid-cols-1 lg:grid-cols-3 gap-4 p-4 lg:pl-0 max-sm:px-0">

                    <!-- B1: Logo Instansi -->
                    <div class="flex justify-center flex-col lg:col-span-1 space-y-4 p-4 rounded-2xl bg-white">

                        <!-- Judul -->
                        <h2 class=" lg:hidden text-3xl font-bold text-gray-800 tracking-wide pb-2">Pendidikan</h2>

                        <!-- Isi Logo -->
                        <div class="flex flex-row lg:flex-col justify-around gap-4">

                            <!-- Logo 1 -->
                            <div class="scale-110 aspect-square flex items-center justify-center transition-transform duration-300 hover:scale-115">
                                <img src="../assets/img/barkab.webp"
                                    alt="Logo Instansi 1"
                                    class="w-[70%] h-[70%] object-contain drop-shadow-[0_6px_8px_rgba(0,0,0,0.25)] transition-all duration-300 hover:drop-shadow-[0_6px_20px_rgba(0,150,255,0.5)]" />
                            </div>

                            <!-- Logo 2 -->
                            <div class="aspect-square flex items-center justify-center transition-transform duration-300 hover:scale-105">
                                <img src="../assets/img/polinus.webp"
                                    alt="Logo Instansi 2"
                                    class="w-[70%] h-[70%] object-contain drop-shadow-[0_6px_8px_rgba(0,0,0,0.25)] transition-all duration-300 hover:drop-shadow-[0_6px_20px_rgba(255,200,0,0.5)]" />
                            </div>


                        </div>
                    </div>


                    <!-- Pengalaman & Kegiatan -->
                    <div class="lg:col-span-2 space-y-6 p-4 rounded-2xl bg-white">

                        <!-- Title (khusus mobile) -->
                        <h2 class=" lg:hidden text-2xl sm:text-3xl font-bold text-gray-800 tracking-tight">
                            Pengalaman & Kegiatan
                        </h2>

                        <!-- Daftar Pengalaman -->
                        <div class="space-y-4">

                            <!-- Item: Merdeka Siber -->
                            <div class="flex items-center gap-4 bg-white px-5 py-4 rounded-xl shadow-md shadow-red-100/50 hover:shadow-red-400/40 hover:shadow-lg transition duration-300">
                                <img src="../assets/img/icons/merdeka.webp" alt="Merdeka Siber"
                                    class="w-14 h-14 p-1 rounded-lg bg-white border border-red-200 shadow-sm" />
                                <div>
                                    <h3 class="font-semibold text-gray-800 text-base">Merdeka Siber</h3>
                                    <p class="text-sm text-gray-600">Mengikuti pelatihan Penetration Tester Bug Bounty Fun & Profit</p>
                                </div>
                            </div>

                            <!-- Item: Gamelab -->
                            <div class="flex items-center gap-4 bg-white px-5 py-4 rounded-xl shadow-md shadow-sky-100/50 hover:shadow-sky-400/40 hover:shadow-lg transition duration-300">
                                <img src="../assets/img/icons/gamelab.webp" alt="Gamelab"
                                    class="w-14 h-14 p-1 rounded-lg bg-white border border-sky-200 shadow-sm" />
                                <div>
                                    <h3 class="font-semibold text-gray-800 text-base">Gamelab</h3>
                                    <p class="text-sm text-gray-600">Mengikuti program magang pembuatan game di Gamelab</p>
                                </div>
                            </div>

                            <!-- Item: Olympicad -->
                            <div class="flex items-center gap-4 bg-white px-5 py-4 rounded-xl shadow-md shadow-yellow-100/50 hover:shadow-yellow-400/40 hover:shadow-lg transition duration-300">
                                <img src="../assets/img/icons/olympicad.webp" alt="Olympicad"
                                    class="w-14 h-14 p-1 rounded-lg bg-white border border-yellow-200 shadow-sm" />
                                <div>
                                    <h3 class="font-semibold text-gray-800 text-base">Olympicad</h3>
                                    <p class="text-sm text-gray-600">Mengikuti Olimpiade Ahmad Dahlan di Bandung</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>



    <section id="sertifikat" class="py-20 px-4 bg-gradient-to-b from-white via-sky-50 to-white">
        <div class="max-w-screen-lg mx-auto text-center">
            <h2 class="text-3xl font-bold text-sky-700 mb-2">Sertifikat Pencapaian 🏆</h2>
            <div class="w-16 h-1 bg-sky-500 mx-auto rounded-full mb-6"></div>
            <p class="text-gray-600 mb-10 text-sm sm:text-base">Beberapa penghargaan dan bukti kontribusi dalam dunia teknologi & pengembangan.</p>

            <div class="pswp-gallery grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
                <!-- Sertifikat 1 -->
                <div class=" mb-4">
                    <a href="../assets/img/gamelab_certificate.webp" data-pswp-width="3055" data-pswp-height="2160" target="_blank">
                        <img src="../assets/img/compress/gamelab_certificate.webp" alt="Sertifikat Gamelab"
                            class="rounded-lg shadow-md hover:shadow-sky-400/40 hover:shadow-lg hover:scale-[1.03] transition-all duration-300 cursor-zoom-in" />
                    </a>
                    <p class="text-base italic text-gray-600 mt-4 sm:mt-6 tracking-wide">Sertifikat Gamelab</p>
                </div>

                <!-- Sertifikat 2 -->
                <div class=" mb-4">
                    <a href="../assets/img/olimpicad_certificate.webp" data-pswp-width="3096" data-pswp-height="2160" target="_blank">
                        <img src="../assets/img/compress/olimpicad_certificate.webp" alt="Sertifikat OlimpicAD"
                            class="rounded-lg shadow-md hover:shadow-yellow-400/40 hover:shadow-lg hover:scale-[1.03] transition-all duration-300 cursor-zoom-in" />
                    </a>
                    <p class="text-base italic text-gray-600 mt-4 sm:mt-6 tracking-wide">Sertifikat OlimpicAD</p>
                </div>

                <!-- Sertifikat 3 -->
                <div class=" mb-4">
                    <a href="../assets/img/merdeka_siber_certificate.webp" data-pswp-width="3240" data-pswp-height="2160" target="_blank">
                        <img src="../assets/img/compress/merdeka_siber_certificate.webp" alt="Sertifikat Merdeka Siber"
                            class="rounded-lg shadow-md hover:shadow-red-400/40 hover:shadow-lg hover:scale-[1.03] transition-all duration-300 cursor-zoom-in" />
                    </a>
                    <p class="text-base italic text-gray-600 mt-4 sm:mt-6 tracking-wide">Sertifikat Merdeka Siber</p>
                </div>
            </div>
        </div>
    </section>
    <!-- PhotoSwipe container -->
    <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true"></div>



    <section class="py-16 px-4 relative bg-[url('../../assets/img/bg-kontak.webp')] bg-cover bg-center bg-no-repeat">
        <div class="max-w-5xl mx-auto backdrop-blur-md bg-black/30 border border-white/20 rounded-2xl p-8 shadow-lg">
            <h2 class="text-3xl font-bold mb-8 text-center text-white drop-shadow-md">Hubungi Saya</h2>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">

                <!-- Kontak Langsung -->
                <div class="space-y-6">
                    <!-- Pembuka -->
                    <p class="text-white text-base leading-relaxed drop-shadow-sm">
                        Saya selalu terbuka untuk proyek baru, kolaborasi, atau hanya sekadar ngobrol santai ✨
                    </p>

                    <!-- Kontak List -->
                    <div class="space-y-4">

                        <!-- Email -->
                        <div class="flex items-center gap-3 p-4 rounded-lg bg-black/40 backdrop-blur-sm border border-white/20 hover:scale-105 transition">
                            <img src="../assets/img/icons/gmail.svg" alt="Email" class="w-6 h-6" />
                            <div>
                                <p class="text-white font-semibold drop-shadow-sm">Email</p>
                                <p class="text-white/90 drop-shadow-sm">jokopurnomo22012006@gmail.com</p>
                            </div>
                        </div>

                        <!-- WhatsApp -->
                        <div class="flex items-center gap-3 p-4 rounded-lg bg-black/40 backdrop-blur-sm border border-white/20 hover:scale-105 transition">
                            <img src="../assets/img/icons/whatsapp.svg" alt="WhatsApp" class="w-6 h-6" />
                            <div>
                                <p class="text-white font-semibold drop-shadow-sm">WhatsApp</p>
                                <p class="text-white/90 drop-shadow-sm">+62 812-3456-7890</p>
                            </div>
                        </div>

                        <!-- GitHub -->
                        <div class="flex items-center gap-3 p-4 rounded-lg bg-black/40 backdrop-blur-sm border border-white/20 hover:scale-105 transition">
                            <img src="../assets/img/icons/github.svg" alt="GitHub" class="w-6 h-6" />
                            <div>
                                <p class="text-white font-semibold drop-shadow-sm">GitHub</p>
                                <a href="https://github.com/JKP5758" class="text-white/90 hover:underline hover:text-white drop-shadow-sm transition duration-300">
                                    github.com/JKP5758
                                </a>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Form Kontak -->
                <form action="#" method="POST" class="space-y-4 bg-black/40 backdrop-blur-sm border border-white/20 p-6 rounded-xl shadow">
                    <div>
                        <label class="block font-semibold mb-1 text-white drop-shadow-sm" for="name">Nama</label>
                        <input type="text" id="name" name="name" class="w-full p-2 rounded bg-white/80 text-black placeholder:text-gray-500 focus:outline-none focus:ring-2 focus:ring-white/50" required>
                    </div>
                    <div>
                        <label class="block font-semibold mb-1 text-white drop-shadow-sm" for="email">Email</label>
                        <input type="email" id="email" name="email" class="w-full p-2 rounded bg-white/80 text-black placeholder:text-gray-500 focus:outline-none focus:ring-2 focus:ring-white/50" required>
                    </div>
                    <div>
                        <label class="block font-semibold mb-1 text-white drop-shadow-sm" for="message">Pesan</label>
                        <textarea id="message" name="message" rows="4" class="w-full p-2 rounded bg-white/80 text-black placeholder:text-gray-500 focus:outline-none focus:ring-2 focus:ring-white/50" required></textarea>
                    </div>
                    <button type="submit" class="w-full bg-gradient-to-r from-sky-500 to-indigo-500 hover:from-sky-600 hover:to-indigo-600 text-white font-semibold py-2 px-4 rounded-lg shadow-md transition duration-300">
                        Kirim Pesan
                    </button>
                </form>

            </div>
        </div>
    </section>

    <?php include '../components/footer.php'; ?>

    <script type="module">
        document.addEventListener("DOMContentLoaded", async () => {
            const PhotoSwipeLightbox = (await import('../assets/js/photoswipe-lightbox.esm.min.js')).default;

            const lightbox = new PhotoSwipeLightbox({
                gallery: '.pswp-gallery',
                children: 'a',
                pswpModule: () => import('../assets/js/photoswipe.esm.min.js')
            });
            lightbox.init();
        });

        function setupImageRotation(imageIds, imageList, intervalMs) {
            let current = 0;
            const imgA = document.getElementById(imageIds[0]);
            const imgB = document.getElementById(imageIds[1]);
            let showingA = true;

            setInterval(() => {
                current = (current + 1) % imageList.length;

                const nextImg = showingA ? imgB : imgA;
                const currentImg = showingA ? imgA : imgB;

                nextImg.src = imageList[current];
                nextImg.classList.add('opacity-100');
                nextImg.classList.remove('opacity-0');

                currentImg.classList.remove('opacity-100');
                currentImg.classList.add('opacity-0');

                showingA = !showingA;
            }, intervalMs);
        }

        // Setup untuk Card A
        setupImageRotation(
            ['cardA-img1', 'cardA-img2'],
            [
                '../assets/img/sample_web/WebA2.webp',
                '../assets/img/sample_web/WebA3.webp',
                '../assets/img/sample_web/WebA4.webp',
                '../assets/img/sample_web/WebA1.webp'
            ],
            5000
        );

        // Setup untuk Card B
        setupImageRotation(
            ['cardB-img1', 'cardB-img2'],
            [
                '../assets/img/sample_web/WebB2.webp',
                '../assets/img/sample_web/WebB3.webp',
                '../assets/img/sample_web/WebB4.webp',
                '../assets/img/sample_web/WebB1.webp'
            ],
            5000
        );
    </script>

</body>

</html>
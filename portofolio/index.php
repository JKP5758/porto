<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio</title>
    <meta name="description" content="Ini adalah halaman portfolio saya yang berisi proyek-proyek terbaik saya dalam pengembangan web dan desain.">
    <link rel="icon" type="image/png/ico" href="../assets//img//icons/favico.ico">
    <link href="../assets/css/style.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="preload" as="image" href="../assets/img/Rem.webp">
    <link rel="preload" as="image" href="../assets/img/bg.webp" fetchpriority="high">
    <link rel="preload" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://unpkg.com/photoswipe@5/dist/photoswipe.css" media="print" onload="this.media='all'">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: white;
        }
    </style>
</head>

<body>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 1000, // durasi animasi
            once: true // animasi hanya sekali
        });
    </script>


    <?php include '../components/header.php'; ?>

    <div class="relative">
        <!-- Background Image -->
        <div class="absolute h-full w-full"
            data-aos="fade-zoom-in"
            data-aos-easing="ease-in-back"
            data-aos-duration="800"
            data-aos-offset="0"
            data-aos-delay="0">

            <img
                src="../assets/img/Rem.webp"
                alt=""
                class="absolute p-1 inset-0 w-full h-full object-cover object-center opacity-25 z-0 pointer-events-none"
                aria-hidden="true"
                loading="eager"
                fetchpriority="high" />
        </div>

        <!-- Section -->
        <section class="relative z-10  bg-white/70 pb-12 pt-8 px-4 md:py-16 md:px-16">
            <div class="max-w-7xl mx-auto grid grid-cols-1 items-center gap-4">

                <!-- Tombol kiri -->

                <div class="relative overflow-hidden rounded-2xl">

                    <!-- Background Blur Layer -->
                    <div class="absolute inset-0 bg-cover bg-center scale-110 bg-black/20" style="background-image: url('../assets/img/bg.webp');"></div>


                    <!-- Hero content -->
                    <div class="relative z-10 grid grid-cols-1 place-items-center md:grid-cols-2 gap-8 px-6 py-8 backdrop-blur-sm  bg-black/25">
                        <!-- Bagian A -->
                        <div class="flex flex-col justify-center space-y-6  p-4 h-full ">

                            <!-- A1: Judul Besar -->
                            <div class=""
                                data-aos="fade-zoom-in"
                                data-aos-easing="ease-in-back"
                                data-aos-duration="700"
                                data-aos-delay=""
                                data-aos-offset="0">
                                <h1 class="text-4xl font-bold text-white"><span class="text-2xl text-sky-400" style="text-shadow: 1px 1px 2px rgba(0,0, 0, 0.5);">よぉ、みな！</span><br>Nicname JKP</h1>
                            </div>

                            <!-- A2: Deskripsi Singkat -->
                            <div class="" data-aos="fade-up"
                                data-aos-duration="1000"
                                data-aos-delay="300">
                                <p class="text-white">Gua adalah seorang programmer pemula yang masih belajar tentang web desain dan cyber security.</p>
                            </div>

                            <!-- A3: Tombol Read More (rata kanan) -->
                            <div class="text-right font-bold" data-aos="fade-up"
                                data-aos-duration="1000"
                                data-aos-delay="500">
                                <a href="#about" class="group relative inline-block text-white transition-colors duration-200 hover:text-white">
                                    Selengkapnya...
                                    <span class="absolute left-0 -bottom-1 h-[4px] w-full rounded-full bg-whitetransition-colors duration-200 group-hover:bg-white"></span>
                                </a>
                            </div>

                        </div>

                        <!-- Bagian B: Ilustrasi -->
                        <div class="aspect-square max-h-72 w-full relative flex items-center justify-center" data-aos="fade-up"
                            data-aos-duration="1200"
                            data-aos-delay="500">
                            <!-- SVG Background (lebih besar, skala 1.5x, animasi rotate) -->
                            <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg"
                                class="absolute inset-0 w-full h-full z-0 pointer-events-none opacity-60 scale-[1.5] animate-spin-slow">
                                <path fill="#38bdf8" d="M48.8,-50.5C63.1,-46.1,74.6,-30.6,75,-15.2C75.3,0.3,64.6,15.7,55.8,33.4C47,51.2,40.1,71.3,27.7,75.6C15.3,79.9,-2.7,68.4,-17.6,58.6C-32.6,48.8,-44.4,40.6,-49.3,29.7C-54.1,18.7,-52,5,-48.5,-7.4C-45,-19.8,-40.1,-30.9,-31.8,-36.4C-23.5,-41.9,-11.7,-41.8,2.7,-45.1C17.2,-48.3,34.4,-54.9,48.8,-50.5Z" transform="translate(100 100)" />
                            </svg>
                            <!-- Image di atas SVG -->
                            <img src="../assets/img/Rem.webp"
                                alt="Ilustrasi Karakter"
                                class="relative h-full w-full object-contain drop-shadow-lg transition-transform duration-300 ease-out hover:scale-105 active:scale-110 max-sm:scale-105 animate-pop-in z-10"
                                loading="eager"
                                fetchpriority="high">
                        </div>

                    </div>
                </div>


            </div>
        </section>

        <section id="skills" class="scroll-mt-16 relative z-10   bg-white/70 py-16 px-4 ">
            <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-6 rounded-xl p-6 max-sm:px-0">

                <!-- A (Kiri) -->
                <div class="grid grid-cols-1 lg:grid-cols-[2fr_1fr] gap-4  p-4 lg:pr-0 max-sm:px-0">

                    <!-- A1: Web List -->
                    <div class="flex flex-col justify-start space-y-4 p-4 rounded-2xl bg-white">
                        <!-- Title -->
                        <h2 class="text-3xl font-bold text-gray-800 tracking-wide pb-2"
                            data-aos="fade-zoom-in"
                            data-aos-easing="ease-in-back"
                            data-aos-duration="700"
                            data-aos-offset="0"
                            data-aos-delay="0">
                            Website
                        </h2>

                        <!-- 2 Card mendatar (pakai image, ukuran fleksibel) -->
                        <div class="flex flex-wrap gap-4">
                            <!-- Card 1 -->
                            <div class="relative group flex-1 min-w-[120px] h-48 bg-white rounded-xl overflow-hidden shadow border border-gray-400 cursor-pointer transition-transform duration-300 hover:scale-[1.02]"
                                data-aos="zoom-in"
                                data-aos-duration="800"
                                data-aos-delay="200">

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
                            <div class="relative group flex-1 min-w-[120px] h-48 bg-white rounded-xl overflow-hidden shadow border border-gray-400 cursor-pointer transition-transform duration-300 hover:scale-[1.02]"
                                data-aos="zoom-in"
                                data-aos-duration="800"
                                data-aos-delay="300">

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
                        <div class="text-right font-bold"
                            data-aos="zoom-in"
                            data-aos-duration="800"
                            data-aos-delay="600">
                            <button class="w-full px-6 py-3 rounded-xl bg-zinc-100 text-zinc-800 shadow-md shadow-zinc-200 transition-all duration-300 hover:bg-zinc-200 hover:text-zinc-900 hover:shadow-zinc-400 hover:shadow-lg hover:scale-[1.03]">
                                Lihat Selengkapnya
                            </button>
                        </div>


                    </div>

                    <!-- A2: Web List -->
                    <div class="flex flex-col justify-start space-y-4 p-4 rounded-2xl bg-white">

                        <!-- Title -->
                        <h2 class="text-3xl font-bold text-gray-800 tracking-wide pb-2"
                            data-aos="fade-zoom-in"
                            data-aos-easing="ease-in-back"
                            data-aos-duration="700"
                            data-aos-offset="0"
                            data-aos-delay="0">
                            Keahlian
                        </h2>

                        <!-- List Skills -->
                        <div class="space-y-3 max-sm:p-2">

                            <!-- Skill Item -->
                            <!-- PHP (warna ungu) -->
                            <div data-aos="zoom-in"
                                data-aos-duration="800"
                                data-aos-delay="200">
                                <div class="flex items-center gap-4 px-4 py-3 bg-gray-50 hover:bg-purple-100 transform transition duration-300 ease-out hover:scale-105 active:scale-110 max-sm:scale-105 animate-pop-in rounded-xl shadow-md hover:shadow-purple-400/80 shadow-purple-200/60">
                                    <img src="../assets/img/icons/icons8-php-96.png" alt="PHP" class="w-8 h-8 object-contain" />
                                    <span class="text-gray-800 font-semibold text-sm">PHP</span>
                                </div>
                            </div>

                            <!-- CSS3 (warna biru) -->
                            <div data-aos="zoom-in"
                                data-aos-duration="800"
                                data-aos-delay="300">
                                <div class="flex items-center gap-4 px-4 py-3 bg-gray-50 hover:bg-blue-100 transform transition duration-300 ease-out hover:scale-105 active:scale-110 max-sm:scale-105 animate-pop-in rounded-xl shadow-md hover:shadow-blue-400/80 shadow-blue-200/60">
                                    <img src="../assets/img/icons/icons8-css-96.png" alt="CSS3" class="w-8 h-8 object-contain" />
                                    <span class="text-gray-800 font-semibold text-sm">CSS3</span>
                                </div>
                            </div>

                            <!-- MySQL (warna kuning/orange) -->
                            <div data-aos="zoom-in"
                                data-aos-duration="800"
                                data-aos-delay="400">

                                <div class="flex items-center gap-4 px-4 py-3 bg-gray-50 hover:bg-yellow-100 transform transition duration-300 ease-out hover:scale-105 active:scale-110 max-sm:scale-105 animate-pop-in rounded-xl shadow-md hover:shadow-yellow-400/80 shadow-yellow-200/60">
                                    <img src="../assets/img/icons/icons8-mysql-96.png" alt="MySQL" class="w-8 h-8 object-contain" />
                                    <span class="text-gray-800 font-semibold text-sm">MySQL</span>
                                </div>
                            </div>

                            <!-- Linux (warna hitam/abu gelap → efek terang saat hover) -->
                            <div data-aos="zoom-in"
                                data-aos-duration="800"
                                data-aos-delay="500">

                                <div class="flex items-center gap-4 px-4 py-3 bg-gray-50 hover:bg-gray-200 transform transition duration-300 ease-out hover:scale-105 active:scale-110 max-sm:scale-105 animate-pop-in rounded-xl shadow-md hover:shadow-gray-500/80 shadow-gray-300/60">
                                    <img src="../assets/img/icons/icons8-linux-96.png" alt="Linux" class="w-8 h-8 object-contain" />
                                    <span class="text-gray-800 font-semibold text-sm">Linux</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- B (Kanan) -->
                <div class=" grid grid-cols-1 lg:grid-cols-3 gap-4 p-4 lg:pl-0 max-sm:px-0">

                    <!-- B1: Logo Instansi -->
                    <div class="flex justify-center flex-col lg:col-span-1 space-y-4 p-4 rounded-2xl bg-white">

                        <!-- Judul -->
                        <h2 class=" lg:hidden text-3xl font-bold text-gray-800 tracking-wide pb-2"
                            data-aos="fade-zoom-in"
                            data-aos-easing="ease-in-back"
                            data-aos-duration="700"
                            data-aos-offset="0"
                            data-aos-delay="0">
                            Pendidikan
                        </h2>

                        <!-- Isi Logo -->
                        <div class="flex flex-row lg:flex-col justify-around gap-4">

                            <!-- Logo 1 -->
                            <div data-aos="zoom-in"
                                data-aos-duration="800"
                                data-aos-delay="200">

                                <div class="scale-110 aspect-square flex items-center justify-center transform transition-transform duration-300 hover:scale-115">
                                    <img src="../assets/img/barkab.webp"
                                        alt="Logo Instansi 1"
                                        loading="lazy"
                                        class="w-[70%] h-[70%] object-contain drop-shadow-[0_6px_8px_rgba(0,0,0,0.25)] transition-all duration-300 hover:drop-shadow-[0_6px_20px_rgba(0,150,255,0.5)]" />
                                </div>
                            </div>

                            <!-- Logo 2 -->
                            <div data-aos="zoom-in"
                                data-aos-duration="800"
                                data-aos-delay="400">

                                <div class="aspect-square flex items-center justify-center  transition-transform duration-300 hover:scale-105">
                                    <img src="../assets/img/polinus.webp"
                                        alt="Logo Instansi 2"
                                        loading="lazy"
                                        class="w-[70%] h-[70%] object-contain drop-shadow-[0_6px_8px_rgba(0,0,0,0.25)] transition-all duration-300 hover:drop-shadow-[0_6px_20px_rgba(255,200,0,0.5)]" />
                                </div>
                            </div>


                        </div>
                    </div>


                    <!-- Pengalaman & Kegiatan -->
                    <div class="lg:col-span-2 space-y-6 p-4 max-sm:p-6 rounded-2xl bg-white">

                        <!-- Title (khusus mobile) -->
                        <h2 class=" lg:hidden text-2xl sm:text-3xl font-bold text-gray-800 tracking-tight"
                            data-aos="fade-zoom-in"
                            data-aos-easing="ease-in-back"
                            data-aos-duration="700"
                            data-aos-offset="0"
                            data-aos-delay="0">
                            Pengalaman & Kegiatan
                        </h2>

                        <!-- Daftar Pengalaman -->
                        <div class="space-y-4">

                            <!-- Item: Merdeka Siber -->
                            <div data-aos="zoom-in"
                                data-aos-duration="800"
                                data-aos-delay="200">

                                <div class="flex items-center gap-4 bg-white px-5 py-4 rounded-xl shadow-md shadow-red-100/50 hover:shadow-red-400/40 hover:shadow-lg transition duration-300 ease-out hover:scale-105 active:scale-110 max-sm:scale-105 animate-pop-in">
                                    <img src="../assets/img/icons/merdeka.webp" alt="Merdeka Siber" loading="lazy"
                                        class="w-14 h-14 p-1 rounded-lg bg-white border border-red-200 shadow-sm" />
                                    <div>
                                        <h3 class="font-semibold text-gray-800 text-base">Merdeka Siber</h3>
                                        <p class="text-sm text-gray-600">Mengikuti pelatihan Penetration Tester Bug Bounty Fun & Profit</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Item: Gamelab -->
                            <div data-aos="zoom-in"
                                data-aos-duration="800"
                                data-aos-delay="400">

                                <div class="flex items-center gap-4 bg-white px-5 py-4 rounded-xl shadow-md shadow-sky-100/50 hover:shadow-sky-400/40 hover:shadow-lg transition duration-300 ease-out hover:scale-105 active:scale-110 max-sm:scale-105 animate-pop-in">
                                    <img src="../assets/img/icons/gamelab.webp" alt="Gamelab" loading="lazy"
                                        class="w-14 h-14 p-1 rounded-lg bg-white border border-sky-200 shadow-sm" />
                                    <div>
                                        <h3 class="font-semibold text-gray-800 text-base">Gamelab</h3>
                                        <p class="text-sm text-gray-600">Mengikuti program magang pembuatan game di Gamelab</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Item: Olympicad -->
                            <div data-aos="zoom-in"
                                data-aos-duration="800"
                                data-aos-delay="600">

                                <div class="flex items-center gap-4 bg-white px-5 py-4 rounded-xl shadow-md shadow-yellow-100/50 hover:shadow-yellow-400/40 hover:shadow-lg transition duration-300 ease-out hover:scale-105 active:scale-110 max-sm:scale-105 animate-pop-in">
                                    <img src="../assets/img/icons/olympicad.webp" alt="Olympicad" loading="lazy"
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
            </div>
        </section>
    </div>

    <section id="about" class=" scroll-mt-12 pt-1">
        <div class="relative w-full flex justify-center items-center py-16 px-4 md:p-12 gap-8 md:gap-16 bg-cover md:bg-bottom bg-bottom " style="background-image: url('../assets/img/layer-bottom.svg');">

            <div class=" max-w-5xl w-full relative flex justify-center gap-8 max-sm:p-6 max-md:flex-col  backdrop-blur-xs border border-white/20 rounded-2xl p-8 shadow-lg">
                <!-- Bagian A: Ilustrasi -->
                <div class=""
                    data-aos="zoom-in"
                    data-aos-duration="800"
                    data-aos-delay="0">

                    <div class=" flex min-h-48 h-full justify-center items-center border-2 border-stone-300/50 rounded-xl bg-white/60 shadow-lg p-6 group relative overflow-hidden cursor-pointer transition-transform duration-300 hover:scale-[1.02]">
                        <img src="../assets/img/jkp.jpg"
                            alt="Ilustrasi About Me"
                            loading="lazy"
                            class="w-full h-full  rounded-lg shadow-lg ring-2 ring-sky-200 absolute inset-0  object-cover transition-opacity duration-1000 opacity-100 group-hover:blur-sm group-hover:brightness-90" />
                        <!-- Overlay gelap bawah -->
                        <div class="absolute bottom-0 left-0 w-full h-[60%] bg-gradient-to-t from-black to-transparent px-4 flex items-end pb-2 pointer-events-none">
                            <!-- Judul/teks opsional, bisa diisi jika ingin -->
                            <h3 class="text-white text-xl font-semibold mb-4 ml-2 transition-opacity duration-300 group-hover:opacity-0">
                                Joko Purnomo
                            </h3>
                        </div>
                        <!-- Deskripsi muncul saat hover (opsional, bisa diisi jika ingin) -->

                        <div class="z-10 absolute inset-0 bg-black/30 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center p-4 text-center">
                            <p class="text-white text-lg">Ini adalah foto Gua. foto ini diambil apa adanya, karena gua jarang difoto jadi foto gua sangat terbatas.</p>
                        </div>
                    </div>
                </div>


                <!-- Bagian B: About Me dan kalimat -->
                <div class="w-xl"
                    data-aos="zoom-in"
                    data-aos-duration="800"
                    data-aos-delay="200">

                    <div class=" w-xl border-2 border-white/25 rounded-xl bg-white/25 shadow-lg shadow-amber-50/30 p-6">
                        <h2 class="text-3xl font-bold mb-4 text-gray-800 drop-shadow-sm">About Me</h2>
                        <p class="mb-4 text-gray-700 leading-relaxed">
                            Halo! Nama gua Joko Purnomo, mahasiswa Teknik Rekayasa Perangkat Lunak yang suka banget ngulik coding, game, anime, dan cyber security.
                        </p>
                        <p class="mb-4 text-gray-700 leading-relaxed">
                            Gua suka nyoba hal baru dan pengen banget bisa bahasa Jepang! Yuk, ngobrol bareng gua kalau lu punya passion yang sama atau pengen belajar sesuatu.
                        </p>
                        <p class="text-gray-700 leading-relaxed">
                            Semangat terus, jangan lupa tidur, dan keep coding! 🚀
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="sertifikat" class="relative scroll-mt-16 py-20 px-4 bg-cover md:bg-top bg-center" style="background-image: url('../assets/img/layer-top.svg');">
        <div class=" max-w-screen-lg mx-auto text-center">
            <h2 class="text-3xl font-bold md:text-gray-800 text-stone-100 mb-2"
                data-aos="fade-zoom-in"
                data-aos-easing="ease-in-back"
                data-aos-duration="700"
                data-aos-offset="0"
                data-aos-delay="0">
                Sertifikat Pencapaian 🏆
            </h2>
            <div class="w-16 h-1 md:bg-zinc-800 bg-white mx-auto rounded-full mb-6"></div>
            <p class="md:text-gray-800 text-stone-100 mb-10 text-sm sm:text-base"
                data-aos="zoom-in"
                data-aos-duration="800"
                data-aos-delay="200">
                Beberapa penghargaan dan bukti kontribusi dalam dunia teknologi & pengembangan.
            </p>

            <div class=" pswp-gallery grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
                <!-- Sertifikat 1 -->
                <div class=" mb-4">
                    <div data-aos="zoom-in"
                        data-aos-duration="1200"
                        data-aos-delay="300">

                        <a href="../assets/img/gamelab_certificate.webp" data-pswp-width="3055" data-pswp-height="2160" target="_blank">
                            <img src="../assets/img/compress/gamelab_certificate.webp" alt="Sertifikat Gamelab" loading="lazy"
                                class="rounded-lg shadow-md hover:shadow-sky-400/40 hover:shadow-lg hover:scale-[1.03] transition-all duration-300 cursor-zoom-in" />
                        </a>
                    </div>
                    <p class="text-base italic text-gray-600 mt-4 sm:mt-6 tracking-wide">Sertifikat Gamelab</p>
                </div>

                <!-- Sertifikat 2 -->
                <div class=" mb-4">
                    <div data-aos="zoom-in"
                        data-aos-duration="1200"
                        data-aos-delay="500">

                        <a href="../assets/img/olimpicad_certificate.webp" data-pswp-width="3096" data-pswp-height="2160" target="_blank">
                            <img src="../assets/img/compress/olimpicad_certificate.webp" alt="Sertifikat OlimpicAD" loading="lazy"
                                class="rounded-lg shadow-md hover:shadow-yellow-400/40 hover:shadow-lg hover:scale-[1.03] transition-all duration-300 cursor-zoom-in" />
                        </a>
                    </div>
                    <p class="text-base italic text-gray-600 mt-4 sm:mt-6 tracking-wide">Sertifikat OlimpicAD</p>
                </div>

                <!-- Sertifikat 3 -->
                <div class=" mb-4">
                    <div data-aos="zoom-in"
                        data-aos-duration="1200"
                        data-aos-delay="700">

                        <a href="../assets/img/merdeka_siber_certificate.webp" data-pswp-width="3240" data-pswp-height="2160" target="_blank">
                            <img src="../assets/img/compress/merdeka_siber_certificate.webp" alt="Sertifikat Merdeka Siber" loading="lazy"
                                class="rounded-lg shadow-md hover:shadow-red-400/40 hover:shadow-lg hover:scale-[1.03] transition-all duration-300 cursor-zoom-in" />
                        </a>
                    </div>
                    <p class="text-base italic text-gray-600 mt-4 sm:mt-6 tracking-wide">Sertifikat Merdeka Siber</p>
                </div>
            </div>
        </div>
    </section>
    <!-- PhotoSwipe container -->
    <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true"></div>



    <section id="kontak-section" class="scroll-mt-16 py-16 px-4 relative bg-cover bg-center bg-no-repeat">
        <div class="max-w-5xl mx-auto backdrop-blur-xs bg-black/50 border border-white/20 rounded-2xl p-8 shadow-lg">
            <h2 class="text-3xl font-bold mb-8 text-center text-white drop-shadow-md"
                data-aos="fade-zoom-in"
                data-aos-easing="ease-in-back"
                data-aos-duration="700"
                data-aos-offset="0"
                data-aos-delay="0">
                Hubungi Saya
            </h2>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">

                <!-- Kontak Langsung -->
                <div class="space-y-6">
                    <!-- Pembuka -->
                    <p class="text-white text-base leading-relaxed drop-shadow-sm"
                        data-aos="zoom-in"
                        data-aos-duration="800"
                        data-aos-delay="200">
                        Saya selalu terbuka untuk proyek baru, kolaborasi, atau hanya sekadar ngobrol santai ✨
                    </p>

                    <!-- Kontak List -->
                    <div class="space-y-4">

                        <!-- Email -->
                        <div data-aos="zoom-in"
                            data-aos-duration="800"
                            data-aos-delay="300">

                            <div class="flex items-center gap-3 p-4 rounded-lg bg-stone-300/10 border border-white/20 hover:scale-105 transition duration-300">
                                <img src="../assets/img/icons/gmail.svg" alt="Email" class="w-6 h-6" />
                                <div>
                                    <p class="text-white font-semibold drop-shadow-sm">Email</p>
                                    <p class="text-white/90 drop-shadow-sm">jokopurnomo22012006@gmail.com</p>
                                </div>
                            </div>
                        </div>

                        <!-- WhatsApp -->
                        <div data-aos="zoom-in"
                            data-aos-duration="800"
                            data-aos-delay="500">

                            <div class="flex items-center gap-3 p-4 rounded-lg bg-stone-300/10 border border-white/20 hover:scale-105 transition duration-300">
                                <img src="../assets/img/icons/whatsapp.svg" alt="WhatsApp" class="w-6 h-6" />
                                <div>
                                    <p class="text-white font-semibold drop-shadow-sm">WhatsApp</p>
                                    <p class="text-white/90 drop-shadow-sm">+62 812-3456-7890</p>
                                </div>
                            </div>
                        </div>

                        <!-- GitHub -->
                        <div data-aos="zoom-in"
                            data-aos-duration="800"
                            data-aos-delay="700">

                            <div class="flex items-center gap-3 p-4 rounded-lg bg-stone-300/10 border border-white/20 hover:scale-105 transition duration-300">
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
                </div>

                <!-- Form Kontak -->
                <form action="#" method="POST" class="space-y-4 bg-stone-300/10 border border-white/20 p-6 rounded-xl shadow"
                    data-aos="zoom-in"
                    data-aos-duration="2000"
                    data-aos-delay="700">
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
                    <button type="submit" class="w-full bg-gradient-to-r transition transform duration-300 from-stone-300/20 to-gray-800/20 hover:from-stone-300/30 hover:to-gray-800/30 text-white font-semibold py-2 px-4 rounded-lg shadow-md ">
                        Kirim Pesan
                    </button>


                </form>

            </div>
        </div>
    </section>


    <?php include '../components/footer.php'; ?>

    <script type="module">
        document.addEventListener("DOMContentLoaded", () => {
            const gallery = document.querySelector('.pswp-gallery');

            if (!gallery) return;

            const observer = new IntersectionObserver(async (entries, observer) => {
                if (entries[0].isIntersecting) {
                    const PhotoSwipeLightbox = (await import('../assets/js/photoswipe-lightbox.esm.min.js')).default;

                    const lightbox = new PhotoSwipeLightbox({
                        gallery: '.pswp-gallery',
                        children: 'a',
                        pswpModule: () => import('../assets/js/photoswipe.esm.min.js')
                    });
                    lightbox.init();

                    observer.disconnect(); // stop observing setelah diload
                }
            });

            observer.observe(gallery);
        });

        document.addEventListener("DOMContentLoaded", () => {
            const kontakSection = document.getElementById("kontak-section");

            if (!kontakSection) return;

            const observer = new IntersectionObserver((entries, observer) => {
                if (entries[0].isIntersecting) {
                    kontakSection.style.backgroundImage = "url('../assets/img/bg-kontak.webp')";
                    kontakSection.style.backgroundSize = "cover";
                    kontakSection.style.backgroundRepeat = "no-repeat";
                    kontakSection.style.backgroundPosition = "center";

                    observer.unobserve(kontakSection); // Stop observing setelah dimuat
                }
            });

            observer.observe(kontakSection);
        });

        // 🔹 Preload gambar dengan priority rendah
        function preloadImages(images) {
            images.forEach(src => {
                const img = new Image();
                img.loading = 'lazy'; // Low priority
                img.decoding = 'async'; // Parsing async
                img.src = src;
            });
        }

        // 🔹 Setup rotasi gambar
        function setupImageRotation(imageIds, imageList, intervalMs) {
            let current = 0;
            const imgA = document.getElementById(imageIds[0]);
            const imgB = document.getElementById(imageIds[1]);
            let showingA = true;

            // Pasang gambar pertama
            imgA.src = imageList[current];

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

        // 🔹 Daftar gambar Card A & Card B
        const cardAImages = [
            '../assets/img/sample_web/WebA2.webp',
            '../assets/img/sample_web/WebA3.webp',
            '../assets/img/sample_web/WebA4.webp',
            '../assets/img/sample_web/WebA1.webp'
        ];

        const cardBImages = [
            '../assets/img/sample_web/WebB2.webp',
            '../assets/img/sample_web/WebB3.webp',
            '../assets/img/sample_web/WebB4.webp',
            '../assets/img/sample_web/WebB1.webp'
        ];

        // 🔹 Preload dulu biar nggak request berulang
        preloadImages([...cardAImages, ...cardBImages]);

        // 🔹 Jalankan rotasi
        setupImageRotation(['cardA-img1', 'cardA-img2'], cardAImages, 5000);
        setupImageRotation(['cardB-img1', 'cardB-img2'], cardBImages, 5000);
    </script>

</body>

</html>
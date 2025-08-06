<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
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

<body>
    <?php include '../components/header.php'; ?>

    <!-- Section -->
    <section class="py-16  px-4">
        <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-[auto_1fr_auto] items-center gap-4">

            <!-- Tombol kiri -->
            <button class="hidden md:block bg-white rounded-full p-2 shadow hover:bg-gray-100">
                ◀
            </button>

            <div class="relative overflow-hidden rounded-2xl">

                <!-- Background Blur Layer -->
                <div class="absolute inset-0 bg-cover bg-center scale-110 bg-black/20" style="background-image: url('../assets/img/bg.png');"></div>


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
                                Baca Selengkapnya
                                <span class="absolute left-0 -bottom-1 h-[4px] w-full rounded-full bg-whitetransition-colors duration-200 group-hover:bg-white"></span>
                            </a>
                        </div>

                    </div>

                    <!-- Bagian B: Ilustrasi -->
                    <div class=" p-4 flex items-center justify-center">
                        <img src="../assets/img/Rem.png" alt="Ilustrasi Karakter" class="max-h-72 object-contain drop-shadow-lg transition-transform duration-300 hover:scale-105 animate-pop-in" />
                    </div>

                </div>
            </div>

            <button class="hidden md:block bg-white rounded-full p-2 shadow hover:bg-gray-100">
                ▶
            </button>

        </div>
    </section>

    <section class="py-16 px-4">
        <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-6 border-2 border-black rounded-xl p-6">

            <!-- A (Kiri) -->
            <div class="grid grid-cols-1 lg:grid-cols-[2fr_1fr] gap-4  p-4 lg:pr-0">

                <!-- A1: Web List -->
                <div class="flex flex-col justify-start space-y-4  p-4">
                    <!-- Title -->
                    <h2 class="text-3xl font-bold text-gray-800 tracking-wide pb-2">Website</h2>

                    <!-- 2 Card mendatar (pakai image, ukuran fleksibel) -->
                    <div class="flex flex-wrap gap-4">
                        <!-- Card 1 -->
                        <div class="relative group flex-1 min-w-[120px] bg-white rounded-xl overflow-hidden shadow border border-gray-400 cursor-pointer transition-transform duration-300 hover:scale-[1.02]">
                            <!-- Gambar -->
                            <img src="../assets/img/website.jpg" alt="Web 1" class="w-full h-48 object-cover transition-all duration-300 group-hover:blur-sm group-hover:brightness-90" />

                            <!-- Overlay gelap bawah (bisa diatur tingginya) -->
                            <div class="absolute bottom-0 left-0 w-full h-[60%] bg-gradient-to-t from-black to-transparent px-4 flex items-end pb-2">
                                <h3 class="text-white text-sm font-semibold mb-1 transition-opacity duration-300 group-hover:opacity-0">
                                    Project Web 1
                                </h3>
                            </div>

                            <!-- Deskripsi muncul saat hover -->
                            <div class="absolute inset-0 bg-black/30 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center p-4 text-center">
                                <p class="text-white text-sm">Ini adalah detail project website 1 yang dibuat menggunakan Tailwind & PHP.</p>
                            </div>
                        </div>



                        <!-- Card 2 -->
                        <div class="relative group flex-1 min-w-[120px] bg-white rounded-xl overflow-hidden shadow border border-gray-400 cursor-pointer transition-transform duration-300 hover:scale-[1.02]">
                            <!-- Gambar -->
                            <img src="../assets/img/website.jpg" alt="Web 1" class="w-full h-48 object-cover transition-all duration-300 group-hover:blur-sm group-hover:brightness-90" />

                            <!-- Overlay gelap bawah (bisa diatur tingginya) -->
                            <div class="absolute bottom-0 left-0 w-full h-[60%] bg-gradient-to-t from-black to-transparent px-4 flex items-end pb-2">
                                <h3 class="text-white text-sm font-semibold mb-1 transition-opacity duration-300 group-hover:opacity-0">
                                    Project Web 1
                                </h3>
                            </div>

                            <!-- Deskripsi muncul saat hover -->
                            <div class="absolute inset-0 bg-black/30 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center p-4 text-center">
                                <p class="text-white text-sm">Ini adalah detail project website 1 yang dibuat menggunakan Tailwind & PHP.</p>
                            </div>
                        </div>
                    </div>



                    <!-- Tombol View More -->
                    <div class="text-right font-bold">
                        <button class="w-full px-6 py-3 rounded-xl bg-zinc-100 text-zinc-800 shadow-md shadow-zinc-200 transition-all duration-300 hover:bg-zinc-200 hover:text-zinc-900 hover:shadow-zinc-400 hover:shadow-lg hover:scale-[1.03]">
                            Lihat Lebih
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
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-4 p-4 lg:pl-0">

                <!-- B1: Logo Instansi -->
                <div class="flex justify-center flex-col lg:col-span-1 space-y-4 p-4">

                    <!-- Judul -->
                    <h2 class=" lg:hidden text-3xl font-bold text-gray-800 tracking-wide pb-2">Pendidikan</h2>

                    <!-- Isi Logo -->
                    <div class="flex flex-row lg:flex-col justify-around gap-4">

                        <!-- Logo 1 -->
                        <div class="scale-110 aspect-square flex items-center justify-center transition-transform duration-300 hover:scale-115">
                            <img src="../assets/img/barkab.png"
                                alt="Logo Instansi 1"
                                class="w-[70%] h-[70%] object-contain drop-shadow-[0_6px_8px_rgba(0,0,0,0.25)] transition-all duration-300 hover:drop-shadow-[0_6px_20px_rgba(0,150,255,0.5)]" />
                        </div>

                        <!-- Logo 2 -->
                        <div class="aspect-square flex items-center justify-center transition-transform duration-300 hover:scale-105">
                            <img src="../assets/img/polinus.png"
                                alt="Logo Instansi 2"
                                class="w-[70%] h-[70%] object-contain drop-shadow-[0_6px_8px_rgba(0,0,0,0.25)] transition-all duration-300 hover:drop-shadow-[0_6px_20px_rgba(255,200,0,0.5)]" />
                        </div>


                    </div>
                </div>


                <!-- Pengalaman & Kegiatan -->
                <div class="lg:col-span-2 space-y-6 p-4  rounded-2xl">

                    <!-- Title (khusus mobile) -->
                    <h2 class=" lg:hidden text-2xl sm:text-3xl font-bold text-gray-800 tracking-tight">
                        Pengalaman & Kegiatan
                    </h2>

                    <!-- Daftar Pengalaman -->
                    <div class="space-y-4">

                        <!-- Item: Merdeka Siber -->
                        <div class="flex items-center gap-4 bg-white px-5 py-4 rounded-xl shadow-md shadow-red-100/50 hover:shadow-red-400/40 hover:shadow-lg transition duration-300">
                            <img src="../assets/img/icons/merdeka.png" alt="Merdeka Siber"
                                class="w-14 h-14 p-1 rounded-lg bg-white border border-red-200 shadow-sm" />
                            <div>
                                <h3 class="font-semibold text-gray-800 text-base">Merdeka Siber</h3>
                                <p class="text-sm text-gray-600">Mengikuti pelatihan Penetration Tester Bug Bounty Fun & Profit</p>
                            </div>
                        </div>

                        <!-- Item: Gamelab -->
                        <div class="flex items-center gap-4 bg-white px-5 py-4 rounded-xl shadow-md shadow-sky-100/50 hover:shadow-sky-400/40 hover:shadow-lg transition duration-300">
                            <img src="../assets/img/icons/gamelab.png" alt="Gamelab"
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

    <section class="py-16 px-4 bg-white">
        <div class="max-w-7xl mx-auto">
            <h2 class="text-2xl font-bold mb-8 text-center">Sertifikat Pencapaian</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">

                <!-- Sertifikat 1 -->
                <div class="bg-white border rounded-xl shadow p-4 flex flex-col">
                    <img src="../assets/img/sertifikat1.jpg" alt="Sertifikat 1" class="w-full h-48 object-cover rounded mb-4">
                    <h3 class="font-semibold text-lg">PHP Mastery</h3>
                    <p class="text-sm text-gray-600">Diselenggarakan oleh Dicoding, 2024</p>
                </div>

                <!-- Sertifikat 2 -->
                <div class="bg-white border rounded-xl shadow p-4 flex flex-col">
                    <img src="../assets/img/sertifikat2.jpg" alt="Sertifikat 2" class="w-full h-48 object-cover rounded mb-4">
                    <h3 class="font-semibold text-lg">Linux Fundamental</h3>
                    <p class="text-sm text-gray-600">FreeCodeCamp, 2023</p>
                </div>

                <!-- Sertifikat 3 -->
                <div class="bg-white border rounded-xl shadow p-4 flex flex-col">
                    <img src="../assets/img/sertifikat3.jpg" alt="Sertifikat 3" class="w-full h-48 object-cover rounded mb-4">
                    <h3 class="font-semibold text-lg">Network Engineer</h3>
                    <p class="text-sm text-gray-600">Cisco Academy, 2024</p>
                </div>

            </div>
        </div>
    </section>

    <section class="py-16 px-4 bg-gray-50">
        <div class="max-w-5xl mx-auto">
            <h2 class="text-3xl font-bold mb-8 text-center">Hubungi Saya</h2>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">

                <!-- Kontak Langsung -->
                <div class="space-y-4">
                    <p class="text-gray-700">Saya selalu terbuka untuk proyek baru, kolaborasi, atau hanya sekedar ngobrol santai 😄</p>
                    <div>
                        <p class="font-semibold">📧 Email:</p>
                        <p class="text-gray-600">kakak@example.com</p>
                    </div>
                    <div>
                        <p class="font-semibold">💬 WhatsApp:</p>
                        <p class="text-gray-600">+62 812-3456-7890</p>
                    </div>
                    <div>
                        <p class="font-semibold">🌐 GitHub:</p>
                        <a href="https://github.com/kakak" target="_blank" class="text-blue-500 hover:underline">github.com/kakak</a>
                    </div>
                </div>

                <!-- Form Kontak -->
                <form action="#" method="POST" class="space-y-4 bg-white p-6 rounded-xl shadow border border-gray-200">
                    <div>
                        <label class="block font-semibold mb-1" for="name">Nama</label>
                        <input type="text" id="name" name="name" class="w-full p-2 border rounded" required>
                    </div>
                    <div>
                        <label class="block font-semibold mb-1" for="email">Email</label>
                        <input type="email" id="email" name="email" class="w-full p-2 border rounded" required>
                    </div>
                    <div>
                        <label class="block font-semibold mb-1" for="message">Pesan</label>
                        <textarea id="message" name="message" rows="4" class="w-full p-2 border rounded" required></textarea>
                    </div>
                    <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Kirim Pesan</button>
                </form>

            </div>
        </div>
    </section>

    <?php include '../components/footer.php'; ?>

</body>

</html>
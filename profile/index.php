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
            <div class="grid grid-cols-1 lg:grid-cols-[2fr_1fr] gap-4 border-2 border-red-500 p-4">

                <!-- A1: Web List -->
                <div class="flex flex-col justify-start space-y-4 border-2 border-blue-500 p-4">
                    <!-- Title -->
                    <h2 class="text-2xl font-bold border border-cyan-500">Web List</h2>

                    <!-- 2 Card mendatar (pakai image, ukuran fleksibel) -->
                    <div class="flex flex-wrap gap-4 border border-green-500">
                        <div class="flex-1 min-w-[100px] bg-white rounded overflow-hidden shadow border border-gray-400">
                            <img src="../assets/img/web1.png" alt="Web 1" class="w-full h-48 object-cover">
                        </div>
                        <div class="flex-1 min-w-[100px] bg-white rounded overflow-hidden shadow border border-gray-400">
                            <img src="../assets/img/web2.png" alt="Web 2" class="w-full h-48 object-cover">
                        </div>
                    </div>


                    <!-- Tombol View More -->
                    <div class="text-right border border-yellow-500">
                        <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">View More</button>
                    </div>
                </div>

                <!-- A2: Web List -->
                <div class="flex flex-col justify-start space-y-4 border-2 border-purple-500 p-4">

                    <!-- Title -->
                    <h2 class="text-2xl font-bold border border-pink-400">Skills</h2>

                    <!-- List button-like -->
                    <div class="space-y-2 border border-indigo-400">
                        <button class="w-full bg-gray-100 p-2 rounded hover:bg-gray-200">Skill 1</button>
                        <button class="w-full bg-gray-100 p-2 rounded hover:bg-gray-200">Skill 2</button>
                        <button class="w-full bg-gray-100 p-2 rounded hover:bg-gray-200">Skill 3</button>
                        <button class="w-full bg-gray-100 p-2 rounded hover:bg-gray-200">Skill 4</button>
                        <button class="w-full bg-gray-100 p-2 rounded hover:bg-gray-200">Skill 5</button>
                    </div>

                </div>


            </div>

            <!-- B (Kanan) -->
            <div class="grid grid-cols-1 lg:grid-cols-[1fr_2fr] gap-4 border-2 border-pink-500 p-4">

                <!-- B1: 2 gambar ukuran 1x1 -->
                <div class="flex flex-row lg:flex-col justify-around border-2 border-amber-500 gap-4 p-2">
                    <div class="w-1/2 md:w-full aspect-square bg-gray-200 border border-gray-500">[ Gambar 1 ]</div>
                    <div class="w-1/2 md:w-full aspect-square bg-gray-200 border border-gray-500">[ Gambar 2 ]</div>
                </div>



                <!-- B2: 3 List dengan icon dan teks -->
                <div class="space-y-3 border-2 border-lime-500 p-4">
                    <!-- List 1 -->
                    <div class="flex items-start space-x-3 border border-gray-300 p-2 rounded">
                        <div class="w-12 h-12 bg-gray-300 flex-shrink-0">🖥️</div>
                        <div>
                            <p class="font-semibold">Judul 1</p>
                            <p class="text-sm text-gray-600">Deskripsi singkat 1</p>
                        </div>
                    </div>

                    <!-- List 2 -->
                    <div class="flex items-start space-x-3 border border-gray-300 p-2 rounded">
                        <div class="w-12 h-12 bg-gray-300 flex-shrink-0">🖥️</div>
                        <div>
                            <p class="font-semibold">Judul 2</p>
                            <p class="text-sm text-gray-600">Deskripsi singkat 2</p>
                        </div>
                    </div>

                    <!-- List 3 -->
                    <div class="flex items-start space-x-3 border border-gray-300 p-2 rounded">
                        <div class="w-12 h-12 bg-gray-300 flex-shrink-0">🖥️</div>
                        <div>
                            <p class="font-semibold">Judul 3</p>
                            <p class="text-sm text-gray-600">Deskripsi singkat 3</p>
                        </div>
                    </div>

                    <!-- List 4 -->
                    <div class="flex items-start space-x-3 border border-gray-300 p-2 rounded">
                        <div class="w-12 h-12 bg-gray-300 flex-shrink-0">🖥️</div>
                        <div>
                            <p class="font-semibold">Judul 4</p>
                            <p class="text-sm text-gray-600">Deskripsi singkat 4</p>
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
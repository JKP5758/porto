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
    <header class="bg-white shadow">
        <div class="max-w-7xl mx-auto px-4 py-4 flex items-center justify-between">
            <h1 class="text-xl font-bold text-gray-800">MyWebsite</h1>
            <nav class="space-x-4">
                <a href="#" class="text-gray-600 hover:text-blue-500">Home</a>
                <a href="#" class="text-gray-600 hover:text-blue-500">About</a>
                <a href="#" class="text-gray-600 hover:text-blue-500">Contact</a>
            </nav>
            <a href="#" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Login</a>
        </div>
    </header>

    <!-- Section -->
    <section class="py-16 border border-pink-500 px-4">
        <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-[auto_1fr_auto] items-center gap-4">

            <!-- Tombol kiri -->
            <button class="hidden md:block bg-white rounded-full p-2 shadow hover:bg-gray-100">
                ◀
            </button>

            <!-- Hero content -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 border border-black bg-cover bg-center rounded-2xl overflow-hidden px-6 py-8" style="background-image: url('../assets/img/bg.png');">

                <!-- Bagian A -->
                <div class="flex flex-col justify-center space-y-6 border-2 border-red-500 p-4 h-full ">

                    <!-- A1: Judul Besar -->
                    <div class="border border-blue-500">
                        <h1 class="text-4xl font-bold text-gray-800">Judul Besar di Sini</h1>
                    </div>

                    <!-- A2: Deskripsi Singkat -->
                    <div class="border border-green-500">
                        <p class="text-gray-600">Ini adalah deskripsi singkat yang menjelaskan isi dari hero section secara padat dan jelas.</p>
                    </div>

                    <!-- A3: Tombol Read More (rata kanan) -->
                    <div class="border border-yellow-500 text-right">
                        <a href="#" class="inline-block bg-blue-500 text-white px-5 py-2 rounded hover:bg-blue-600">Read more</a>
                    </div>
                </div>

                <!-- Bagian B: Ilustrasi -->
                <div class="border-2 border-purple-500 p-4 flex items-center justify-center">
                    <!-- Placeholder ilustrasi -->
                    <div class="w-full h-64 bg-gray-100 border-4 border-dashed border-gray-400 flex items-center justify-center">
                        <span class="text-gray-500">[Ilustrasi di sini]</span>
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
                <div class="flex flex-col justify-between space-y-4 border-2 border-blue-500 p-4">
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

                <!-- A2: List Web (5 list button-like) -->
                <div class="space-y-2 border-2 border-purple-500 p-4">
                    <button class="w-full bg-gray-100 p-2 rounded hover:bg-gray-200">Website 1</button>
                    <button class="w-full bg-gray-100 p-2 rounded hover:bg-gray-200">Website 2</button>
                    <button class="w-full bg-gray-100 p-2 rounded hover:bg-gray-200">Website 3</button>
                    <button class="w-full bg-gray-100 p-2 rounded hover:bg-gray-200">Website 4</button>
                    <button class="w-full bg-gray-100 p-2 rounded hover:bg-gray-200">Website 5</button>
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



</body>

</html>
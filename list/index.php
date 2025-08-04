<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Daftar Project</title>
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

<body class="bg-gray-100 text-gray-900">

    <!-- Header -->
    <?php include '../components/header.php'; ?>

    <div class="py-6 text-center">
        <h1 class="text-2xl sm:text-3xl font-bold text-gray-800 flex items-center justify-center gap-2">
            <span class="text-green-500 text-xl">🧪</span> Daftar Project-ku
        </h1>
        <p class="text-sm text-gray-500 mt-1">Beberapa hasil karyaku yang bisa kamu lihat~</p>
    </div>

    <!-- Grid Container -->
    <main class="px-4 sm:px-6 lg:px-8 max-w-6xl mx-auto pb-10 ">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-x-6 gap-y-6 ">

            <!-- Card Project (Contoh) -->
            <div
                class="bg-white rounded-2xl shadow hover:shadow-lg transition duration-300 overflow-hidden max-w-sm w-full mx-auto">
                <img src="../assets/img/project01.webp" alt="Thumbnail Project" class="w-full h-48 object-cover" />
            
                <div class="p-4 flex flex-col h-full">
                    <h2 class="text-lg font-semibold mb-1 text-gray-800">Judul Project</h2>
                    <p class="text-sm text-gray-500">
                        Ini deskripsi singkat tentang project kamu. Cukup 2-3 baris biar ringkas dan menarik.
                    </p>
            
                    <a href="#"
                        class="mt-4 inline-block bg-blue-500 hover:bg-blue-600 text-white text-sm font-semibold px-4 py-2 rounded-md transition duration-300 shadow-sm">
                        🔗 Lihat Selengkapnya
                    </a>

                </div>
            </div>

            <div
                class="bg-white rounded-2xl shadow hover:shadow-lg transition duration-300 overflow-hidden max-w-sm w-full mx-auto">
                <img src="../assets/img/project01.webp" alt="Thumbnail Project" class="w-full h-48 object-cover" />
                <div class="p-4 flex flex-col h-full">
                    <h2 class="text-lg font-semibold mb-1">Nama Project Kedua</h2>
                    <p class="text-sm text-gray-600">Project ini dibuat menggunakan React dan Tailwind. Tampilan kece
                        dan responsif.</p>
                    <a href="#"
                        class="mt-4 inline-block bg-blue-500 hover:bg-blue-600 text-white text-sm font-semibold px-4 py-2 rounded-md transition duration-300 shadow-sm">
                        🔗 Lihat Selengkapnya
                    </a>
                </div>
            </div>

            <div
                class="bg-white rounded-2xl shadow hover:shadow-lg transition duration-300 overflow-hidden max-w-sm w-full mx-auto">
                <img src="../assets/img/project01.webp" alt="Thumbnail Project" class="w-full h-48 object-cover" />
                <div class="p-4 flex flex-col h-full">
                    <h2 class="text-lg font-semibold mb-1">Nama Project Kedua</h2>
                    <p class="text-sm text-gray-600">Project ini dibuat menggunakan React dan Tailwind. Tampilan kece
                        dan responsif.</p>
                    <a href="#"
                        class="mt-4 inline-block bg-blue-500 hover:bg-blue-600 text-white text-sm font-semibold px-4 py-2 rounded-md transition duration-300 shadow-sm">
                        🔗 Lihat Selengkapnya
                    </a>
                </div>
            </div>

            <div
                class="bg-white rounded-2xl shadow hover:shadow-lg transition duration-300 overflow-hidden max-w-sm w-full mx-auto">
                <img src="../assets/img/project01.webp" alt="Thumbnail Project" class="w-full h-48 object-cover" />
                <div class="p-4 flex flex-col h-full">
                    <h2 class="text-lg font-semibold mb-1">Nama Project Kedua</h2>
                    <p class="text-sm text-gray-600">Project ini dibuat menggunakan React dan Tailwind. Tampilan kece
                        dan responsif.</p>
                    <a href="#"
                        class="mt-4 inline-block bg-blue-500 hover:bg-blue-600 text-white text-sm font-semibold px-4 py-2 rounded-md transition duration-300 shadow-sm">
                        🔗 Lihat Selengkapnya
                    </a>
                </div>
            </div>

            <div
                class="bg-white rounded-2xl shadow hover:shadow-lg transition duration-300 overflow-hidden max-w-sm w-full mx-auto">
                <img src="../assets/img/project01.webp" alt="Thumbnail Project" class="w-full h-48 object-cover" />
                <div class="p-4 flex flex-col h-full">
                    <h2 class="text-lg font-semibold mb-1">Nama Project Kedua</h2>
                    <p class="text-sm text-gray-600">Project ini dibuat menggunakan React dan Tailwind. Tampilan kece
                        dan responsif.</p>
                    <a href="#"
                        class="mt-4 inline-block bg-blue-500 hover:bg-blue-600 text-white text-sm font-semibold px-4 py-2 rounded-md transition duration-300 shadow-sm">
                        🔗 Lihat Selengkapnya
                    </a>
                </div>
            </div>

        </div>
    </main>

    <!-- Footer -->
    <?php include '../components/footer.php'; ?>

</body>

</html>
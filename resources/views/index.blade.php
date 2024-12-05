<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perkenalan Diri</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="font-sans text-gray-800 bg-gray-100 m-0 p-0">
    <header class="bg-green-500 text-white p-5 text-center">
        <h1 class="text-3xl font-bold m-0">Selamat Datang!</h1>
        <p class="mt-2">Perkenalan Diri - Aldinand Santoso</p>
    </header>

    <main class="container mx-auto px-4 py-8">
        <section id="about" class="bg-white rounded-lg shadow-md p-5 mb-6">
            <h2 class="text-2xl font-semibold text-green-500 mb-3">Tentang Saya</h2>
            <p>Halo, nama saya Aldinand Santoso. Saya seorang pelajar SMK Telkom Purwokerto.</p>

            <a href="{{ route('about') }}">About Me</a>
            <a href="{{ route('login') }}">Login</a>

        </section>

        <section id="skills" class="bg-white rounded-lg shadow-md p-5 mb-6">
            <h2 class="text-2xl font-semibold text-green-500 mb-3">Keterampilan</h2>
            <ul class="list-none p-0">
                <li class="py-1">Design Grafis</li>
                <li class="py-1">Fotografi</li>
                <li class="py-1">Coding</li>
            </ul>
        </section>

        <section id="contact" class="bg-white rounded-lg shadow-md p-5 mb-6">
            <h2 class="text-2xl font-semibold text-green-500 mb-3">Kontak</h2>
            <p class="mb-2">Anda bisa menghubungi saya melalui:</p>
            <ul class="list-none p-0">
                <li class="py-1">Email: <a href="mailto:aldinandsantoso@gmail.com" class="text-blue-500 hover:underline">aldinandsantoso@gmail.com</a></li>
                <li class="py-1">Telepon: <a href="tel:081226110079" class="text-blue-500 hover:underline">081226110079</a></li>
            </ul>
        </section>
    </main>

    <footer class="bg-green-500 text-white text-center p-3 fixed bottom-0 w-full">
        <p>&copy; 2024 Aldinand. Semua hak cipta dilindungi.</p>
    </footer>
</body>
</html>
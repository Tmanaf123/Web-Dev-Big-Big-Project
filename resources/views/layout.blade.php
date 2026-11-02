<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CurtainStudios - Premium Custom Curtains</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])


</head>
<body class="bg-stone-50 text-stone-800 font-sans flex flex-col min-h-screen">

    <nav class="bg-white shadow-sm sticky top-0 z-50 border-b border-stone-100">
        <div class="max-w-6xl mx-auto px-4 py-4 flex justify-between items-center">
            <span class="text-xl font-bold text-amber-800 tracking-wider">CurtainStudios</span>
            <div class="space-x-6 text-sm font-medium">
                <a href="{{ url('/') }}" class="hover:text-amber-700 transition">Profil Kami</a>
                <a href="{{ url('/katalog-produk') }}" class="hover:text-amber-700 transition">Katalog Kain</a>
                <a href="{{ url('/galeri-pemasangan') }}" class="hover:text-amber-700 transition">Hasil Rumah Kustomer</a>
                <a href="https://wa.me" target="_blank" class="bg-amber-800 text-white px-4 py-2 rounded hover:bg-amber-900 transition shadow-sm">Hubungi WA</a>
            </div>
        </div>
    </nav>

    <main class="flex-grow">
        @yield('content')
    </main>

    <footer class="bg-stone-900 text-stone-400 py-12 text-center text-sm">
        <p class="font-semibold text-white mb-2">&copy; 2026 CurtainStudios. All Rights Reserved.</p>
        <p class="text-stone-500 max-w-sm mx-auto text-xs">Jl. Interior Indah No. 46, Kompleks Desain, Surabaya, Indonesia</p>
    </footer>

</body>
</html>

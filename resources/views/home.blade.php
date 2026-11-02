@extends('layout')

@section('content')
    <header class="bg-gradient-to-r from-amber-900 to-amber-950 text-white py-24 text-center">
        <div class="max-w-4xl mx-auto px-4">
            <h1 class="text-4xl md:text-5xl font-extrabold mb-4 tracking-tight">Premium Window Styling & Custom Fabric Curtains</h1>
            <p class="text-amber-200/80 text-lg max-w-xl mx-auto">Sempurnakan keindahan ruangan Anda dengan sentuhan tirai eksklusif yang dirancang secara kustom.</p>
        </div>
    </header>

    <section class="py-20 max-w-5xl mx-auto px-4">
        <div class="grid md:grid-cols-2 gap-12 items-center">
            <div>
                <span class="text-amber-800 text-sm font-bold uppercase tracking-wider">Tentang CurtainStudios</span>
                <h2 class="text-3xl font-bold text-stone-900 mt-2 mb-6">Penyedia Tirai & Gorden Custom Premium Terpercaya</h2>
                <p class="text-stone-600 leading-relaxed mb-4 text-base">
                    CurtainStudios hadir sejak tahun 2018 untuk melayani kebutuhan interior jendela Anda. Kami percaya bahwa gorden bukan sekadar penutup jendela, melainkan elemen penting yang menentukan kemewahan, kenyamanan, dan privasi sebuah hunian.
                </p>
                <p class="text-stone-600 leading-relaxed text-base">
                    Kami menyediakan layanan survei lokasi gratis, pengukuran presisi, hingga instalasi akhir yang rapi di tempat Anda. Didukung oleh penjahit profesional berpengalaman standar perhotelan.
                </p>
            </div>
            <div class="grid grid-cols-2 gap-4">
                <img src="{{ asset('mikel1/yes.jpg') }}" class="rounded-lg shadow-md w-full h-48 object-cover" alt="Workshop">
                <img src="{{ asset('mikel1/wuran.jpg') }}" class="rounded-lg shadow-md w-full h-48 object-cover mt-6" alt="Kain">
            </div>
        </div>
    </section>
@endsection

@extends('layout')

@section('content')
    <section class="py-20 max-w-6xl mx-auto px-4">
        <h2 class="text-3xl font-bold text-stone-900 text-center mb-2">Hasil Nyata Pemasangan Klien</h2>
        <p class="text-center text-stone-500 mb-12 text-sm">Dokumentasi asli portofolio pengerjaan kustom tirai di berbagai lokasi hunian.</p>
        
        <!-- Loop Menampilkan Galeri Hasil Pemasangan Rumah Kustomer -->
        <div class="grid sm:grid-cols-2 md:grid-cols-3 gap-6">
            @foreach($projects as $project)
            <div class="bg-stone-200 rounded-xl overflow-hidden relative group h-64 flex items-end p-6 bg-cover bg-center shadow-md hover:scale-[1.01] transition" style="background-image: url('{{ $project->image_url }}')">
                <div class="absolute inset-0 bg-gradient-to-t from-stone-950/90 via-stone-900/30 to-transparent"></div>
                <div class="relative z-10 text-white">
                    <p class="text-xs uppercase text-amber-400 font-bold mb-1 tracking-wider">{{ $project->curtain_type_used }}</p>
                    <h4 class="text-base font-semibold text-stone-100">{{ $project->client_name }}</h4>
                </div>
            </div>
            @endforeach
        </div>
    </section>
@endsection

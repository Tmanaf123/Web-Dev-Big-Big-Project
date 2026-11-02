@extends('layout')

@section('content')
    <section class="py-20 max-w-6xl mx-auto px-4">
        <h2 class="text-3xl font-bold text-stone-900 text-center mb-2">Pilihan Bahan & Kategori Gorden</h2>
        <p class="text-center text-stone-500 mb-12 text-sm">Grup kategori tirai besar dan contoh item produk kustom bermutu tinggi.</p>
        
        <div class="mb-12 flex flex-wrap justify-center gap-3">
            @foreach($categories as $category)
            <div class="bg-stone-100 text-stone-700 px-4 py-2 rounded-lg border border-stone-200 text-xs font-semibold uppercase tracking-wider shadow-sm">
                {{ $category->name }}
            </div>
            @endforeach
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($products as $product)
            <div class="border border-stone-200 rounded-xl overflow-hidden bg-white shadow-sm flex flex-col justify-between hover:shadow-md transition">
                <img src="{{ $product->image_url }}" class="w-full h-48 object-cover" alt="{{ $product->product_name }}">
                <div class="p-6 flex-grow">
                    <h3 class="text-lg font-bold text-amber-900 mb-1">{{ $product->product_name }}</h3>
                    <p class="text-[10px] font-bold text-stone-400 uppercase tracking-widest mb-3">Material: {{ $product->material }}</p>
                    <p class="text-stone-600 text-sm mb-4 leading-relaxed">{{ $product->description }}</p>
                </div>
                <div class="px-6 pb-6">
                    <span class="inline-block bg-amber-50 text-amber-800 text-xs px-3 py-1 rounded-full font-medium border border-amber-200/60 shadow-sm">{{ $product->variations }}</span>
                </div>
            </div>
            @endforeach
        </div>
    </section>
@endsection

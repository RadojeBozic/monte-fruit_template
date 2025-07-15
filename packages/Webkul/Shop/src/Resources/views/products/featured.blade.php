@extends('shop::layouts.master')

@section('page_title')
    Istaknuti proizvodi
@endsection

@section('content-wrapper')
    <div class="container py-10">
        <h2 class="text-2xl font-bold mb-6">Istaknuti proizvodi</h2>

        <div class="grid grid-cols-4 gap-6 max-lg:grid-cols-3 max-sm:grid-cols-2">
            @foreach($products as $product)
                <div class="product-card border rounded-lg p-4 shadow">
                    <a href="{{ route('shop.productOrCategory.index', $product->url_key) }}">
                        <img src="{{ $product->base_image_url }}" alt="{{ $product->name }}" class="rounded-md">
                    </a>
                    <h3 class="text-lg font-semibold mt-2">
                        <a href="{{ route('shop.productOrCategory.index', $product->url_key) }}">
                            {{ $product->name }}
                        </a>
                    </h3>
                    <p class="text-green-600 font-bold">{{ $product->price }} RSD</p>

                    <button class="secondary-button w-full mt-3">
                        Dodaj u korpu
                    </button>
                </div>
            @endforeach
        </div>
    </div>
@endsection

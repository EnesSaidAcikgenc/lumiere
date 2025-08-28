@extends('homepage.menu')
@section('header')
    <h2 style="font-weight: bold">Menüler</h2>
@endsection
@section('content')

        @foreach($category->products as $product)
            <div class="bg-gray-800 rounded-xl overflow-hidden shadow hover:scale-105 transition">
                <img src="{{ asset('images/' . $product->image) }}" class="w-full h-32 object-cover">
                <div class="p-3">
                    <h2 class="text-center font-semibold">{{$product->product_name}}</h2>
                    <p style="text-align: center; font-size: smaller">{{$product->explanation}}</p>
                    <p style="text-align: center; font-size: medium">{{$product->price}} TL</p>
                </div>
            </div>
        @endforeach


@endsection

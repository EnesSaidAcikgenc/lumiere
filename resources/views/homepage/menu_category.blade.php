@extends('homepage.menu')
@section('header')

    <h2 style="font-weight: bold">Kategoriler</h2>

    @if( \Illuminate\Support\Facades\Auth::user() && Auth::user()->is_admin == 1)
    <span>
        <a href="{{route('admin')}}" class="btn btn-primary">Admin Panele git</a>
    </span>
    @endif

@endsection
@section('content')
    @foreach($categories as $categorie)
        <a href="{{route('menu', $categorie->id)}}">
        <div class="bg-gray-800 rounded-xl overflow-hidden shadow hover:scale-105 transition">
            <img src="{{ asset('images/' . $categorie->image) }}" class="w-full h-32 object-cover">
            <div class="p-3">
                <h3 class="text-center font-semibold">{{$categorie->category_name}}</h3>
            </div>
        </div>
        </a>
    @endforeach
@endsection

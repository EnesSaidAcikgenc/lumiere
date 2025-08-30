@extends('homepage.menu')
@section('header')

    <h2 style="font-weight: bold">Kategoriler</h2>

    @if( \Illuminate\Support\Facades\Auth::user() && Auth::user()->is_admin == 1)
    <span>
        <a href="{{route('admin')}}" class="btn btn-primary">Admin Panele git</a>
    </span>
    @endif
    <div class="flex justify-between items-center mb-4">
        <input type="text" id="search" placeholder="Ara..." class="px-3 py-1 rounded-lg bg-gray-800 border border-gray-700 text-sm focus:outline-none">
    </div>
@endsection
@section('content')
    @foreach($categories as $categorie)
        <a href="{{route('menu', $categorie->id)}}">
        <div class="bg-gray-800 rounded-xl overflow-hidden shadow hover:scale-105 transition" id="categoryDiv">
            <img src="{{ asset('images/' . $categorie->image) }}" class="w-full h-32 object-cover">
            <div class="p-3">
                <h3 class="text-center font-semibold">{{$categorie->category_name}}</h3>
            </div>
        </div>
        </a>
    @endforeach

    <script>
        document.getElementById("search").addEventListener("keyup", function () {
            let filter = this.value.toLowerCase();
            let rows = document.querySelectorAll("#categoryDiv");

            rows.forEach(row => {
                let categoryName = row.querySelector("h3").textContent.toLowerCase();
                if (categoryName.includes(filter)) {
                    row.style.display = "";
                } else {
                    row.style.display = "none";
                }
            });
        });
    </script>
@endsection

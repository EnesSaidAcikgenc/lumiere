@extends('adminpage.layout')

@section('content')
    <div class="container">
        <a href="{{route('add_categories')}}" class="btn btn-success">Kategori Ekle</a>
    </div><br>

    <div class="container">
        <h2 class="mb-4" style="text-align: center">Kategori Listesi</h2>

        <table class="table table-hover table-bordered shadow-sm rounded">
            <thead class="table-dark">
            <tr>
                <th>#</th>
                <th>Kategori Adı</th>
                <th>Resimler</th>
                <th>İşlemler</th>
            </tr>
            </thead>
            <tbody>
            @foreach($categories as $category)
                <tr>
                    <td>{{$category->id}}</td>
                    <td>{{$category->category_name}}</td>
                    <td> <img src="{{ asset('images/' . $category->image) }}"
                              alt="{{ $category->name }}"
                              width="80"
                              height="80"
                              class="rounded"></td>
                    <td>
                        <a href="{{route('edit_categories', $category->id)}}" class="btn btn-sm btn-warning">
                            Düzenle
                        </a>
                        <a href="{{route('delete_categories', $category->id)}}" class="btn btn-sm btn-danger">
                            Sil
                        </a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>


    </div>
@endsection

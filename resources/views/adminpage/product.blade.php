@extends('adminpage.layout')

@section('content')

        <div class="container">
            <a href="{{route('add_product')}}" class="btn btn-success">Ürün Ekle</a>
        </div><br>
        <div class="container">
            <h2 class="mb-4" style="text-align: center">Ürün Listesi</h2>
            <div class="container">
                @if(session('success'))
                    <div class="alert alert-success alert-dismissible" role="alert">
                        {{session('success')}}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
            </div>
            <table class="table table-hover table-bordered shadow-sm rounded">
                <thead class="table-dark">
                <tr>
                    <th>#</th>
                    <th>Ait Olduğu Kategori</th>
                    <th>Ürün Adı</th>
                    <th>Resimler</th>
                    <th>İşlemler</th>
                </tr>
                </thead>
                <tbody>
                @foreach($products as $product)
                    <tr>
                        <td>{{$product->id}}</td>
                        <td>{{$product -> category_id  }}</td>
                        <td>{{$product->product_name}}</td>
                        <td> <img src="{{ asset('images/' . $product->image) }}"
                                  alt="{{ $product->name }}"
                                  width="80"
                                  height="80"
                                  class="rounded"></td>
                        <td>
                            <a href="{{route('edit_product', $product->id)}}" class="btn btn-sm btn-warning">
                                Düzenle
                            </a>
                            <a href="{{route('delete_product', $product->id)}}" class="btn btn-sm btn-danger">
                                Sil
                            </a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>


        </div>
@endsection

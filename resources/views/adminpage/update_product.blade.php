@extends('adminpage.layout')

@section('content')
    <div class="container">
        <form action="{{route('products_update')}}" method="post" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="id" value="{{ $uproducts->id }}">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Ürün Adını Giriniz</label>
                <input type="text" class="form-control" id="product_name" name="product_name" value="{{$uproducts->product_name}}">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Fiyatını Giriniz</label>
                <input type="number" class="form-control" id="price" name="price" value="{{$uproducts->price}}">
            </div>
            <div>
            <img src="{{ asset('images/' . $uproducts->image) }}"
                 alt="{{ $uproducts->name }}"
                 width="150"
                 height="auto"
                 class="rounded"></td>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Resmini Yükleyin</label>
                <input type="file" class="form-control" id="image" name="image">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Ürün Kategorisini Seçiniz</label>
                <select class="form-select" aria-label="Default select example" id="category_id" name="category_id" >
                    <option disabled selected>Bir Kategori Seçin</option>
                    @foreach($categories as $categorie)
                        <option value="{{ $categorie->id }}"
                            {{ $uproducts->category_id == $categorie->id ? 'selected' : '' }}>
                            {{ $categorie->category_name }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Ürün Açıklamasını Giriniz</label>
                <textarea class="form-control" id="explanation" name="explanation" rows="3" >{{$uproducts->explanation}}</textarea>
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-success">Gönder</button>
            </div>
        </form>
    </div>
@endsection

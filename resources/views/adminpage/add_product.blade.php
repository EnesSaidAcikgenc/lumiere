@extends('adminpage.layout')

@section('content')

    <div class="container">
        <form action="{{route('product_add')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Ürün Adını Giriniz</label>
                <input type="text" class="form-control" id="product_name" name="product_name">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Fiyatını Giriniz</label>
                <input type="number" class="form-control" id="price" name="price">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Resmini Yükleyin</label>
                <input type="file" class="form-control" id="image" name="image">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Ürün Kategorisini Seçiniz</label>
                <select class="form-select" aria-label="Default select example" id="category_id" name="category_id">
                    <option disabled selected>Bir Kategori Seçin</option>
                    @foreach($categories as $c)
                    <option value="{{$c->id}}">{{$c->category_name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Ürün Açıklamasını Giriniz</label>
                <textarea class="form-control" id="explanation" name="explanation" rows="3"></textarea>
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-success">Gönder</button>
            </div>
        </form>
    </div>

@endsection

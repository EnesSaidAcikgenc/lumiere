@extends('adminpage.layout')

@section('content')
    <h3>Kategori Güncelleme</h3>
    @if(isset($ucategory))
    <form action="{{route('category_update')}}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="id" value="{{ $ucategory->id }}">

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Kategori Adını Giriniz</label>
            <input type="text" class="form-control" id="category_name" name="category_name" value="{{$ucategory->category_name}}">
        </div>
        <div>
            <img src="{{ asset('images/' . $ucategory->image) }}"
                 alt="{{ $ucategory->name }}"
                 width="150"
                 height="auto"
                 class="rounded"></td>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Resim Yükleyiniz</label>
            <input type="file" class="form-control" id="image" name="image">
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-success">Gönder</button>
        </div>
    </form>
    @endif
@endsection

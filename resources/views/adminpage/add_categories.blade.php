@extends('adminpage.layout')

@section('content')
    <div class="container">
        @if($errors->any())
            <div class="alert alert-danger alert-dismissible" role="alert">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </ul>
            </div>
        @endif
    </div>
    <div class="container">
<form action="{{route('category_add')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Kategori Adını Giriniz</label>
        <input type="text" class="form-control" id="category_name" name="category_name">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Resim Yükleyiniz</label>
        <input type="file" class="form-control" id="image" name="image">
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-success">Gönder</button>
    </div>
</form>
    </div>
@endsection

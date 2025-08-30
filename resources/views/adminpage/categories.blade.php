@extends('adminpage.layout')

@section('content')
    <div class="container">
        <a href="{{route('add_categories')}}" class="btn btn-success">Kategori Ekle</a>
    </div><br>

    <div class="container">
        <h2 class="mb-4 text-center">Kategori Listesi</h2>

        <div class="container">
            @if(session('success'))
                <div class="alert alert-success alert-dismissible" role="alert">
                    {{session('success')}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
        </div>

        <!-- 🔎 Arama Çubuğu -->
        <div class="mb-3">
            <input type="text" id="searchInput" class="form-control" placeholder="Kategori ara...">
        </div>

        <table class="table table-hover table-bordered shadow-sm rounded">
            <thead class="table-dark">
            <tr>
                <th>#</th>
                <th>Kategori Adı</th>
                <th>Resimler</th>
                <th>İşlemler</th>
            </tr>
            </thead>
            <tbody id="categoryTable">
            @foreach($categories as $category)
                <tr>
                    <td>{{$category->id}}</td>
                    <td>{{$category->category_name}}</td>
                    <td>
                        <img src="{{ asset('images/' . $category->image) }}"
                             alt="{{ $category->category_name }}"
                             width="80"
                             height="80"
                             class="rounded">
                    </td>
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

    <!-- 🔥 JavaScript Arama Kodu -->
    <script>
        document.getElementById("searchInput").addEventListener("keyup", function () {
            let filter = this.value.toLowerCase();
            let rows = document.querySelectorAll("#categoryTable tr");

            rows.forEach(row => {
                let categoryName = row.cells[1].textContent.toLowerCase();
                if (categoryName.includes(filter)) {
                    row.style.display = "";
                } else {
                    row.style.display = "none";
                }
            });
        });
    </script>
@endsection

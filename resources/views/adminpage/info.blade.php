@extends('adminpage.layout')

@section('content')
    <div class="container">
        <p>Burası <b>admin panel</b> sayfasıdır, bu panelde sadece adminler kategori oluşturabilir ve oluşturduğu kategoriye
            <br>
        bağlı olarak ürün oluşturarak <b>menülerini</b> oluşturabilirler. <br><br>
            <u><b>Adminin Bazı Yetkileri</b></u>
        </p>
        <ul>
            <li>Admin kategori oluşturup oluşturduğu kategoriyi güncelleyebilir veya isterse silebilir.</li>
            <li>Admin ürün oluşturup, oluşturduğu ürünü daha önceden yaptığı kategorinin içine oluşturabilir ve
                isterse ürünü güncelleyebilir veya silebilir.</li>
        </ul>
        <br><br><br>
        <ul>
            <li><b style="color: red">NOT:</b> Eğer admin kategoriyi silerse kategoriye bağlı olan ürünlerde silinir.</li>
            <li><b style="color: red">NOT:</b> Admin hem menü sayfasını görebilir hemde admin panel sayfasınıda görebilir ama
                diyer kullanıcılar sadece menü sayfasını görebilir.</li>
        </ul>

    </div>
@endsection

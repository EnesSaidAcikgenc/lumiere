<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>Lumiere</title>
</head>
<body>
<h1 style="text-align: center">Giriş Yapınız</h1>

<form action="{{route('loginp')}}" method="post">
    @csrf
<div class="container mt-5" style="

    display: flex;
    justify-content: space-around;
    flex-wrap: wrap;
    text-align: center;
    flex-direction: column;
    align-content: space-around;

    ">
        <div class="mb-2 col-4">
            <label for="exampleFormControlInput1" class="form-label">Email adresiniz</label>
            <input type="email" class="form-control" id="email" name="email">
        </div>
    <div class="mb-2 col-4">
        <label for="exampleFormControlInput1" class="form-label">Şifreniz</label>
        <input type="password" class="form-control" id="password" name="password">
    </div>
    <div class="mb-2 col-4">
        <button type="submit" class="btn btn-info">Giriş Yap</button>
    </div>
</div>
</form>

</body>
</html>

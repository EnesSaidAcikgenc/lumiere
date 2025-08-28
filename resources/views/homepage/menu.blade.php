<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>Lumiere</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-900 text-white">

<!-- Üst Banner -->
<header class="relative w-full h-48">
    <img src="https://picsum.photos/1200/400?food" class="w-full h-48 object-cover" alt="banner">
    <div class="absolute inset-0 bg-black bg-opacity-60 flex flex-col items-center justify-center">
        <img src="https://dummyimage.com/120x120/000/fff&text=Logo" alt="Logo" class="rounded-full border-4 border-white shadow-lg">
        <h1 class="text-2xl font-bold mt-2">Lumiere Menü</h1>
{{--        <p class="text-gray-300 text-sm">Adres · Telefon · Instagram</p>--}}
    </div>
</header>

<!-- Kategoriler -->
<main class="max-w-6xl mx-auto px-4 py-6">
    <div class="flex justify-between items-center mb-4">
        @yield('header')
    </div>

    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
        <!-- Kahvaltılar -->
        @yield('content')
    </div>
</main>

</body>
</html>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') | List Manhwa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body class="bg-black">

    {{-- Navbar --}}
    <x-navbar />

    <div class="container mt-4">
        @yield('content')
    </div>

    {{-- Footer --}}
    <x-footer />

</body>
</html>

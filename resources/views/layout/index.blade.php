<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
    @stack('styles') {{-- Optional untuk page-specific CSS --}}
    @vite('resources/css/app.css')
</head>
<body class="relative">
    <header>
        @if ($page === "landing" || $page === "keranjang" || $page === "produk" || $page === "status")
            @include('layout.navbar')
        @elseif ($page === "checkout")
        @endif
    </header>
    <div>
        @yield('content')
    </div>
    <footer>    
        @if ($page === "landing" || $page === "produk")
            @include('layout.footer')
        @elseif ($page === "keranjang" || $page === "checkout" || $page === "status") 
        @endif
    </footer>
</body>
</html>
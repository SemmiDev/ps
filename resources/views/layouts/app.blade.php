<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Penta Store</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>

<body class="bg-[#141b2b] min-h-screen text-white w-full">
    @include('layouts.nav')
    <div class="fixed bottom-12 right-12">
        <a href="https://api.whatsapp.com/send?phone=6289502789608" target="_blank" rel="noopener noreferrer"
            class="bg-green-500 text-white p-4 rounded-full flex items-center shadow hover:bg-green-600 transition duration-300">
            <img src="/wa.png" alt="" class="w-6 h-6 object-cover me-2">
            Jual Akun
        </a>
    </div>

    <main>
        {{ $slot }}
    </main>
</body>

</html>

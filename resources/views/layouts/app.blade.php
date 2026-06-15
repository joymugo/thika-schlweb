<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Thika Girls Karibariri')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-50 text-gray-800 font-sans">

<header class="bg-blue-800 text-white shadow">
    <div class="max-w-6xl mx-auto flex items-center justify-between px-4 py-4">
        <a href="{{ route('home') }}" class="text-xl font-bold">
            Thika High <span class="text-yellow-400">School Karibariri</span>
        </a>
        <nav class="space-x-4">
            <a href="{{ route('home') }}" class="hover:text-blue-200">Home</a>
            <a href="{{ route('about') }}" class="hover:text-blue-200">About</a>
            <a href="{{ route('academics') }}" class="hover:text-blue-200">Academics</a>
            <a href="{{ route('admissions') }}" class="hover:text-blue-200">Admissions</a>
            <a href="{{ route('gallery') }}" class="hover:text-blue-200">Gallery</a>
            <a href="{{ route('news') }}" class="hover:text-blue-200">News</a>
            <a href="{{ route('contact') }}" class="hover:text-blue-200">Contact</a>
        </nav>
    </div>
</header>

<main class="max-w-6xl mx-auto px-4 py-8">
    @yield('content')
</main>

<footer class="bg-blue-800 text-white mt-12">
    <div class="max-w-6xl mx-auto px-4 py-6 text-center text-sm">
        &copy; {{ date('Y') }} Thika High School Kibirir. All rights reserved.
    </div>
</footer>

</body>
</html>

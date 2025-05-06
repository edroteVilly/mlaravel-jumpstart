<!DOCTYPE html>
<html>
<head>
    <title>Hello Page</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 text-center p-10">
    <img src="{{ asset('images/yourimage.jfif') }}" alt="Laravel Logo"
         class="mx-auto mt-4 w-16 h-16 object-contain">
    <h1 class="text-3xl text-blue-600 font-bold mt-4">
        Hello, {{ $name }}! Welcome to Laravel
    </h1>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
    <title>Hello Page</title>
    <style>
    body {
        background-color: #f3f4f6;
        text-align: center;
        padding: 2.5rem;
    }

    img {
        display: block;
        margin: 1rem auto;
        width: 4rem;
        height: 4rem;
        object-fit: contain;
    }

    h1 {
        font-size: 1.875rem;
        color: #2563eb;
        font-weight: bold;
        margin-top: 1rem;
    }
    </style>
</head>
<body class="bg-gray-100 text-center p-10">
    <img src="{{ asset('images/yourimage.jfif') }}" alt="Laravel Logo"
         class="mx-auto mt-4 w-20 h-20 object-contain">
    <h1 class="text-3xl text-blue-600 font-bold mt-4">
        Hello, {{ $name }}! Welcome to Laravel
    </h1>
</body>
</html>

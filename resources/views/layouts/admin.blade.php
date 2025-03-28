<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shkolo Dashboard - @yield('title')</title>

    @vite(['resources/css/app.css', 'resources/scss/app.scss', 'resources/js/app.js'])

</head>

<div>
<x-navbar />
</div>
<body class="flex items-center justify-center h-screen bg-gray-100">
    @yield('content')
</body>

</html>

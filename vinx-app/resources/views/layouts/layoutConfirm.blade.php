<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body>
    <header class="bg-blue-2 text-white text-main">
        @include('layouts.navConfirm')
    </header>
    <main>
        @yield('content')
    </main>
    
</body>
</html>
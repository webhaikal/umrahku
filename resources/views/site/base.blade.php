<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>umrahku</title>

    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <script src="{{ mix('js/app.js') }}" defer></script>
</head>
<body>
    <div id="app" >
        <nav class="w-screen hidden md:flex flex-row justify-between p-4 px-12 shadow border-b">
            <a href="/" class="font-bold text-3xl logo">umrahku</a>
            <div class="flex flex-row items-center">
                <a href="#" class="h-full flex flex-row items-center px-4 py-2 mr-4 bg-gray-200 hover:bg-gray-300" style="border-radius: 22px;">
                    <ficon :icon="['fas','globe']" class="mr-2"></ficon>
                    <ficon :icon="['fas', 'angle-down']"></ficon>
                </a>
                <div class="px-4 py-2 flex flex-row items-center bg-gray-200 hover:bg-gray-300" style="border-radius: 22px;">
                    <ficon :icon="['fas', 'bars']" class="mr-4"></ficon>
                    <img src="https://api.adorable.io/avatars/285/abott@adorable.png" class="rounded-full" style="height: 32px;" alt="profile-pic"/>
                </div>
            </div>
        </nav>
        @yield('content')
    </div>
</body>
</html>

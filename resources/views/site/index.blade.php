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
<div id="app">
    <div class="h-screen">
        <div class="absolute top-0 bottom-0 right-0 left-0 bg-black" style="z-index: -10">
            <div class="inline-block align-bottom h-full w-full">
                <img src="/img/home-bg.jpg" class="opacity-50 object-cover align-bottom h-full w-full absolute"/>
            </div>
        </div>
        <div class="w-screen flex flex-col p-4 px-6 md:px-12 absolute top-0">
            <nav class="w-full flex flex-row justify-between">
                <a href="/" class="font-bold text-3xl logo text-white flex flex-row items-center">umrahku</a>
                <div class="hidden md:flex flex-row items-center">
                    <a href="#" class="h-full flex flex-row items-center px-4 py-1 mr-4 bg-gray-200 hover:bg-gray-300" style="border-radius: 22px;">
                        <ficon :icon="['fas','globe']" class="mr-2"></ficon>
                        <ficon :icon="['fas', 'angle-down']"></ficon>
                    </a>
                    <div class="px-4 py-1 flex flex-row items-center bg-gray-200 hover:bg-gray-300" style="border-radius: 22px;">
                        <ficon :icon="['fas', 'bars']" class="mr-4"></ficon>
                        <img src="https://api.adorable.io/avatars/285/abott@adorable.png" class="rounded-full" style="height: 32px;" alt="profile-pic"/>
                    </div>
                </div>
            </nav>
            <div class="w-full flex justify-center mt-10">
                <div class="bg-white w-2/3 md:w-2/5" style="border-radius: 32px">
                    <form class="w-full h-full flex flex-row justify-between">
                        <div class="flex flex-row flex-grow">
                            <div class="date-chooser border-r hover:border-0 hover:bg-gray-300 hover:rounded-large w-2/4 h-full">
                                <button class="appearance-none bg-transparent border-0 cursor-pointer block m-0 outline-none overflow-visible text-left no-underline relative w-full">
                                    <div class="overflow-hidden relative whitespace-no-wrap w-full" style="padding: 14px 24px">
                                        <div class="text-xs leading-3 font-semibold tracking-wider uppercase pb-1">When are you going?</div>
                                        <div class="text-sm leading-5 font-normal overflow-hidden w-full">Add date</div>
                                    </div>
                                </button>
                            </div>
                            <div class="date-chooser hover:border-0 hover:bg-gray-300 hover:rounded-large w-2/4 h-full">
                                <button class="appearance-none bg-transparent border-0 cursor-pointer block m-0 outline-none overflow-visible text-left no-underline relative w-full">
                                    <div class="overflow-hidden relative whitespace-no-wrap w-full" style="padding: 14px 24px">
                                        <div class="text-xs leading-3 font-semibold tracking-wider uppercase pb-1">Guests</div>
                                        <div class="text-sm leading-5 font-normal overflow-hidden w-full">Add guests</div>
                                    </div>
                                </button>
                            </div>
                        </div>
                        <button type="submit" class="appearance-none rounded-full bg-green-500 m-2 flex flex-row justify-center items-center" style="height: 48px; width: 48px">
                            <svg role="presentation" focusable="false" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" style="display: block; fill: none; height: 16px; width: 16px; stroke: currentcolor; stroke-width: 4; overflow: visible;"><g fill="none"><path d="m13 24c6.0751322 0 11-4.9248678 11-11 0-6.07513225-4.9248678-11-11-11-6.07513225 0-11 4.92486775-11 11 0 6.0751322 4.92486775 11 11 11zm8-3 9 9"></path></g></svg>
                        </button>
                    </form>
                </div>
            </div>
        </div>

        <div class="absolute top-0 bottom-0 right-0 left-0 px-6 md:px-12 container mx-auto flex flex-col justify-center">
            <div id="hero" class="my-auto h-20">
                <div class="flex flex-col text-white">
                    <div class="mb-6 font-semibold text-lg leading-3 italic">Firman Allah SWT:</div>
                    <div class="my-6 font-bold text-5xl leading-3 tracking-wider">وَأَتِمُّوا الْحَجَّ وَالْعُمْرَةَ لِلَّهِ ۚ</div>
                    <div class="mt-2 font-semibold text-sm leading-3 tracking-wider">(Surah Al-Baqarah: Ayat 196)</div>
                    <div class="mt-6 font-semibold text-xl leading-3 tracking-wider">Dan sempurnakanlah ibadat Haji dan Umrah kerana Allah;</div>
                </div>
            </div>
        </div>

        <footer class="absolute bottom-0 px-6 md:p-12">
            <span class="text-white">Copyright &copy; {{ date('Y') }} umrahku. Built by <a href="mailto:haikalizz05@gmail.com">Haikal Izzuddin</a></span>
        </footer>
    </div>
</div>
</body>
</html>


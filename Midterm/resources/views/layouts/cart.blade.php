<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-white">
            @include('layouts.navigationhome')

            <!-- Page Heading -->
            {{-- @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif --}}

            <!-- Page Content -->
            <main class="bg-white md:flex lg:flex">
                <div class='flex justify-around flex-col flex-wrap bg-white m-4 rounded-lg items-center md:flex-row lg:flex-row '>
                    <div class=" rounded-md m-2 w-[300px]">
                        <div><img class=""src="{{asset('template')}}/img/3.jpeg" alt=""></div>
                        <div class="bg-stone-200 flex justify-around text-sm rounded-b-lg">
                            <div class="flex flex-col m-3">
                                <h2 class="text-lg font-extrabold">Rp.150.000</h2>
                                <h2 class="text-md font-bold">Tari Kecak</h2><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, temporibus!</p></div>
                            <div class="m-2 flex flex-col justify-center"><button id="kecak1" class="p-2 bg-sky-400 rounded-lg text-white text-xs border-solid border-white">Tambah</button></div>
                        </div>
                    </div>
                    <div class=" rounded-md m-2 w-[300px]">
                        <div><img class=""src="{{asset('template')}}/img/3.jpeg" alt=""></div>
                        <div class="bg-stone-200 flex justify-around text-sm rounded-b-lg">
                            <div class="flex flex-col m-3">
                                <h2 class="text-lg font-extrabold">Rp.150.000</h2>
                                <h2 class="text-md font-bold">Tari Kecak</h2><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, temporibus!</p></div>
                            <div class="m-2 flex flex-col justify-center"><button id="kecak1" class="p-2 bg-sky-400 rounded-lg text-white text-xs border-solid border-white">Tambah</button></div>
                        </div>
                    </div>
                    <div class=" rounded-md m-2 w-[300px] ">
                        <div><img class=""src="{{asset('template')}}/img/3.jpeg" alt=""></div>
                        <div class="bg-stone-200 flex justify-around text-sm rounded-b-lg">
                            <div class="flex flex-col m-3">
                                <h2 class="text-lg font-extrabold">Rp.150.000</h2>
                                <h2 class="text-md font-bold">Tari Kecak</h2><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, temporibus!</p></div>
                            <div class="m-2 flex flex-col justify-center"><button class="p-2 bg-sky-400 rounded-lg text-white text-xs border-solid border-white">Tambah</button></div>
                        </div>
                    </div>


                </div>
                <div class="m-4 bg-slate-200 rounded-lg h-[400px] min-h-fit">
                    <h2 class="m-2 font-extrabold text-lg">Shopping cart</h2>
                    <div class="rounded-md m-2 w-[300px]">
                        <ul>
                            <li>
                                <div class="flex justify-between ">
                                <h2>Tari Kecak</h2>
                                <h2>Rp.150.000</h2>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <h2 class="mx-2 text-lg font-bold">Total Amount</h2>
                    <div class="p-3 space-y-3">
                        <input type="text" readonly class="h-8 rounded-md  px-3" placeholder="Rp.0">
                        <button class="px-4 py-2 bg-blue-700 rounded-lg text-white text-sm border-solid border-white">Checkout</button>
                    </div>
                </div>
            </main>
        </div>
    </body>
    <script>

        
    </script>

</html>


<!DOCTYPE html>
<html lang="en" class="scroll-smooth ">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>KosKita</title>
  </head>
  <body class="lg:text-base text-sm  ">
    <header class="px-8 py-3 lg:px-10 ">
      <nav class="flex justify-between lg:text-xl">
        <h1 class="">Ini logo</h1>
        <ul class="flex space-x-3">
          <li class="hover:text-stone-500"><a href="/">Home</a></li>
          <li class="hover:text-stone-500"><a href="{{route('room')}}">Kamar</a></li>
          <li class="hover:text-stone-500"><a href="{{route('book')}}">Book Now</a></li>
          @if(Route::has('login'))
            <div class="flex items-center">
              @auth
              <li class=" pl-3 border-l-2 ">
                <form method="POST" action="{{ route('logout') }}">
                  @csrf
                      <a class="hover:text-black text-white text-[16px] px-2 py-1 hover:bg-red-500 bg-red-400 rounded" href="" onclick="event.preventDefault();
                      this.closest('form').submit();">Log out</a></li>
                  
              </form>
              @else
                <li class="hover:text-black pl-3 border-l-2 text-white"><a class="text-[16px] px-2 py-1 hover:bg-gray-500 bg-gray-400 rounded"href="{{route('login')}}">Log In</a></li>
              @endauth
            </div>
          @endif
        </ul>
      </nav>
    </header>
        {{$slot}}
    @include('layouts.footer')
    </body>
    <script src="{{ asset('template')}}/app.js">

    </script>
</html>
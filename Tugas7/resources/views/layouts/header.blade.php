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
    <header class="px-3 py-3 lg:px-10 ">
      <nav class=" justify-between  lg:text-xl">
        
        <ul class="lg:flex lg:space-x-3  md:justify-center  justify-between flex flex-wrap items-center">
            <li class="order-1 lg:order-0  md:flex-1">
              <h1 class="">Ini logo</h1>
              </li>
            <li class="hover:text-stone-500 w-full hidden text-center lg:order-1 order-3 lg:pb-0 pb-4 lg:block lg:w-auto"><a href="/">Home</a></li>
            <li class="hover:text-stone-500 w-full hidden text-center lg:order-1 order-3 lg:pb-0 pb-4 lg:block lg:w-auto"><a href="{{route('userdashboard')}}">Dashboard</a></li>
            <li class="hover:text-stone-500 w-full hidden text-center lg:order-1 order-3 lg:pb-0 pb-4 lg:block lg:w-auto"><a href="{{route('room')}}">Kamar</a></li>
            <li class="hover:text-stone-500 w-full hidden text-center lg:order-1 order-3 lg:pb-0 pb-4 lg:block lg:w-auto"><a href="{{route('book')}}">Book Now</a></li>
          
          @if(Route::has('login'))
            <div id='login'class="items-center md:px-4 md:text-base lg:order-2 hidden md:block md:order-1 md:w-auto order-4 md:pb-0 pb-4  w-full text-center">
              @auth
              <li class=" lg:pl-3 w-full   text-center lg:border-l-2">
                <form method="POST" action="{{ route('logout') }}">
                  @csrf
                      <a class="hover:text-black text-center text-white text-sm lg:text-[16px] px-1 py-1 lg:px-2 lg:py-1  hover:bg-red-500 bg-red-400 rounded-md" href="" onclick="event.preventDefault();
                      this.closest('form').submit();">Log out</a></li>
                  
              </form>
              @else
                <li class="hover:text-black w-full  lg:pl-3 text-center lg:border-l-2 text-white"><a class="lg:text-[16px] text-sm px-2 py-1 hover:bg-gray-500 bg-gray-400 rounded-md"href="{{route('login')}}">Log In</a></li>
              @endauth
            </div>
          @endif
          
  
            <li id="hamburger"class="order-1 md:order-2 text-center lg:hidden ">
              <div class="w-5  h-1 border-2 border-stone-400  rounded-md relative before:w-5 before:absolute before:h-1 before:border-2 before:border-stone-400 before:rounded-md after:w-5 after:absolute after:h-1 after:border-2 after:border-stone-400 after:rounded-md before:top-[-8px] before:right-[-2px] after:top-1 after:left-[-2px] cursor-pointer"></div>
              </li>
        </ul>
        
      </nav>
      
    </header>
        {{$slot}}
    @include('layouts.footer')
    </body>
    <script src="{{ asset('template')}}/app.js">

    </script>
</html>
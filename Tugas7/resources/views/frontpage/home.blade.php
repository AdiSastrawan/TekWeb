<x-header-layout>
    <main class="">
        <div class="min-h-[400px] bg-fixed  bg-cover  bg-transparent text-white flex justify-center bg-center items-center" style="background-image: url({{asset('template')}}/img/3.jpeg)">
          <div class="w-[70%]">
            <h1 class="font-bold text-6xl lg:text-7xl  ">KOS MURAH</h1>
            <h1 class="font-bold text-4xl lg:text-6xl">LINGKUNGAN </h1>
            <h1 class="font-bold text-4xl lg:text-6xl">RAMAH !</h1>
            <p class="text-lg">Ya cuma di KOSKITA!!</p>
          </div>
        </div>
        <div class="min-h-[320px] bg-white text-black py-10">
          <h2 class="text-center font-bold lg:text-4xl text-2xl">KOSKITA</h2>
          <div class="flex justify-center">
            <p class="text-sm w-80 lg:w-2/4 lg:text-lg text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur ipsam, nisi similique inventore qui excepturi nulla quo modi? Atque, hic!</p>
          </div>
        </div>
        <div class="flex flex-col lg:grid lg:grid-cols-2 py-10 lg:p-20 bg-stone-500">
          <div class="flex justify-center items-center">
            <img class="w-[90%] h-[200px] lg:h-[300px] object-cover object-center rounded-lg" src="{{asset('template')}}/img/1.jpg" alt="" />
          </div>
          <div class="flex flex-col justify-center text-white lg:justify-start px-7">
            <h2 class="font-bold text-3xl  lg:text-5xl lg:w-80">KOS-KOSAN MURAH!</h2>
            <p class="lg:w-96 w-72">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae, dolor cumque. Accusantium eius libero ratione atque nemo, ex necessitatibus sint.</p>
          </div>
        </div>
        <div>
          <h1 class="text-center text-3xl lg:text-5xl font-bold py-5">Kenapa memilih kos ini</h1>
          <div class="lg:grid lg:grid-cols-1 lg:grid-rows-2  flex flex-col space-y-4 ">
            <div class="lg:flex lg:p-20 ">
              <div class="p-6 lg:flex-1">
                <h2 class="text-2xl font-bold">Ini Manfaatnya</h2>
                <p class="lg:w-96 w-72">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae, dolor cumque. Accusantium eius libero ratione atque nemo, ex necessitatibus sint.</p>
              </div>
              <div class="flex justify-center lg:flex-1">
                <img class="w-[90%] h-[200px] lg:h-[300px] lg:w-[80%] object-cover object-center rounded-lg" src="{{asset('template')}}/img/1.jpg" alt="" />
              </div>
            </div>
            <div class="lg:flex bg-stone-500 lg:p-20 ">
                <div class="flex justify-center pt-10 lg:pt-0 lg:flex-1">
                  <img class="w-[90%] h-[200px] lg:h-[300px] lg:w-[80%] object-cover object-center rounded-lg" src="{{asset('template')}}/img/1.jpg" alt="" />
                </div>
                <div class="p-6 lg:flex-1 text-white">
                  <h2 class="text-2xl font-bold">Ini Manfaatnya</h2>
                  <p class="lg:w-96 w-72">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae, dolor cumque. Accusantium eius libero ratione atque nemo, ex necessitatibus sint.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="flex bg-[url('/img/2.jpeg')] bg-cover flex-col bg-center min-h-[300px] items-center justify-center space-y-2" style="background-image: url({{asset('template')}}/img/2.jpeg)">
         <h2 class="lg:text-3xl text-lg  font-bold text-stone-800 ">SIAPA CEPAT DIA DAPAT</h2>
         <p class="text-stone-800">Tekan tombol dibawah ini untuk booking sekarang</p>
          <div class="bg-transparent border border-solid hover:bg-white hover:text-stone-800  transition-all text-white w-2/4 lg:w-1/4 lg:h-20 h-10 flex items-center justify-center rounded-xl ">
            <a href="{{route('book')}}">
              <h2 class="lg:text-xl text-lg  font-bold  ">ORDER NOW</h2>
            </a>
          </div>
        </div>
      </main>
      
</x-header-layout>
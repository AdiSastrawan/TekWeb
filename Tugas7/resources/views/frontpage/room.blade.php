<x-header-layout>
    <main>
        <div class="min-h-[400px] bg-fixed bg-[url({{asset('template')}}/img/4.jpeg)] bg-cover bg-transparent text-white flex justify-center bg-center items-center" style="background-image: url({{asset('template')}}/img/4.jpeg)">
          <div class="w-[70%]">
            <h1 class="font-bold text-5xl lg:text-7xl  ">FASILITAS</h1>
            <h1 class="font-bold text-4xl lg:text-6xl"> LENGKAP</h1>
            <p class="text-lg">Kamar bisa sesuai keinginan atau pilih paket yang kamu mau!</p>
            <p class="pt-5 font-bold text-stone-500">
  
                <a class="px-4 py-2 text-xl border-solid border  rounded-2xl  border-stone-500  bg-white mt-9 "href="#paket">Pilih paket</a>
            </p>
          </div>
        </div>
        
        <div class="py-5 ">
          <h1 class="text-center text-3xl lg:text-5xl font-bold py-5">Ukuran Kamar</h1>
          <div class="lg:grid lg:grid-cols-1 lg:grid-rows-2  flex flex-col space-y-4 ">
            <div class="lg:flex lg:p-20 ">
              <div class="p-6 lg:flex-1">
                <h2 class="text-2xl font-bold">Kamar 3x3</h2>
                <p class="lg:w-96 w-72">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae, dolor cumque. Accusantium eius libero ratione atque nemo, ex necessitatibus sint.</p>
              </div>
              <div class="flex justify-center lg:flex-1">
                <img class="w-[90%] h-[200px] lg:h-[300px] lg:w-[80%] object-cover object-center rounded-lg" src="{{asset('template')}}/img/1.jpg" alt="" />
              </div>
            </div>
            <div class="lg:flex bg-stone-500 lg:p-20 text-white ">
                <div class="flex justify-center pt-10 lg:pt-0 lg:flex-1">
                  <img class="w-[90%] h-[200px] lg:h-[300px] lg:w-[80%] object-cover object-center rounded-lg" src="{{asset('template')}}/img/1.jpg" alt="" />
                </div>
                <div class="p-6 lg:flex-1">
                  <h2 class="text-2xl font-bold">Kamar 3x4</h2>
                  <p class="lg:w-96 w-72">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae, dolor cumque. Accusantium eius libero ratione atque nemo, ex necessitatibus sint.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
          <div class="lg:grid lg:grid-cols-1 lg:grid-rows-1  flex flex-col space-y-4 pb-7">
            <div class="lg:flex lg:p-20 ">
              <div class="p-6 lg:flex-1">
                <h2 class="text-2xl font-bold">Kamar 4x4</h2>
                <p class="lg:w-96 w-72">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae, dolor cumque. Accusantium eius libero ratione atque nemo, ex necessitatibus sint.</p>
              </div>
              <div class="flex justify-center lg:flex-1">
                <img class="w-[90%] h-[200px] lg:h-[300px] lg:w-[80%] object-cover object-center rounded-lg" src="{{asset('template')}}/img/1.jpg" alt="" />
              </div>
            </div>
            </div>
          </div>
        </div>
        <div class="bg-stone-800 py-10" >
  
            <div id="paket" class="p-2 ">
              <h1 class="text-center font-bold text-white text-xl lg:text-3xl">Pilihan Tipe Kamar dari KOSKITA</h1>
            </div>
            <div class="flex justify-around flex-wrap">
              @foreach ($roomtype as $type)
              
              <div class="w-60 border-solid border hover:scale-105 transition-all p-5 rounded-md border-stone-500 bg-white flex justify-center my-2 ">
                <div class="space-y-3 ">
                      <h2 class="font-bold text-center">Tipe {{$loop->iteration}}</h2>
                      <ul classs="">
                          <div class="space-y-2">
      
                              <li>Ukuran Kamar : {{$type->facility["size"]}}</li>
                              @if($type->facility["toilet"]==true)
                              <li>Kamar Mandi Dalam</li>
                              @endif
                              @if($type->facility["cupboard"]==true)
                              <li>Lemari</li>
                              @endif
                              @if($type->facility["table"]==true)
                              <li>Meja kerja</li>
                              @endif
                              @if($type->facility["ac"]==true)
                              <li>Air Conditioner</li>
                              @endif
                              @if($type->facility["electricity"]==true)
                              <li>Tanggungan Listrik</li>
                              @endif
                              @if($type->facility["water"]==true)
                                <li>
                                  Tanggungan Air
                                </li>
                              @endif
                              
                          </div>
                      </ul>
                      <h3 class="text-center border-solid border  rounded-xl p-2 border-stone-500"><?php echo "Rp " . number_format($type->costs,2,',','.');?>/bulan</h3>
                      <p class="pt-2 text-center">
                          <a class=" border-solid border  rounded-md p-2 border-stone-500" href="{{route('book')}}">Pilih </a>
                      </p>
                      <h3 class="text-center border-solid border  rounded-xl p-2 border-stone-500">Available room : {{$type->available}}</h3>
                  </div>
              </div>
              
              @endforeach
            </div>
        </div>
        <div class="flex bg-[url('/img/2.jpeg')] bg-cover flex-col bg-center min-h-[300px] items-center justify-center space-y-2" style="background-image: url({{asset('template')}}/img/2.jpeg)">
         <h2 class="lg:text-3xl text-lg  font-bold text-stone-800 ">SIAPA CEPAT DIA DAPAT</h2>
         <p class="text-stone-800">Tekan tombol dibawah ini untuk booking sekarang</p>
          <div class="bg-transparent hover:bg-white hover:text-stone-800 text-white transition-all  border border-solid bor w-2/4 lg:w-1/4 lg:h-20 h-10 flex items-center justify-center rounded-xl ">
            <a class="" href="{{route('book')}}">
              <h2 class="lg:text-xl text-lg   font-bold  ">ORDER NOW</h2>
            </a>
          </div>
        </div>
      </main>
</x-header-layout>
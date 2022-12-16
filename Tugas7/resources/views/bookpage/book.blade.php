<x-header-layout>
    <main class="bg-[url('img/2.jpeg')] bg-cover py-5" style="background-image:url('{{asset('template')}}/img/2.jpeg')">
        <h1 class="text-center pt-6 font-bold text-4xl">PILIH KAMAR</h1>
        <div class="min-h-[300px] flex justify-center my-8">
          <div class="bg-white border-solid border p-5 rounded-md border-stone-500 w-3/4 lg:w-1/2">
            <form class="" method="POST" action="{{route('order')}}">
              @csrf
              <div class="flex flex-col space-y-3">
                  
                <label class="font-bold" for="">Pilih Tipe</label>
                <table>
                 
                  @foreach($rooms as $r)
                  
                  @if($r->available>0)
                  <tr >
                    
                    <td><input class="mr-1" type="radio" name="paket" id="paket{{$loop->iteration}}" value="{{$r->id_room_type}}" /><label class="pl-1"for="">Tipe {{$loop->iteration}}</label>
                      <div id="desc_{{$loop->iteration}}"class=" hidden min-w-fit w-fit ml-4 border-solid border p-5 rounded-md border-stone-500 bg-white flex justify-center my-2 ">
                      <div class="space-y-3 ml-2">
                              
                              <label for="">Pilih Kamar : </label>  
                              <select name="room" id="room" > 
                                
                                <option value="uwu" disabled selected>---Pilih Kamar---</option> 
                                @foreach($r->room as $key)
                                @if($key->occupied==false)
                                <option value="{{$key->id_room}}">No.{{$key->room_number}}</option>
                                @endif 
                                @endforeach
                              </select>
                            
                            <h3 class="text-center border-solid border  rounded-xl p-2 border-stone-500">{{"Rp " . number_format($r->costs,2,',','.');}}/bulan</h3>
                            <h3 class="text-center border-solid border  rounded-xl p-2 border-stone-500">Available room : {{$r->available}}</h3>
                        </div>
                    </div> </td>
                   
                  </tr>
                  @endif
                  @endforeach
                 
                </table>
  
                <label for="" class="font-bold">Harga total</label>
                <input type="text" class="border-solid border w-1/2 rounded-md border-stone-500 pl-2" placeholder="Rp.0" id="total" readonly />
                <input type="submit" class="border-solid border rounded-lg w-1/2 mx-auto border-stone-500 hover:border-white hover:bg-stone-500 hover:text-white transition-all" value="Order" />
              </div>
            </form>
          </div>
        </div>
      </main>
</x-header-layout>
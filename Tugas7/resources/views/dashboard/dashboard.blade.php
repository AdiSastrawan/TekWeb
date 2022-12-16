<x-header-layout>
    <main class="min-h-[600px] bg-cover py-5" style="background-image:url('{{asset('template')}}/img/2.jpeg')">
        <div class="my-5 mx-auto shadow-gray-800 w-3/4 shadow-md rounded-md bg-white min-h-fit ">
            <h2 class="font-bold text-3xl p-3">
                My Account
                </h2>
            <div class="grid  grid-flow-rows  gap-3 grid-cols-2 min-h-[400px] p-5 rounded-md">
                <div class="  col-span-2 row-span-2 bg-white border border-gray-200   rounded-md">
                    <h3 class="font-semibold text-2xl p-2">Profile</h3>
                        <div class="bg-white text-lg lg:text-xl p-2 py-2 space-y-4 ">
                            <label for="">Nama : </label>
                            <input class="rounded-md h-6 text-base lg:text-lg border-gray-300 px-2 w-3/4" type="text" value="{{$user->name}}" readonly="readonly"> <br>
                            <label for="">Email : </label>
                            <input class="rounded-md h-6 text-base lg:text-lg border-gray-300 px-2 w-3/4" type="text" value="{{$user->email}}"readonly="readonly"> <br>
                            <label for="">Password : </label>
                            <input class="rounded-md h-6 text-base lg:text-lg border-gray-300 px-2 w-3/4"  type="password" value="kamugay" readonly="readonly"> <br>
                            <p class="py-4">
                                <a class=" py-2 px-3 rounded-lg lg:text-lg bg-blue-400 text-white" href="{{route('userdashboard.edit')}}">Edit Akun</a>
                                </p>
                        </div>
                    
                </div>
                <div class="  col-span-2 row-span-2 bg-white border border-gray-200  rounded-md">
                    <h3 class="font-semibold text-2xl p-2">Kamar yang disewa</h3>
                    <div class="bg-white text-lg lg:text-xl p-2 space-y-4">
                    @if($room != null)

                        
                            <label for="">Tipe Kamar :</label>{{$room->room['id_room_type']}}<br>   
                            <label for="">No Kamar :</label>{{$room->room['room_number']}}<br>   
                            <label for="">Mulai Sewa :</label>{{$room->date_started}}<br>   
                            <label for="">Tenggat Sewa :</label>{{$room->date_ended}}<br> 
                            <label for="">Harga :</label>{{$room->room->roomType['costs']}}<br> 
                            <p class="py-4">
                                <a class=" py-2 px-3 rounded-lg bg-red-400 text-white" href="{{route('userdashboard.delete',['id'=>$room->id_rent])}}">Akhiri Sewa</a>
                            </p>
                        
                    @else
                            <p class="text-center">Tidak Ada Kamar Yang Disewa</p>
                    </div>
                    @endif
                </div>

                
            </div>
        </div>
    </main>

</x-header-layout>
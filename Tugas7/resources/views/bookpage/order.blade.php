<x-header-layout>
    <main class="bg-[url('img/2.jpeg')] bg-cover py-5" style="background-image:url('{{asset('template')}}/img/2.jpeg')">
        
        <div class="min-h-[300px] flex justify-center my-8">
            
          <div class="bg-white border-solid border p-5 rounded-md border-stone-500 w-3/4 lg:w-1/2">
            <h1 class="text-center text-[#4b9de9] pt-6 font-bold text-4xl">Pembayaran Sukses!!</h1>
            <div class="border-stone-200 rounded-md flex justify-center items-center flex-col space-y-4 ">
                <svg width="150px" height="150px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><style type="text/css">
                    .st0{fill:#4b9de9;}
                    .st1{fill:none;stroke:#ffffff;stroke-width:32;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;}
                </style><g id="Layer_1"/><g id="Layer_2"><g><path class="st0" d="M256,43.5C138.64,43.5,43.5,138.64,43.5,256S138.64,468.5,256,468.5S468.5,373.36,468.5,256    S373.36,43.5,256,43.5z M378.81,222.92L249.88,351.86c-7.95,7.95-18.52,12.33-29.76,12.33s-21.81-4.38-29.76-12.33l-57.17-57.17    c-8.3-8.3-12.87-19.35-12.87-31.11s4.57-22.81,12.87-31.11c8.31-8.31,19.36-12.89,31.11-12.89s22.8,4.58,31.11,12.89l24.71,24.7    l96.47-96.47c8.31-8.31,19.36-12.89,31.11-12.89c11.75,0,22.8,4.58,31.11,12.89c8.3,8.3,12.87,19.35,12.87,31.11    S387.11,214.62,378.81,222.92z"/></g></g></svg>
                <div class="border border-stone-200 font-bold text-neutral-700 w-3/4 p-4 space-y-3 text-lg rounded-md">
                    <label for="">Nama : </label>{{$user_name[0]->name}} <br>
                    <label for="">Kamar Nomor : </label>{{$room[0]->room_number}} <br> 
                    <label for="">Mulai Sewa : </label>{{$rent->date_started}} <br> 
                    <label for="">Tenggat Sewa : </label>{{$rent->date_ended}} <br> 
                </div>
                <p>
                    Cek dashboard, untuk melihat detail lebih lanjut
                    </p>   
                <a class="py-2 px-3 bg-blue-600 rounded-lg border border-white text-white" href="{{route('userdashboard')}}">Dashboard</a>
            </div>
          </div>
        </div>
      </main>
</x-header-layout>
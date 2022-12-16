<x-header-layout>
    <main class="bg-[url('img/2.jpeg')] bg-cover py-5" style="background-image:url('{{asset('template')}}/img/2.jpeg')">
        <h1 class="text-center pt-6 font-bold text-4xl">Edit Akun</h1>
        <div class="min-h-[300px] flex justify-center my-8">
          <div class="bg-white border-solid border p-5 rounded-md border-stone-500 w-3/4 lg:w-1/2">
            <form class="text-lg lg:text-xl" method="POST" action="{{route('userdashboard.update',$user->id)}}">
              @csrf
              <div class="space-y-3">
                @method('put')
                <label for="">Nama : </label>
                <input class="rounded-md h-7 text-base lg:text-lg border-gray-300 px-2 w-3/4" name="name"type="text" value="{{$user->name}}" > <br>
                <label for="">Email : </label>
                <input class="rounded-md h-7 text-base lg:text-lg border-gray-300 px-2 w-3/4" name="email"type="text" value="{{$user->email}}"> <br>
                <div class=" w-full flex justify-end">
                    
                    <input type="submit" class="border-solid border text-white bg-blue-500 mr-10 rounded-lg py-2 px-3  border-white hover:border-blue-700 hover:bg-white-500 hover:text-black transition-all" value="Simpan" />
                </div>
              </div>
            </form>
          </div>
        </div>
      </main>
</x-header-layout>
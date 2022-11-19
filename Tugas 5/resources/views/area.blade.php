<x-header-layout>
    @include('layouts.navigationhead')
    <div class="flex flex-col justify-center items-center">
        <h1 class="font-extrabold text-3xl text-red-800 my-6">Find Area</h1>
        <div class="bg-white w-1/2 p-10 rounded-md ">
            <h1 class="font-extrabold text-lg">Input</h1>
            <div class="flex justify-center">
                <div>

                    <form class=" flex flex-col justify-center p-2  " method="POST"action="{{url('area')}}">
                        @csrf
                        <h2>Type of field :</h2>
                        <div class="">
                            <input type="radio" class="mx-2" id="1" name="field" value="1"><label for="1">Triangle</label> <br>
                            <input type="radio" class="mx-2" id="2" name="field" value="2"><label for="2">Rectangle/Square</label> <br>
                            <input type="radio" class="mx-2" id="3" name="field" value="3"><label for="3">Parralelogram</label>  <br>
                        </div>
                        <div class="">
                            <label for="" class=" mr-2"> <p class="w-3">Length
                            </p>  </label>
                            <input class="rounded-md my-2 px-2 h-5"type="text" name="angka1"><br>
                            <label for="" class=" mr-2"><p class="w-3">Width
                            </p>  </label>
                            <input class="rounded-md my-2 px-2 h-5"type="text" name="angka2">  
                        </div>
                        <div class="">
                            <input class="rounded-md px-2 py-1 bg-blue-400 text-white hover:bg-blue-700" cursor="pointer" type="submit">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
        <div class=" w-1/2 bg-white rounded-md p-10 my-5">
            <h1 class="font-extrabold text-lg">Output</h1>
            <div class="bg-gray-100 rounded-md p-5 my-5">
                @if($luas != null)
                    <p>Length : {{$panjang}}</p>
                    <p>Width : {{$lebar}}</p>
                    @if($id == 1)
                        Area of Triangle : 
                    @elseif($id == 2)
                        Area of Rectangle : 
                    @elseif($id == 3)
                        Area of Parralelogram : 
                    @endif
                    {{$luas}}
                @endif
                
                
            </div>
            
        </div>
    </div>

</x-header-layout>
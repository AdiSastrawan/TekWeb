
<x-header-layout>
    @include('layouts.navigationhead')
    <div class="flex flex-col justify-center items-center">
        <h1 class="font-extrabold text-3xl text-red-800 my-6">Arithmetic Sequence</h1>
        <div class="bg-white w-1/2 p-10 rounded-md ">
            <h1 class="font-extrabold text-lg">Input</h1>
            <form class="grid grid-cols-2 p-2 gap-3 " method="POST"action="{{url('arithmetic')}}">
                @csrf
                <div class="">
                    <label for="">Awal</label>
                    <input class="rounded-md my-2 px-2 h-5"type="text" name="angka1"><br>
                    <label for="">Beda</label>
                    <input class="rounded-md my-2 px-2 h-5"type="text" name="angka2">
                    
                </div>
                <div>
                    <label for="">Suku ke-n</label>
                    <input class="rounded-md my-2 px-2 h-5"type="text" name="n">
                    <div class="flex justify-center items-end h-1/2">

                        <input class="rounded-md px-2 py-1 bg-blue-400 text-white hover:bg-blue-700" cursor="pointer" type="submit">
                    </div>
                </div>
            </form>
        </div>
        
        <div class=" w-1/2 bg-white rounded-md p-10 my-5">
            <h1 class="font-extrabold text-lg">Output</h1>
            <div class="bg-gray-100 rounded-md p-5 my-5">
               @if($value!=null)
                    <p>Awal :{{$value[0]}}</p>
                    <p>Beda :{{$value[1]-$value[0]}}</p>
                    <p>Suku ke-n :{{count($value)}}</p>
                @endif
            </div>
            <table class="w-96 mx-auto rounded-md" >
                <thead >
                    <tr class="border border-gray-500 text-center" >
                        <td class="border-r border-r-gray-500 text-center ">Index</td>
                        <td class="border-l border-l-gray-500 text-center">Value</td>
                    </tr>
                </thead>
                <tbody>
                    <?php $i=0?>
                    @foreach($value as $val)
                        <tr class="border border-gray-500 text-center">
                            <td class="border-r border-r-gray-500 text-center">
                                <?php $i++; echo $i?>
                            </td>
                            <td class="border-l border-l-gray-500 text-center">
                                {{$val}}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>

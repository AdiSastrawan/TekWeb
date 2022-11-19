<x-header-layout>
    <div class="flex justify-center items-center min-h-screen bg-gray-100 ">
        <div class="bg-white w-1/2 rounded-md space-y-3 my-5 shadow-md min-h-[300px] flex items-center justify-center">
            <div>

                <h1 class="text-3xl font-bold text-center mb-10">Menu</h1>
                <div class="space-y-2">
                    <h2 class="text-xl text-center font-semibold">
                        Technology Web Assigment
                    </h2>
                    <ul class="flex justify-center space-x-2 py-4">
                        <li class="p-2 bg-red-500 rounded-md text-white"><a href="/arithmetic">Arithmetic Sequence</a></li>
                        <li class="p-2 bg-green-500 rounded-md text-white"><a href="{{route('area')}}">Find area of a plane</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</x-header-layout>
<x-template-layout>
<div>
    <div class="w-screen h-auto flex justify-center items-center">
        <div class="items-center">
            <h1 class="text-white font-bold text-3xl md:text-5xl mb-2">Choose
                <span class="text-transparent bg-gradient-to-r from-purple-200 to-purple-700 bg-clip-text">Your Tickets</span>
            </h1>
        </div>
    </div>
    <div class="flex justify-center w-screen"> 
        <div class="flex flex-col md:flex-row overflow-auto m-4">
            <div class="min-w-[300px] max-w-[550px] py-4 m-4">
                <div class="bg-white shadow-xl rounded-lg overflow-hidden">
                    <div class="bg-cover bg-center h-16 p-4 flex justify-end items-center" style="background-image: url(https://images.unsplash.com/photo-1507676184212-d03ab07a01bf?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1169&q=80)">
                        <p class="uppercase tracking-widest text-sm text-white font-semibold bg-black py-1 px-2 rounded opacity-75 shadow-lg">EARLY BIRD</p>
                    </div>
                    <div class="px-4 pb-3 pt-4 border-b border-gray-300 bg-gray-100 flex justify-between">
                        <div>
                            <div class="text-xs uppercase font-bold text-gray-600 tracking-wide">Only</div>
                            <div class="text-xs uppercase font-bold text-gray-600 tracking-wide">23 September</div>
                        </div>
                        <div class="text-xs uppercase font-bold text-gray-600 tracking-wide">Status: <span class="font-semibold text-red-600">Sold Out</span></div>
                    </div>
                    <div class="p-4 text-gray-700 flex">
                        <div class="flex w-full justify-between items-center">
                            <p class="text-3xl text-gray-900 leading-none my-1 font-bold">Rp.35.000</p>
                            <a class="leading-loose text-center w-[70px] bg-red-500 hover:bg-red-600 text-white p-1 px-2 rounded-lg uppercase text-xs tracking-wider" disabled>Buy</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="min-w-[300px] max-w-[550px] py-4 m-4">
                <div class="bg-white shadow-xl rounded-lg overflow-hidden">
                    <div class="bg-cover bg-center h-16 p-4 flex justify-end items-center" style="background-image: url(https://images.unsplash.com/photo-1507676184212-d03ab07a01bf?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1169&q=80)">
                        <p class="uppercase tracking-widest text-sm text-white font-semibold bg-black py-1 px-2 rounded opacity-75 shadow-lg">PRESALE 1</p>
                    </div>
                    <div class="px-4 pb-3 pt-4 border-b border-gray-300 bg-gray-100 flex justify-between">
                        <div>
                            <div class="text-xs uppercase font-bold text-gray-600 tracking-wide">24 September</div>
                            <div class="text-xs uppercase font-bold text-gray-600 tracking-wide">4 October</div>
                        </div>
                        
                        <div class="text-xs uppercase font-bold text-gray-600 tracking-wide">Status: <span class="font-semibold text-red-600">Sold Out</span></div>
                    </div>
                    <div class="p-4 text-gray-700 flex">
                        <div class="flex w-full justify-between items-center">
                            <p class="text-3xl text-gray-900 leading-none my-1 font-bold">Rp.40.000</p>
                            <a class="leading-loose text-center w-[70px] bg-red-500 hover:bg-red-600 text-white p-1 px-2 rounded-lg uppercase text-xs tracking-wider" disabled>Buy</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="min-w-[300px] max-w-[500px] py-4 m-4">
                <div class="bg-white shadow-xl rounded-lg overflow-hidden">
                    <div class="bg-cover bg-center h-16 p-4 flex justify-end items-center " style="background-image: url(https://images.unsplash.com/photo-1507676184212-d03ab07a01bf?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1169&q=80)">
                        <p class="uppercase tracking-widest text-sm text-white font-semibold bg-black py-1 px-2 rounded opacity-75 shadow-lg">PRESALE 2</p>
                    </div>
                    <div class="px-4 pb-3 pt-4 border-b border-gray-300 bg-gray-100 flex justify-between">
                        <div>
                            <div class="text-xs uppercase font-bold text-gray-600 tracking-wide">5 Oktober</div>
                            <div class="text-xs uppercase font-bold text-gray-600 tracking-wide">2 November</div>
                        </div>
                        
                        <div class="text-xs uppercase font-bold text-gray-600 tracking-wide">Status: <span class="font-semibold text-green-600">Ready</span></div>
                    </div>
                    <div class="p-4 text-gray-700 flex">
                        <div class="flex w-full justify-between items-center">
                            <p class="text-3xl text-gray-900 leading-none my-1 font-bold">Rp.50.000</p>
                            <a href="{{route('payment')}}" class="leading-loose text-center w-[70px] bg-green-500 hover:bg-green-600 text-white p-1 px-2 rounded-lg uppercase text-xs tracking-wider">Buy</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="min-w-[300px] max-w-[500px] py-4 m-4">
                <div class="bg-white shadow-xl rounded-lg overflow-hidden">
                    <div class="bg-cover bg-center h-16 p-4 flex justify-end items-center" style="background-image: url(https://images.unsplash.com/photo-1507676184212-d03ab07a01bf?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1169&q=80)">
                        <p class="uppercase tracking-widest text-sm text-white font-semibold bg-black py-1 px-2 rounded opacity-75 shadow-lg">OTS</p>
                    </div>
                    <div class="px-4 pb-3 pt-4 border-b border-gray-300 bg-gray-100 flex justify-between">
                        <div>
                            <div class="text-xs uppercase font-bold text-gray-600 tracking-wide">Only</div>
                            <div class="text-xs uppercase font-bold text-gray-600 tracking-wide">5 November</div>
                        </div>
                        
                        <div class="text-xs uppercase font-bold text-gray-600 tracking-wide">Status: <span class="font-semibold text-green-600">Soon</span></div>
                    </div>
                    <div class="p-4 text-gray-700 flex">
                        <div class="flex w-full justify-between items-center">
                            <p class="text-3xl text-gray-900 leading-none my-1 font-bold">Rp.75.000</p>
                            <a class="leading-loose text-center w-[70px] bg-red-500 hover:bg-red-600 text-white p-1 px-2 rounded-lg uppercase text-xs tracking-wider" disabled>Buy</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</x-template-layout>
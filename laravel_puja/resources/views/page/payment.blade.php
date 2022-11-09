<x-template-layout>
    <body class="h-screen flex items-center justify-center bg-center py-12 px-4 sm:px-6 lg:px-8 bg-slate-900">
        <div class="max-w-md w-full p-10 bg-white rounded-xl shadow-lg m-auto">
            <div>
                <h1 class="font-bold text-slate-800 text-2xl mb-4">Payment</h1>
            </div>
            <div>
                <h1 class="font-semibold text-slate-700">Ticket Type :</h1>
                <a class="text-slate-600 text-xl font-semibold tracking-widest">PRESALE 2</a>
            </div>
    
            <div class="flex justify-between mx-6 mt-4">
                <div class="w-20 h-10 bg-slate-500 rounded-md flex justify-center items-center">
                    <a class="text-white text-2xl font-semibold uppercase">dana</a>
                </div>
                <div class="w-20 h-10 bg-slate-500 rounded-md flex justify-center items-center">
                    <a class="text-white text-2xl font-semibold uppercase">dana</a>
                </div>
                <div class="w-20 h-10 bg-slate-500 rounded-md flex justify-center items-center">
                    <a class="text-white text-2xl font-semibold uppercase">dana</a>
                </div>
            </div>
    
            <div class="my-2">
                <form class="">
                    <lable class="font-semibold text-slate-700">Name</lable>
                    <input type="text" placeholder="Your Name" class="w-full h-12 p-4 bg-slate-200 rounded-md mb-2 shadow-sm">
                    <lable class="font-semibold text-slate-700">Address</lable>
                    <input type="text" placeholder="Your Address" class="w-full h-12 p-4 bg-slate-200 rounded-md mb-2 shadow-sm">
                </form>
            </div>
            <div class="flex justify-between">
                <div>
                    <h1 class="text-2xl font-semibold text-slate-900 tracking-wider">Total Price</h1>
                    
                    <a class="flex text-3xl font-semibold text-slate-900">Rp.
                        <input value="50000" id="total" class="max-w-[200px] text-3xl font-semibold text-slate-900" disabled></a>
                </div>
                <div class="float-right">
                    <a class="font-semibold text-slate-700">amount</a>
                    <input type="number" min="1" max="10" onchange="calc()" value="1" id="number" class="bg-slate-200 w-12 p-2 rounded-md shadow-sm">
                </div>
            </div>
            <div class="flex justify-center mt-10">
                <button>
                    <a class="w-full h-auto px-10 py-4 rounded-xl bg-purple-600 text-white font-semibold tracking-widest">CONTINUE</a>
                </button>
            </div>
        </div>
    </body>
    <script>
        function calc(){
            var A = document.getElementById("number");
            var total = document.getElementById("total");
    
            total.value = Number(A.value) * 50000;
        }
    </script>
</x-template-layout>
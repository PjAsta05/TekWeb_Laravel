<x-template-layout>
    <div class="bg-center bg-cover w-screen h-screen shadow-md"
    style="background-image: url(https://images.unsplash.com/photo-1533174072545-7a4b6ad7a6c3?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80);">    
        <div class="bg-black bg-opacity-70 backdrop-blur-[2px]">
            <div class="flex h-screen w-screen ml-3">
                <div class="m-auto max-w-[700px]">
                    <h1 class="text-white font-bold text-3xl md:text-6xl">Malam
                        <span class="text-transparent bg-gradient-to-r from-purple-200 to-purple-700 bg-clip-text">Gelar Seni</span>
                    </h1>
                    <a class="text-white text-3xl font-semibold">
                        <span href="#" class="text-transparent bg-gradient-to-r from-white to-purple-500 bg-clip-text tracking-wide">INTEGER#4</span>
                    </a>
                    <p class="text-white text-justify font-semibold text-base mt-6 mb-[90px] mr-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis explicabo, facere sequi aut culpa sunt. Non laborum dolorem nesciunt, sunt alias deserunt, ipsam repudiandae vitae reiciendis rem hic possimus aspernatur.</p>

                    <div class="flex justify-center">
                        <a href="{{route('ticket')}}" class="text-white bg-gradient-to-r from-purple-500 via-purple-600 to-purple-700 hover:bg-gradient-to-br font-medium rounded-[25px] text-sm px-6 py-3 text-center mr-2 mb-2">Get Tickets</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="guest_star" class="w-screen h-auto mb-[10Vh]">
        <div class="flex items-center justify-center m-10 text-3xl text-white font-bold">
            <h1 class="">Guest <span class="text-transparent bg-gradient-to-r from-purple-200 to-purple-700 bg-clip-text">Stars</span></h1>
        </div>
        <div class="flex flex-col md:flex-row justify-center items-center overflow-auto">
            <div class="m-10">
                <div class="w-[400px] group cursor-pointer active:opacity-70 transition-opacity duration-300">
                    <div class="relative group bg-black rounded-t h-[50px] group-hover:h-[100px] transition-all duration-300">
                        <img class="w-full h-full object-cover opacity-40 group-hover:opacity-60 transition duration-300"
                        src="https://images.unsplash.com/photo-1507676184212-d03ab07a01bf?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1169&q=80">
                        <img class="object-cover absolute w-[160px] bottom-0 opacity-0 group-hover:opacity-100 transform translate-y-3/4 group-hover:translate-y-0 transition duration-300"
                        src="https://i.scdn.co/image/ab6761610000e5ebf4f0019fb070a02d826e2368">
                        <h1 class="absolute top-1/2 transform  -translate-y-1/2 left-5 group-hover:left-52 text-white font-bold text-2xl transition-all duration-300">
                            Harmonia
                        </h1>
                    </div>
                    <div class="min-h-[120px] py-3 px-4 bg-white rounded-b relative z-10 shadow text-gray-600">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi impedit esse dicta ducimus sit, cumque veniam nobis aut minima assumenda ullam</p>
                    </div>
                </div>
            </div>
        
            <div class="m-10">
                <div class="w-[400px] group cursor-pointer active:opacity-70 transition-opacity duration-300">
                    <div class="relative group bg-black rounded-t h-[50px] group-hover:h-[100px] transition-all duration-300">
                        <img class="w-full h-full object-cover opacity-40 group-hover:opacity-60 transition duration-300"
                        src="https://images.unsplash.com/photo-1507676184212-d03ab07a01bf?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1169&q=80">
                        <img class="object-cover absolute w-[160px] bottom-0 opacity-0 group-hover:opacity-100 transform translate-y-3/4 group-hover:translate-y-0 transition duration-300"
                        src="https://i.scdn.co/image/1c9dfde2c024a4e57c91e40044bfeebc048abf27">
                        <h1 class="absolute top-1/2 transform  -translate-y-1/2 left-5 group-hover:left-52 text-white font-bold text-2xl transition-all duration-300">
                            Peewee Gaskins
                        </h1>
                    </div>
                    <div class="min-h-[120px] py-3 px-4 bg-white rounded-b relative z-10 shadow text-gray-600 ">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi impedit esse dicta ducimus sit, cumque veniam nobis aut minima assumenda ullam</p>
                    </div>
                </div>
            </div>
        
            <div class="m-10">
                <div class="w-[400px] group cursor-pointer active:opacity-70 transition-opacity duration-300">
                    <div class="relative group bg-black rounded-t h-[50px] group-hover:h-[100px] transition-all duration-300">
                        <img class="w-full h-full object-cover opacity-40 group-hover:opacity-60 transition duration-300"
                        src="https://images.unsplash.com/photo-1507676184212-d03ab07a01bf?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1169&q=80">
                        <img class="object-cover absolute w-[160px] bottom-0 opacity-0 group-hover:opacity-100 transform translate-y-3/4 group-hover:translate-y-0 transition duration-300"
                        src="https://i1.sndcdn.com/artworks-ySH1sCeaNlxb102u-vAzzWQ-t500x500.jpg">
                        <h1 class="absolute top-1/2 transform  -translate-y-1/2 left-5 group-hover:left-52 text-white font-bold text-2xl transition-all duration-300">
                            Not So Koplo
                        </h1>
                    </div>
                    <div class="min-h-[120px] py-3 px-4 bg-white rounded-b relative z-10 shadow text-gray-600">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi impedit esse dicta ducimus sit, cumque veniam nobis aut minima assumenda ullam</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex flex-col justify-center items-center mt-[100px] mb-[150px]">
            <h1 class="text-white text text-4xl font-bold">Also <span class="text-transparent bg-gradient-to-r from-purple-200 to-purple-700 bg-clip-text">Performing</span></h1> <br/>
            <h1 class="text-white text text-3xl font-semibold">Frenzy Dance and Band TI</h1>
        </div>
        <div class="flex justify-center">
            <a class="text-white text-justify font-semibold text-xl">Sabtu, <span class="text-yellow-400">Nov 2022</span> </a>
        </div>
        <div class="flex justify-center">
            <a class="text-yellow-400 text-justify font-semibold text-xl">17.00 - Selesai</a>
        </div>
        <div class="flex justify-center">
            <a class="text-white font-semibold text-xl max-w-[240px] text-center">Lapangan Sepak Bola Kampus Tengah Undiksha</a>
        </div>
    </div>
    <footer id="contact" class="mt-20 w-full h-auto bg-black bg-opacity-30 backdrop-blur-sm">
        <div class="flex p-4 items-center">
            <div class="m-auto text-center">
                <h2 class="text-white font-semibold text-xl">Contact Us</h2>
                <h3 class="text-white">087784079286</h3>
                <a href="#" class="text-white text-base font-semibold">Learn More</a>
            </div>
        </div>
    </footer>
</x-template-layout>
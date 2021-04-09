<x-app-layout title="EMTP - Homepage">
    <div class="bg-cover bg-right-top md:bg-right-top h-auto sm:h-3/4 text-white py-24 px-10" style="background-image: url(/storage/img/home_banner.jpg)">
        <div class="ml-5 md:ml-24 xl:ml-40 2xl:ml-60 bg-opacity-70 bg-gray-300 py-10 px-5 md:mr-40 lg:mr-60">
            <p class="font-bold text-sm uppercase text-black">Services</p>
            <p class="text-3xl md:text-4xl font-bold text-black mb-1">Training Programs</p>
            <p class="text-2xl md:text-3xl mb-10 leading-none text-black">Train for your future</p>
            <a href="{{ route('client-program') }}" class="bg-purple-800 py-4 px-8 text-white font-bold uppercase text-xs rounded hover:bg-gray-200 hover:text-gray-800">Learn more</a>
        </div>  
    </div>

    <div class="mx-5 md:mx-10 xl:mx-24">
        <h1 class="text-3xl md:text-4xl font-bold text-center m-5">Training Program Catergories</h1>
        <!--Small Cards list-->
        <div class="grid grid-cols-2 md:grid-cols-4 bg-white">
            <div class="hover:bg-gray-100 mx-2 my-2 px-2 py-2 border-black border-2 text-center">
                <p>Management</p>
            </div>
            <div class="hover:bg-gray-100 mx-2 my-2 px-2 py-2 border-black border-2 text-center">
                <p>Software</p>
            </div>
            <div class="hover:bg-gray-100 mx-2 my-2 px-2 py-2 border-black border-2 text-center">
                <p>Creative</p>
            </div>
            <div class="hover:bg-gray-100 mx-2 my-2 px-2 py-2 border-black border-2 text-center">
                <p>Jobs</p>
            </div>
            <div class="hover:bg-gray-100 mx-2 my-2 px-2 py-2 border-black border-2 text-center">
                <p>Communication</p>
            </div>
            <div class="hover:bg-gray-100 mx-2 my-2 px-2 py-2 border-black border-2 text-center">
                <p>Fitness</p>
            </div>
            <div class="hover:bg-gray-100 mx-2 my-2 px-2 py-2 border-black border-2 text-center">
                <p>Skills</p>
            </div>
            <div class="hover:bg-gray-100 mx-2 my-2 px-2 py-2 border-black border-2 text-center">
                <p>Lifestyle</p>
            </div>
        </div>
    </div>
</x-app-layout>

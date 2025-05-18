<x-app-layout>
    <div class="p-4 sm:ml-72 mt-16">
        <div class="py-12 mx-10 my-5 bg-white border rounded-xl shadow-xl">
            
            <!-- Logo -->
            <div class="flex justify-center mb-8">
                <img class="h-32 object-contain" src="{{ asset('images/logo-itc.png') }}" alt="Logo ITC">
            </div>

            <hr class="border-t-2 border-gray-300 mb-10">

            <!-- Judul -->
            <h2 class="text-3xl font-bold text-center text-[#40C6A1] mb-10">Pilih Kategori Cek Tahapan</h2>

            <!-- Card Links -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 px-6 mb-10">
                <a href="/checkstages-busplan" class="group border border-gray-200 rounded-xl p-6 hover:bg-[#e6f9f4] transition duration-200 shadow hover:shadow-lg text-center">
                    <div class="text-[#40C6A1] text-4xl mb-3 group-hover:scale-110 transition">📊</div>
                    <h3 class="text-lg font-semibold text-gray-700 group-hover:text-[#40C6A1]">Business Plan</h3>
                </a>

                <a href="/checkstages-ux" class="group border border-gray-200 rounded-xl p-6 hover:bg-[#e6f9f4] transition duration-200 shadow hover:shadow-lg text-center">
                    <div class="text-[#40C6A1] text-4xl mb-3 group-hover:scale-110 transition">🎨</div>
                    <h3 class="text-lg font-semibold text-gray-700 group-hover:text-[#40C6A1]">UX Design</h3>
                </a>

                <a href="/checkstages-ppl" class="group border border-gray-200 rounded-xl p-6 hover:bg-[#e6f9f4] transition duration-200 shadow hover:shadow-lg text-center">
                    <div class="text-[#40C6A1] text-4xl mb-3 group-hover:scale-110 transition">💻</div>
                    <h3 class="text-lg font-semibold text-gray-700 group-hover:text-[#40C6A1]">Software Development (PPL)</h3>
                </a>

            </div>
        </div>
    </div>
</x-app-layout>

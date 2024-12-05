<x-app-layout>
    <x.navigation />

    <section class="hero h-96 flex items-center justify-center relative">
        <div class="absolute inset-0 bg-black opacity-30">
            <img src='assets/4.jpg' class="w-full h-[100%]">
        </div>
        <div class="flex flex-col items-center justify-center relative z-10 text-center text-black">
            <h2 class="text-4xl font-bold ">Solusi Seal Karet untuk Kebutuhan Anda</h2>
            <p class="mt-2 text-lg">Kualitas terbaik, harga terjangkau, dan layanan pelanggan yang luar biasa.</p>
            <a href="#products" class="mt-4 inline-block bg-orange-500 text-white py-3 px-6 rounded-full shadow-lg hover:bg-orange-600 transition duration-300">Belanja Sekarang</a>
        </div>
    </section>

    <section id="products" class="py-10">
        <div class="container mx-auto text-center">
            <h2 class="text-3xl font-bold mb-6">Produk Unggulan</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="bg-white p-4 rounded-lg shadow-lg transition-transform transform hover:scale-105 hover:shadow-xl">
                    <img src="assets/1.png" alt="Seal Karet 1" class="w-full h-48 object-cover rounded-t-lg">
                    <div class="p-4">
                        <h3 class="text-lg font-semibold">Seal Karet 1</h3>
                        <p class="mt-1">Deskripsi singkat tentang produk ini.</p>
                        <span class="block mt-2 text-xl font-bold">Rp 50.000</span>
                        <a href="#" class="mt-4 inline-block bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600 transition duration-300">Beli Sekarang</a>
                    </div>
                </div>
                <div class="bg-white p-4 rounded-lg shadow-lg transition-transform transform hover:scale-105 hover:shadow-xl">
                    <img src="assets/2.png" alt="Seal Karet 2" class="w-full h-48 object-cover rounded-t-lg">
                    <div class="p-4">
                        <h3 class="text-lg font-semibold">Seal Karet 2</h3>
                        <p class="mt-1">Deskripsi singkat tentang produk ini.</p>
                        <span class="block mt-2 text-xl font-bold">Rp 75.000</span>
                        <a href="#" class="mt-4 inline-block bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600 transition duration-300">Beli Sekarang</a>
                    </div>
                </div>
                <div class="bg-white p-4 rounded-lg shadow-lg transition-transform transform hover:scale-105 hover:shadow-xl">
                    <img src="assets/3.png" alt="Seal Karet 3" class="w-full h-48 object-cover rounded-t-lg">
                    <div class="p-4">
                        <h3 class="text-lg font-semibold">Seal Karet 3</h3>
                        <p class="mt-1">Deskripsi singkat tentang produk ini.</p>
                        <span class="block mt-2 text-xl font-bold">Rp 100.000</span>
                        <a href="#" class="mt-4 inline-block bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600 transition duration-300">Beli Sekarang</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="bg-gray-200 py-20">
        <div class="container mx-auto text-center">
            <h2 class="text-3xl font-bold text-gray-800">Apa Kata Pelanggan Kami</h2>
            <div class="mt-8">
                <div class="flex items-center justify-center mb-6">
                    <img src="https://via.placeholder.com/64" alt="Customer 1" class="w-16 h-16 rounded-full border-2 border-blue-500">
                    <div class="ml-4">
                        <p class="text-gray-600 italic">"Produk yang hebat dan pengiriman cepat!"</p>
                        <p class="font-semibold">- Pelanggan 1</p>
                    </div>
                </div>
                <div class="flex items-center justify-center mb-6">
                    <img src="https://via.placeholder.com/64" alt="Customer 2" class="w-16 h-16 rounded-full border-2 border-blue-500">
                    <div class="ml-4">
                        <p class="text-gray-600 italic">"Sangat puas dengan kualitas seal karet ini!"</p>
                        <p class="font-semibold">- Pelanggan 2</p>
                    </div>
                </div>
                <div class="flex items-center justify-center mb-6">
                    <img src="https://via.placeholder.com/64" alt="Customer 3" class="w-16 h-16 rounded-full border-2 border-blue-500">
                    <div class="ml-4">
                        <p class="text-gray-600 italic">"Layanan pelanggan yang luar biasa!"</p>
                        <p class="font-semibold">- Pelanggan 3</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <x-Footer />
</x-app-layout>

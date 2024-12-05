<x-app-layout>
    <x.navigation />

    <section class="hero h-96 flex items-center justify-center relative">
        <div class="absolute inset-0 bg-black opacity-50"></div>
        <div class="flex flex-col items-center justify-center relative z-10 text-center text-white">
            <h2 class="text-4xl font-bold">Koleksi Seal Karet Terbaik Kami</h2>
            <p class="mt-2 text-lg">Temukan seal karet yang tepat untuk kebutuhan Anda.</p>
            <a href="#products" class="mt-4 inline-block bg-orange-500 text-white py-3 px-6 rounded-full shadow-lg hover:bg-orange-600 transition duration-300">Lihat Produk</a>
        </div>
    </section>

    <section id="products" class="py-10">
        <div class="container mx-auto text-center">
            <h2 class="text-3xl font-bold mb-6">Produk Kami</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="bg-white p-4 rounded-lg shadow-lg transition-transform transform hover:scale-105 hover:shadow-xl">
                    <img src="https://picsum.photos/200/300" alt="Seal Karet 1" class="w-full h-48 object-cover rounded-t-lg">
                    <div class="p-4">
                        <h3 class="text-lg font-semibold">Seal Karet 1</h3>
                        <p class="mt-1">Seal karet berkualitas tinggi untuk berbagai aplikasi.</p>
                        <span class="block mt-2 text-xl font-bold">Rp 50.000</span>
                        <a href="/Order" class="mt-4 inline-block bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600 transition duration-300">Beli Sekarang</a>
                    </div>
                </div>
                <div class="bg-white p-4 rounded-lg shadow-lg transition-transform transform hover:scale-105 hover:shadow-xl">
                    <img src="https://picsum.photos/200/300" alt="Seal Karet 2" class="w-full h-48 object-cover rounded-t-lg">
                    <div class="p-4">
                        <h3 class="text-lg font-semibold">Seal Karet 2</h3>
                        <p class="mt-1">Desain inovatif untuk kinerja optimal.</p>
                        <span class="block mt-2 text-xl font-bold">Rp 75.000</span>
                        <a href="#" class="mt-4 inline-block bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600 transition duration-300">Beli Sekarang</a>
                    </div>
                </div>
                <div class="bg-white p-4 rounded-lg shadow-lg transition-transform transform hover:scale-105 hover:shadow-xl">
                    <img src="https://picsum.photos/200/300" alt="Seal Karet 3" class="w-full h-48 object-cover rounded-t-lg">
                    <div class="p-4">
                        <h3 class="text-lg font-semibold">Seal Karet 3</h3>
                        <p class="mt-1">Kualitas terjamin untuk ketahanan jangka panjang.</p>
                        <span class="block mt-2 text-xl font-bold">Rp 100.000</span>
                        <a href="#" class="mt-4 inline-block bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600 transition duration-300">Beli Sekarang</a>
                    </div>
                </div>
                <div class="bg-white p-4 rounded-lg shadow-lg transition-transform transform hover:scale-105 hover:shadow-xl">
                    <img src="https://picsum.photos/200/300" alt="Seal Karet 4" class="w-full h-48 object-cover rounded-t-lg">
                    <div class="p-4">
                        <h3 class="text-lg font-semibold">Seal Karet 4</h3>
                        <p class="mt-1">Ideal untuk aplikasi industri dan rumah tangga.</p>
                        <span class="block mt-2 text-xl font-bold">Rp 65.000</span>
                        <a href="#" class="mt-4 inline-block bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600 transition duration-300">Beli Sekarang</a>
                    </div>
                </div>
                <div class="bg-white p-4 rounded-lg shadow-lg transition-transform transform hover:scale-105 hover:shadow-xl">
                <img src="https://picsum.photos/200/300" alt="Seal Karet 5" class="w-full h-48 object-cover rounded-t-lg">
                    <div class="p-4">
                        <h3 class="text-lg font-semibold">Seal Karet 5</h3>
                        <p class="mt-1">Didesain untuk ketahanan dan efisiensi.</p>
                        <span class="block mt-2 text-xl font-bold">Rp 85.000</span>
                        <a href="#" class="mt-4 inline-block bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600 transition duration-300">Beli Sekarang</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <x.Footer />
</x-app-layout>

<x-app-layout>
    <x.navigation />

    <section class="hero h-96 flex items-center justify-center relative">
        <div class="absolute inset-0 bg-black opacity-50"></div>
        <div class="flex flex-col items-center justify-center relative z-10 text-center text-white">
            <h2 class="text-4xl font-bold">Tentang Kami</h2>
            <p class="mt-2 text-lg">Kami adalah penyedia seal karet terkemuka dengan komitmen terhadap kualitas dan layanan.</p>
        </div>
    </section>

    <section class="py-10">
        <div class="container mx-auto text-center">
            <h2 class="text-3xl font-bold mb-6">Visi dan Misi Kami</h2>
            <p class="mb-4 text-gray-600">Visi kami adalah menjadi pemimpin pasar dalam penyediaan seal karet yang berkualitas tinggi.</p>
            <p class="mb-4 text-gray-600">Misi kami adalah memberikan produk terbaik dan layanan pelanggan yang tak tertandingi.</p>
        </div>
    </section>

    <section class="bg-gray-100 py-10">
        <div class="container mx-auto text-center">
            <h2 class="text-3xl font-bold mb-6">Tim Kami</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
                <div class="bg-white p-4 rounded-lg shadow-lg">
                    <img src="https://via.placeholder.com/150" alt="Tim 1" class="w-32 h-32 object-cover rounded-full mx-auto mb-4">
                    <h3 class="text-lg font-semibold">Nama Tim 1</h3>
                    <p class="text-gray-600">Posisi di perusahaan.</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow-lg">
                    <img src="https://via.placeholder.com/150" alt="Tim 2" class="w-32 h-32 object-cover rounded-full mx-auto mb-4">
                    <h3 class="text-lg font-semibold">Nama Tim 2</h3>
                    <p class="text-gray-600">Posisi di perusahaan.</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow-lg">
                    <img src="https://via.placeholder.com/150" alt="Tim 3" class="w-32 h-32 object-cover rounded-full mx-auto mb-4">
                    <h3 class="text-lg font-semibold">Nama Tim 3</h3>
                    <p class="text-gray-600">Posisi di perusahaan.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-10">
        <div class="container mx-auto text-center">
            <h2 class="text-3xl font-bold mb-6">Mengapa Memilih Kami?</h2>
            <p class="mb-4 text-gray-600">Kami berkomitmen untuk memberikan produk berkualitas tinggi dengan harga yang kompetitif.</p>
            <p class="mb-4 text-gray-600">Dukungan pelanggan kami siap membantu Anda kapan saja.</p>
        </div>
    </section>

    <x.footer />
</x-app-layout>

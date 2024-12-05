<x-app-layout>
    <x.navigation />

    <section class="hero h-96 flex items-center justify-center relative">
        <div class="absolute inset-0 bg-black opacity-50"></div>
        <div class="flex flex-col items-center justify-center relative z-10 text-center text-white">
            <h2 class="text-4xl font-bold">Kontak Kami</h2>
            <p class="mt-2 text-lg">Kami siap membantu Anda. Jangan ragu untuk menghubungi kami!</p>
        </div>
    </section>

    <section class="py-10">
        <div class="container mx-auto text-center">
            <h2 class="text-3xl font-bold mb-6">Informasi Kontak</h2>
            <p class="mb-4 text-gray-600">Email: info@ecommerce.com</p>
            <p class="mb-4 text-gray-600">Telepon: +62 123 456 789</p>
            <p class="mb-4 text-gray-600">Alamat: Jl. Contoh No. 123, Jakarta, Indonesia</p>
        </div>
    </section>

    <section class="bg-gray-100 py-10">
        <div class="container mx-auto">
            <h2 class="text-3xl font-bold text-center mb-6">Kirim Pesan</h2>
            <form class="max-w-lg mx-auto bg-white p-6 rounded-lg shadow-lg">
                <div class="mb-4">
                    <label for="name" class="block text-gray-700">Nama</label>
                    <input type="text" id="name" class="w-full p-2 border border-gray-300 rounded" required>
                </div>
                <div class="mb-4">
                    <label for="email" class="block text-gray-700">Email</label>
                    <input type="email" id="email" class="w-full p-2 border border-gray-300 rounded" required>
                </div>
                <div class="mb-4">
                    <label for="message" class="block text-gray-700">Pesan</label>
                    <textarea id="message" rows="4" class="w-full p-2 border border-gray-300 rounded" required></textarea>
                </div>
                <button type="submit" class="w-full bg-blue-600 text-white p-2 rounded hover:bg-blue-700 transition">Kirim</button>
            </form>
        </div>
    </section>

    <section class="py-10">
        <div class="container mx-auto text-center">
            <h2 class="text-3xl font-bold mb-6">Temukan Kami di Peta</h2>
            <div class="w-full h-64 md:h-96">
                <iframe class="w-full h-full" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3153.370220162999!2d144.9630573156852!3d-37.81410797975173!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad642af0f5a4eeb%3A0x5045675218ceed0!2sMelbourne%20CBD%2C%20Victoria%2C%20Australia!5e0!3m2!1sen!2sid!4v1616161616161!5m2!1sen!2sid" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </section>

    <x.footer />
</x-app-layout>

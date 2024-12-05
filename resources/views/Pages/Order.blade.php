<x-app-layout>
    <x.navigation/>
    <div class="container mx-auto p-6">
        <h2 class="text-2xl font-bold mb-6 text-center text-gray-800">Form Pembelian</h2>
        <form class="bg-gray-100 shadow-md rounded-lg p-8">
            <div class="mb-4">
                <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Nama Lengkap</label>
                <input type="text" id="name" name="name" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Masukkan nama lengkap">
            </div>

            <div class="mb-4">
                <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email</label>
                <input type="email" id="email" name="email" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Masukkan email">
            </div>

            <div class="mb-4">
                <label for="address" class="block text-gray-700 text-sm font-bold mb-2">Alamat</label>
                <textarea id="address" name="address" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Masukkan alamat lengkap"></textarea>
            </div>

            <div class="mb-4">
                <label for="product" class="block text-gray-700 text-sm font-bold mb-2">Pilih Produk</label>
                <select id="product" name="product" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    <option value="" disabled selected>Pilih produk...</option>
                    <option value="produk1">Produk 1</option>
                    <option value="produk2">Produk 2</option>
                    <option value="produk3">Produk 3</option>
                </select>
            </div>

            <div class="mb-4">
                <label for="quantity" class="block text-gray-700 text-sm font-bold mb-2">Jumlah</label>
                <input type="number" id="quantity" name="quantity" required min="1" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Masukkan jumlah">
            </div>

            <div class="mb-6">
                <label class="inline-flex items-center">
                    <input type="checkbox" name="terms" required class="form-checkbox h-5 w-5 text-blue-600">
                    <span class="ml-2 text-gray-700">Saya setuju dengan syarat dan ketentuan</span>
                </label>
            </div>

            <div class="flex items-center justify-between">
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                    Kirim Pembelian
                </button>
            </div>
        </form>
    </div>
    <x-Footer/>
</x-app-layout>


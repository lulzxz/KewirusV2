<div class="container flex justify-between items-center p-4">
    <div class="flex items-center">
        <img src="assets/Logo.jpg" alt="Logo" class="w-16 h-16 rounded-full border-2 border-blue-500 mr-4">
        <h1 class="text-2xl font-bold text-gray-800">Mega Teknik</h1>
    </div>
    <nav class="hidden md:flex">
        <ul class="flex space-x-4">
            <li><a href="/" class="text-gray-600 hover:text-blue-600 transition">Home</a></li>
            <li><a href="/Product" class="text-gray-600 hover:text-blue-600 transition">Products</a></li>
            <li><a href="/About" class="text-gray-600 hover:text-blue-600 transition">About Us</a></li>
            <li><a href="/Contact" class="text-gray-600 hover:text-blue-600 transition">Contact</a></li>
        </ul>
    </nav>
    <div class="md:hidden">
        <button id="menu-toggle" class="text-gray-600 focus:outline-none">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
            </svg>
        </button>
    </div>
</div>

<!-- Mobile Menu -->
<div id="mobile-menu" class="hidden md:hidden">
    <ul class="flex flex-col space-y-2 p-4 bg-white shadow-lg">
        <li><a href="/" class="text-gray-600 hover:text-blue-600 transition">Home</a></li>
        <li><a href="/Product" class="text-gray-600 hover:text-blue-600 transition">Products</a></li>
        <li><a href="/About" class="text-gray-600 hover:text-blue-600 transition">About Us</a></li>
        <li><a href="/Contact" class="text-gray-600 hover:text-blue-600 transition">Contact</a></li>
    </ul>
</div>

<script>
    const menuToggle = document.getElementById('menu-toggle');
    const mobileMenu = document.getElementById('mobile-menu');

    menuToggle.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
    });
</script>

<header x-data="{ isOpen: false }" class="w-full bg-sidebar py-5 px-6 sm:hidden">
    <div class="flex items-center justify-between">
        <div class="flex gap-3">
            <img class="w-10 h-10" src="{{ asset('images/logo-bms.png') }}" alt="">
            <a href="index.html" class="text-white text-3xl font-semibold hover:text-gray-300">Admin</a>
        </div>
        <button @click="isOpen = !isOpen" class="text-white text-3xl focus:outline-none">
            <i x-show="!isOpen" class="fas fa-bars"></i>
            <i x-show="isOpen" class="fas fa-times"></i>
        </button>
    </div>

    <!-- Dropdown Nav -->
    <nav :class="isOpen ? 'flex': 'hidden'" class="flex flex-col pt-4">
        <a href="{{ route('dashboard') }}" class="{{ (request()->is('admin/dashboard')) ? 'active-nav-link' : 'opacity-75' }} flex items-center hover:opacity-100 text-white py-4 pl-6 nav-item">
            <i class="fas fa-tachometer-alt mr-3"></i>
            Dashboard
        </a>
        <a href="{{ route('admin_pengaduan') }}" class="{{ (request()->is('admin/pengaduan')) ? 'active-nav-link' : 'opacity-75' }} flex items-center text-white hover:opacity-100 py-4 pl-6 nav-item">
            <i class="fas fa-sticky-note mr-3"></i>
            Pengaduan
        </a>
        <a href="{{ route('indexBerita') }}" class="{{ (request()->is('admin/berita')) ? 'active-nav-link' : 'opacity-75' }} flex items-center text-white hover:opacity-100 py-4 pl-6 nav-item">
            <i class="fa-solid fa-newspaper mr-3"></i>
            Berita
        </a>
        <a href="{{ route('admin_akun') }}" class="{{ (request()->is('admin/akun')) ? 'active-nav-link' : 'opacity-75' }} flex items-center text-white hover:opacity-100 py-4 pl-6 nav-item">
            <i class="fa-solid fa-user-shield mr-3"></i>
            Admin
        </a>

        <a href="{{ route('logout') }}" class="w-full bg-white cta-btn font-semibold py-2 mt-3 rounded-lg shadow-lg hover:shadow-xl hover:bg-gray-300 flex items-center justify-center">
            <i class="fa-solid fa-right-from-bracket mr-3"></i>
            Logout
        </a>
    </nav>
</header>
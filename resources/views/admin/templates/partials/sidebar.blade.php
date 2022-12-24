<aside class="relative bg-sidebar h-screen w-64 hidden sm:block shadow-xl">
    <a href="{{ route('beranda') }}" class="flex gap-3 p-6">
        <img class="w-10 h-10" src="{{ asset('images/logo-bms.png') }}" alt="">
        <span class="text-white text-3xl font-semibold hover:text-gray-300">Admin</span>
    </a>
    <nav class="text-white text-base font-semibold pt-3">
        <a href="{{ route('dashboard') }}" class="{{ (request()->is('admin/dashboard')) ? 'active-nav-link' : '' }} flex items-center opacity-75 hover:opacity-100 text-white py-4 pl-6 nav-item">
            <i class="fas fa-tachometer-alt mr-3"></i>
            Dashboard
        </a>
        <a href="{{ route('admin_pengaduan') }}" class="{{ (request()->is('admin/pengaduan')) ? 'active-nav-link' : '' }} flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
            <i class="fas fa-sticky-note mr-3"></i>
            Pengaduan
        </a>
        {{-- <a href="#" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
            <i class="fas fa-table mr-3"></i>
            Tables
        </a>
        <a href="#" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
            <i class="fas fa-align-left mr-3"></i>
            Forms
        </a>
        <a href="#" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
            <i class="fas fa-tablet-alt mr-3"></i>
            Tabbed Content
        </a>
        <a href="#" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
            <i class="fas fa-calendar mr-3"></i>
            Calendar
        </a> --}}
    </nav>

    <a href="{{ route('logout') }}" class="absolute w-full upgrade-btn bottom-0 text-white font-bold flex items-center justify-center py-4">
        <i class="fa-solid fa-right-from-bracket mr-3"></i>
        Logout
    </a>
</aside>
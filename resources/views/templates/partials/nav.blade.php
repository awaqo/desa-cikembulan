<!-- Navbar -->
<nav class="bg-white sticky top-0 w-full z-20 border-gray-200 px-4 sm:px-16 py-4 shadow-lg">
    <div class="container flex flex-wrap items-center justify-between mx-auto">
        <a href="{{ route('beranda') }}" class="flex items-center">
            <img src="{{ asset('images/logo-bms.png') }}" class="h-6 mr-3 sm:h-9" alt="Logo" />
            <div class="flex flex-col">
                <span class="text-xl font-bold whitespace-nowrap">Cikembulan</span>
                <span class="text-base whitespace-nowrap text-[#2EB5F8]">Kab. Banyumas</span>
            </div>
        </a>
        <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200" aria-controls="navbar-default" aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
        </button>
        <div class="hidden w-full md:block md:w-auto" id="navbar-default">
            <ul class="flex flex-col p-4 mt-4 bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:font-medium md:border-0 md:bg-white">
                <li>
                    <a href="{{ route('beranda') }}" class="{{ ($title === "Beranda") ? 'md:bg-transparent md:text-[#2EB5F8] bg-[#2EB5F8] text-white' : '' }} block py-2 pl-3 pr-4 text-gray-500 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-[#2EB5F8] md:p-0">
                        Beranda
                    </a>
                </li>
                <li>
                    <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar" class="{{ ($title === "Profil") ? 'md:bg-transparent md:text-[#2EB5F8] bg-[#2EB5F8] text-white' : '' }} flex items-center justify-between w-full py-2 pl-3 pr-4 text-gray-500 rounded md:hover:bg-transparent md:border-0 md:hover:text-[#2EB5F8] md:p-0 md:w-auto">
                        Profil <svg class="w-5 h-5 ml-1" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </button>
                    <!-- Dropdown menu -->
                    <div id="dropdownNavbar" class="z-10 hidden bg-white divide-y divide-gray-100 rounded shadow w-44">
                        <ul class="py-1 text-sm text-gray-500" aria-labelledby="dropdownLargeButton">
                          <li>
                            <a href="{{ route('visi-misi') }}" class="{{ ($title === "Profil - Visi Misi") ? 'md:bg-transparent md:text-[#2EB5F8] bg-[#2EB5F8] text-white' : '' }} block px-4 py-2 hover:bg-gray-100">
                                Visi Misi
                            </a>
                          </li>
                          <li>
                            <a href="{{ route('gambaran-umum') }}" class="{{ ($title === "Profil - Gambaran Umum") ? 'md:bg-transparent md:text-[#2EB5F8] bg-[#2EB5F8] text-white' : '' }} block px-4 py-2 hover:bg-gray-100">
                                Gambaran Umum
                            </a>
                          </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="{{ route('layanan') }}" class="{{ ($title === "Layanan") ? 'md:bg-transparent md:text-[#2EB5F8] bg-[#2EB5F8] text-white' : '' }} block py-2 pl-3 pr-4 text-gray-500 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-[#2EB5F8] md:p-0">
                        Layanan
                    </a>
                </li>
                <li>
                    <a href="{{ route('informasi') }}" class="{{ ($title === "Informasi") ? 'md:bg-transparent md:text-[#2EB5F8] bg-[#2EB5F8] text-white' : '' }} block py-2 pl-3 pr-4 text-gray-500 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-[#2EB5F8] md:p-0">
                        Informasi
                    </a>
                </li>
                <li>
                    <a href="{{ route('berita_desa') }}" class="{{ ($title === "Berita Desa") ? 'md:bg-transparent md:text-[#2EB5F8] bg-[#2EB5F8] text-white' : '' }} block py-2 pl-3 pr-4 text-gray-500 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-[#2EB5F8] md:p-0">
                        Berita Desa
                    </a>
                </li>
                {{-- <li>
                    <a href="/" class="block py-2 pl-3 pr-4 text-gray-500 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-[#2EB5F8] md:p-0">
                        <i class="fa-sharp fa-solid fa-magnifying-glass"></i>
                    </a>
                </li> --}}
            </ul>
        </div>
    </div>
</nav>
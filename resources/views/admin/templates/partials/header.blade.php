<header class="w-full items-center bg-white shadow-md py-4 px-6 hidden sm:flex">
    <div class="w-1/2"></div>
    <div class="w-1/2 flex justify-end">
        <div class="relative">
            <img id="avatarButton" type="button" data-dropdown-toggle="userDropdown" data-dropdown-placement="bottom-start" class="p-1 w-10 h-10 rounded-full cursor-pointer ring-2 ring-blue-500" src="{{ asset('images/user.png') }}" alt="User dropdown">
            <span class="bottom-0 left-7 absolute  w-3.5 h-3.5 bg-green-400 border-2 border-green-200 rounded-full"></span>
        </div>

        <!-- Dropdown menu -->
        <div id="userDropdown" class="hidden z-10 w-44 rounded divide-y shadow bg-gray-700 divide-gray-600">
            <div class="py-3 px-4 text-sm text-white">
                @foreach ($adminData as $aD)
                    <div>{{ $aD->name }}</div>
                    <div class="font-medium mt-1 truncate">{{ $aD->username }}</div>
                @endforeach
            </div>
            <ul class="py-1 text-sm text-gray-200" aria-labelledby="avatarButton">
                <li>
                    <a href="{{ route('admin_akun') }}" class="block py-2 px-4 hover:bg-gray-600 hover:text-white">Detail Akun</a>
                </li>
            </ul>
            <div class="py-1">
                <a href="{{ route('logout') }}" class="block py-2 px-4 text-sm hover:bg-gray-600 text-gray-200 hover:text-white">
                    <i class="fa-solid fa-right-from-bracket mr-1"></i> Logout
                </a>
            </div>
        </div>
    </div>
</header>
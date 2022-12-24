<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Desa Cikembulan </title>
    <link rel="shortcut icon" href="{{ asset('images/logo-bms.png') }}" type="image/x-icon">

    <!-- Styles -->
    @vite('resources/css/app.css')
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;400;500;700;900&display=swap" rel="stylesheet">

    <!-- Flowbite -->
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.5/dist/flowbite.min.css" />

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
</head>
<body class="bg-blue-100">
    <div class="h-screen flex justify-center items-center mx-3">
        <div class="w-full max-w-md p-4 rounded-lg shadow-md sm:p-6 md:p-8 bg-gray-800 border-gray-700">
            <form class="space-y-6" action="{{ route('auth.validate_registration') }}" method="POST">
                <a href="{{ route('beranda') }}" class="ml-auto text-sm hover:underline text-[#2EB5F8]"><i class="fa-solid fa-arrow-left"></i> Kembali ke Beranda</a>
                <div class="flex gap-3">
                    <div class="w-8 h-8">
                        <img src="{{ asset('images/logo-bms.png') }}" alt="">
                    </div>
                    <h5 class="text-xl font-bold text-white">Buat akun admin</h5>
                </div>
                @csrf
                <div>
                    <label for="name" class="block mb-2 text-sm font-medium text-white">Nama</label>
                    <input type="text" name="name" id="name" 
                        class="bg-gray-600 border-gray-500 placeholder-gray-400 text-white text-sm rounded-lg focus:ring-[#2EB5F8] focus:border-[#2EB5F8] block w-full p-2.5" 
                        placeholder="nama admin" required>
                    @if ($errors->has('name'))
                        <span class="text-xs text-red-500">{{ $errors->first('name') }}</span>
                    @endif
                </div>
                <div>
                    <label for="username" class="block mb-2 text-sm font-medium text-white">Username</label>
                    <input type="text" name="username" id="username" 
                        class="bg-gray-600 border-gray-500 placeholder-gray-400 text-white text-sm rounded-lg focus:ring-[#2EB5F8] focus:border-[#2EB5F8] block w-full p-2.5" 
                        placeholder="username123" required>
                    @if ($errors->has('username'))
                        <span class="text-xs text-red-500">{{ $errors->first('username') }}</span>
                    @endif
                </div>
                <div>
                    <label for="password" class="block mb-2 text-sm font-medium text-white">Password</label>
                    <input type="password" name="password" id="password" 
                        class="bg-gray-600 border-gray-500 placeholder-gray-400 text-white text-sm rounded-lg focus:ring-[#2EB5F8] focus:border-[#2EB5F8] block w-full p-2.5"
                        placeholder="••••••••" required>
                    @if ($errors->has('password'))
                        <span class="text-xs text-red-500">{{ $errors->first('password') }}</span>
                    @endif
                </div>
                <button type="submit" class="w-full text-white focus:ring-4 focus:outline-none font-medium rounded-lg text-sm px-5 py-3 text-center bg-[#2EB5F8] hover:bg-[#009AE7] focus:ring-[#007fbf]">
                    Register
                </button>
            </form>
        </div>
    </div>
    
</body>
</html>
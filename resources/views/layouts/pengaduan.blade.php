<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }} | Desa Cikembulan</title>
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

    <!-- Slick -->
    <link rel="stylesheet" href="{{ asset('slick/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('slick/slick-theme.css') }}">

    {{-- AOS --}}
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>
<body class="bg-[#f6f8fd]">
    <div class="flex justify-center items-center">
        {{-- form container --}}
        <div class="w-full sm:max-w-5xl my-0 sm:my-10 bg-white rounded-xl shadow-lg p-5 sm:p-8 flex flex-col items-center">
            <a href="{{ route('beranda') }}" class="mr-auto text-sm my-4 hover:underline text-blue-500"><i class="fa-solid fa-arrow-left"></i> Kembali ke Beranda</a>
            
            <h1 class="text-2xl sm:text-3xl text-center mt-3 font-bold uppercase">Form Pengaduan</h1>
            <div class="h-1 w-24 mt-6 bg-[#2EB5F8]"></div>
    
            <form class="w-full mt-10" action="{{ route('pengaduan.proses_pengaduan') }}" method="POST" enctype="multipart/form-data">
                {{-- data diri --}}
                @csrf
                <div class="grid gap-6 mb-6 md:grid-cols-2">
                    <div>
                        <label for="nama" class="block mb-2 text-sm font-medium text-gray-900">Nama Lengkap</label>
                        <input type="text" name="nama" id="nama" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-[#2EB5F8] focus:border-[#2EB5F8] block w-full p-2.5" required>
                    </div>
                    <div>
                        <label for="nik" class="block mb-2 text-sm font-medium text-gray-900 ">Nomor Induk Kependudukan (NIK)</label>
                        <input type="text" name="nik" id="nik" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-[#2EB5F8] focus:border-[#2EB5F8] block w-full p-2.5" required>
                    </div>
                    <div>
                        <label for="no_hp" class="block mb-2 text-sm font-medium text-gray-900 ">Nomor Handphone</label>
                        <input type="text" name="no_hp" id="no_hp" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-[#2EB5F8] focus:border-[#2EB5F8] block w-full p-2.5" required>
                    </div>  
                    <div>
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 ">Alamat Email</label>
                        <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-[#2EB5F8] focus:border-[#2EB5F8] block w-full p-2.5" required>
                    </div>
                    
                    <div>   
                        <label for="jenis_kelamin" class="block mb-2 text-sm font-medium text-gray-900">Jenis Kelamin</label>
                        <select name="jenis_kelamin" id="jenis_kelamin" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-[#2EB5F8] focus:border-[#2EB5F8] block w-full p-2.5">
                            <option selected>Pilih jenis kelamin</option>
                            <option value="Laki-Laki">Laki - Laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                </div>

                {{-- alamat --}}
                <div class="mt-14">
                    <h2 class="text-2xl font-semibold uppercase text-center">Alamat Pelapor</h2>
                    <div class="flex flex-col items-center">
                        <div class="h-1 w-24 my-6 bg-[#2EB5F8]"></div>
                    </div>
                    
                    <div class="grid gap-6 mb-6 md:grid-cols-2">
                        <div>
                            <label for="prov" class="block mb-2 text-sm font-medium text-gray-900 ">Provinsi</label>
                            <input type="text" name="prov" id="prov" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-[#2EB5F8] focus:border-[#2EB5F8] block w-full p-2.5" required>
                        </div> 
                        <div>
                            <label for="kab_kota" class="block mb-2 text-sm font-medium text-gray-900 ">Kabupaten/Kota</label>
                            <input type="text" name="kab_kota" id="kab_kota" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-[#2EB5F8] focus:border-[#2EB5F8] block w-full p-2.5"required>
                        </div> 
                        <div>
                            <label for="kec" class="block mb-2 text-sm font-medium text-gray-900 ">Kecamatan</label>
                            <input type="text" name="kec" id="kec" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-[#2EB5F8] focus:border-[#2EB5F8] block w-full p-2.5"required>
                        </div> 
                        <div>
                            <label for="desa_kelurahan" class="block mb-2 text-sm font-medium text-gray-900 ">Desa/Kelurahan</label>
                            <input type="text" name="desa_kelurahan" id="desa_kelurahan" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-[#2EB5F8] focus:border-[#2EB5F8] block w-full p-2.5"required>
                        </div> 
                    </div>
                    <div class="mb-6">                        
                        <label for="alamat_ktp" class="block mb-2 text-sm font-medium text-gray-900">Alamat sesuai KTP</label>
                        <textarea name="alamat_ktp" id="alamat_ktp" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-[#2EB5F8] focus:border-[#2EB5F8]"></textarea>
                    </div>
                </div>

                {{-- aduan --}}
                <h2 class="text-2xl font-semibold uppercase mt-10 text-center">Isi Aduan</h2>
                    <div class="flex flex-col items-center">
                        <div class="h-1 w-24 my-6 bg-[#2EB5F8]"></div>
                    </div>
                <div class="mb-6">
                    <label for="judul" class="block mb-2 text-sm font-medium text-gray-900 ">Judul</label>
                    <input type="text" name="judul" id="judul" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-[#2EB5F8] focus:border-[#2EB5F8] block w-full p-2.5"required>
                </div> 
                <div class="mb-6">                        
                    <label for="deskripsi" class="block mb-2 text-sm font-medium text-gray-900">Deskripsi Aduan</label>
                    <textarea name="deskripsi" id="deskripsi" rows="8" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-[#2EB5F8] focus:border-[#2EB5F8]"></textarea>
                </div>
                <div class="mb-6">
                    <label class="block mb-2 text-sm font-medium text-gray-900" for="file_input">Upload file pendukung</label>
                    <input name="file_pendukung" id="file_input" type="file" class="block w-full text-sm border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none">
                </div>
                
                <button type="submit" class="my-6 text-white bg-[#2EB5F8] hover:bg-[#009AE7] transition duration-300 ease-in-out focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full px-5 py-2.5 text-center">Kirim</button>
            </form>
        </div>
    </div>
    
</body>
</html>

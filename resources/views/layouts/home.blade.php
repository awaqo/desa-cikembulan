@extends('templates.master')

@section('content')
    <!-- Kenali -->
    <div class="bg-cover bg-center h-screen" style="background-image: url('{{ asset('images/foto-depan-balaidesa.jpg') }}');">
        <div class="flex flex-col gap-y-9 text-white sm:px-20 px-6 py-20" data-aos="fade-up" data-aos-easing="ease-in-out">
            <div class="max-w-lg">
                <h1 class="font-bold sm:text-6xl text-5xl drop-shadow-md tracking-wide">Kenali Desa kami lebih dekat lagi!</h1>
            </div>
            <div class="max-w-sm text-xl">
                <p>Desa Cikembulan adalah desa di wilayah Kab.Banyumas</p>
            </div>
            <a href="{{ route('gambaran-umum') }}" class="max-w-fit px-8 py-5 font-bold uppercase bg-[#2EB5F8] hover:bg-[#009AE7] transition duration-300 ease-in-out rounded-full">
                Lihat Profil <i class="fa-sharp fa-solid fa-caret-right"></i>
            </a>
        </div>
    </div>

    <!-- Selamat Datang -->
    <div class="flex flex-col gap-y-4 text-center items-center mt-16">
        <h1 class="text-3xl mx-6 font-bold" data-aos="fade-up" data-aos-easing="ease-in-out">Selamat Datang di Desa Cikembulan</h1>
        <p class="text-lg mx-6 max-w-xl text-gray-500" data-aos="fade-up" data-aos-easing="ease-in-out">Pemerintah Desa Karangkedawung berkomitmen penuh melayani masyarakat. Sebagai Desa mandiri, Desa Karangkedawung terus bertumbuh bersama dengan masyarakat Desa.</p>
    </div>

    <!-- Menu Website -->
    <div class="md:flex md:items-center md:justify-evenly mt-24 mx-8">
        <a data-aos="fade-up" data-aos-easing="ease-in-out" href="{{ route('gambaran-umum') }}" class="group max-w-full lg:max-w-xs p-6 rounded-xl sm:bg-white sm:hover:bg-[#f1f5ff] transition duration-300 ease-in-out">
            <div class="flex flex-row lg:items-center sm:justify-center items-center gap-x-8 mb-4">
                <img class="h-14 group-hover:rotate-45 transition duration-300 ease-in-out" src="{{ asset('images/circle-progress.png') }}" alt="">
                <h5 class="text-xl font-medium" data-aos="fade-up" data-aos-easing="ease-in-out">Profil</h5>
            </div>
            <p class="font-normal text-gray-500 text-center" data-aos="fade-up" data-aos-easing="ease-in-out">Desa kami adalah Desa yang menjunjung tinggikearifan lokal dalam bermasyarakat dan bernegara</p>
        </a>

        <div data-aos="fade-up" data-aos-easing="ease-in-out" class="hidden md:block w-0.5 h-56 bg-[#2EB5F8]"></div>

        <a data-aos="fade-up" data-aos-easing="ease-in-out" href="{{ route('layanan') }}" class="group max-w-full lg:max-w-xs p-6 rounded-xl sm:bg-white sm:hover:bg-[#f1f5ff] transition duration-300 ease-in-out">
            <div class="flex flex-row lg:items-center sm:justify-center items-center gap-x-8 mb-4">
                <img class="h-14 group-hover:rotate-45 transition duration-300 ease-in-out" src="{{ asset('images/circle-progress.png') }}" alt="">
                <h5 class="text-xl font-medium" data-aos="fade-up" data-aos-easing="ease-in-out">Layanan</h5>
            </div>
            <p class="font-normal text-gray-500 text-center" data-aos="fade-up" data-aos-easing="ease-in-out">Pemerintah Desa selalu berusaha memberikan layanan publik secara prima kepada masyarakat.</p>
        </a>

        <div data-aos="fade-up" data-aos-easing="ease-in-out" class="hidden md:block w-0.5 h-56 bg-[#2EB5F8]"></div>

        <a data-aos="fade-up" data-aos-easing="ease-in-out" href="{{ route('informasi') }}" class="group max-w-full lg:max-w-xs p-6 rounded-xl sm:bg-white sm:hover:bg-[#f1f5ff] transition duration-300 ease-in-out">
            <div class="flex flex-row lg:items-center sm:justify-center items-center gap-x-8 mb-4">
                <img class="h-14 group-hover:rotate-45 transition duration-300 ease-in-out" src="{{ asset('images/circle-progress.png') }}" alt="">
                <h5 class="text-xl font-medium" data-aos="fade-up" data-aos-easing="ease-in-out">Informasi</h5>
            </div>
            <p class="font-normal text-gray-500 text-center" data-aos="fade-up" data-aos-easing="ease-in-out">Pemrintah Desa  menyebarkan informasi  secara merata kepada masyarakat.</p>
        </a>
    </div>
    
    <!-- Kabar -->
    <div class="max-w-full mx-4 sm:mx-16 mt-24 mb-24">
        <h1 class="font-bold text-3xl text-center" data-aos="fade-up" data-aos-easing="ease-in-out">Kabar Desa</h1>

        <!-- Recent Post -->
        <div class="relative" data-aos="fade-up" data-aos-easing="ease-in-out">
            <div class="recent-post mt-14 flex justify-center sm:mx-6">
                <div class="w-full sm:w-80 bg-white mb-1 rounded-3xl shadow-md mx-0 sm:mx-4">
                    <a href="/">
                        <img class="rounded-t-lg" src="{{ asset('images/r_post_img_1.jpg') }}" alt="" />
                    </a>
                    <div class="p-5">
                        <a href="/">
                            <h5 class="mb-4 text-xl font-bold tracking-tight text-gray-900 line-clamp-2">BALAIDESA CIKEMBULAN: MEMBERIKAN PENGALAMAN BAGI PESERTA PKL MAHASISWA ITTP</h5>
                        </a>
                        <p class="mb-6 font-normal text-gray-600 text-left sm:text-justify line-clamp-3">KARANGKEDAWUNG- Hari Senin ( 7/11/2022) di Balai Desa Cikembulan, Kecamatan Patikraja, Banyumas, Jawa Tengah merupakan salah satu tempat dimana Praktek Kerja Lapangan (PKL) ITTP yang dilaksanakan mulai Tanggal 7 November s.d 30 Desember 2022.</p>
                        <p class="text-sm text-gray-400">7 Agustus 2022 15:30:15</p>
                    </div>
                </div>
    
                <div class="w-full sm:w-80 bg-white mb-1 rounded-3xl shadow-md mx-0 sm:mx-4">
                    <a href="/">
                        <img class="rounded-t-lg" src="{{ asset('images/r_post_img_2.jpg') }}" alt="" />
                    </a>
                    <div class="p-5">
                        <a href="/">
                            <h5 class="mb-4 text-xl font-bold tracking-tight text-gray-900 line-clamp-2">Laporan Keuangan APBDesa Pedekik Tahun Anggaran 2022</h5>
                        </a>
                        <p class="mb-6 font-normal text-gray-600 text-left sm:text-justify line-clamp-3">KARANGKEDAWUNG- Hari Senin ( 7/11/2022) di Balai Desa Cikembulan, Kecamatan Patikraja, Banyumas, Jawa Tengah merupakan salah satu tempat dimana Praktek Kerja Lapangan (PKL) ITTP yang dilaksanakan mulai Tanggal 7 November s.d 30 Desember 2022.</p>
                        <p class="text-sm text-gray-400">7 Agustus 2022 15:30:15</p>
                    </div>
                </div>
    
                <div class="w-full sm:w-80 bg-white mb-1 rounded-3xl shadow-md mx-0 sm:mx-4">
                    <a href="/">
                        <img class="rounded-t-lg" src="{{ asset('images/r_post_img_1.jpg') }}" alt="" />
                    </a>
                    <div class="p-5">
                        <a href="/">
                            <h5 class="mb-4 text-xl font-bold tracking-tight text-gray-900 line-clamp-2">BALAIDESA CIKEMBULAN: MEMBERIKAN PENGALAMAN BAGI PESERTA PKL MAHASISWA ITTP</h5>
                        </a>
                        <p class="mb-6 font-normal text-gray-600 text-left sm:text-justify line-clamp-3">KARANGKEDAWUNG- Hari Senin ( 7/11/2022) di Balai Desa Cikembulan, Kecamatan Patikraja, Banyumas, Jawa Tengah merupakan salah satu tempat dimana Praktek Kerja Lapangan (PKL) ITTP yang dilaksanakan mulai Tanggal 7 November s.d 30 Desember 2022.</p>
                        <p class="text-sm text-gray-400">7 Agustus 2022 15:30:15</p>
                    </div>
                </div>
    
                <div class="w-full sm:w-80 bg-white mb-1 rounded-3xl shadow-md mx-0 sm:mx-4">
                    <a href="/">
                        <img class="rounded-t-lg" src="{{ asset('images/r_post_img_1.jpg') }}" alt="" />
                    </a>
                    <div class="p-5">
                        <a href="/">
                            <h5 class="mb-4 text-xl font-bold tracking-tight text-gray-900 line-clamp-2">BALAIDESA CIKEMBULAN: MEMBERIKAN PENGALAMAN BAGI PESERTA PKL MAHASISWA ITTP</h5>
                        </a>
                        <p class="mb-6 font-normal text-gray-600 text-left sm:text-justify line-clamp-3">KARANGKEDAWUNG- Hari Senin ( 7/11/2022) di Balai Desa Cikembulan, Kecamatan Patikraja, Banyumas, Jawa Tengah merupakan salah satu tempat dimana Praktek Kerja Lapangan (PKL) ITTP yang dilaksanakan mulai Tanggal 7 November s.d 30 Desember 2022.</p>
                        <p class="text-sm text-gray-400">7 Agustus 2022 15:30:15</p>
                    </div>
                </div>
            </div>
            <div class="hidden sm:block w-full justify-between">
                <button type="button" class="prev-btn absolute top-0 -left-7 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
                    <span class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-gray-400/30 group-hover:bg-gray-400/60 group-focus:ring-2 group-focus:ring-gray-400/50 group-focus:outline-none">
                        <svg aria-hidden="true" class="w-5 h-5 text-gray-700 sm:w-6 sm:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                        <span class="sr-only">Previous</span>
                    </span>
                </button>
                <button type="button" class="next-btn absolute top-0 -right-7 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
                    <span class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-gray-400/30 group-hover:bg-gray-400/60 group-focus:ring-2 group-focus:ring-gray-400/50 group-focus:outline-none">
                        <svg aria-hidden="true" class="w-5 h-5 text-gray-700 sm:w-6 sm:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        <span class="sr-only">Next</span>
                    </span>
                </button>
            </div>
        </div>
    </div>

@endsection

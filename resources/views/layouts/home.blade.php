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
        <div class="mt-8 w-full sm:flex sm:justify-between space-y-5 sm:space-y-0" data-aos="fade-up" data-aos-easing="ease-in-out">
            @foreach ($dataBerita as $d)
                <div class="max-w-sm mx-auto bg-white border border-gray-200 rounded-lg shadow-md">
                    <a href="{{ url('berita-desa/'.$d->slug) }}">
                        <img class="rounded-t-lg" src="{{ asset('storage/berita/'.$d->gambar) }}" alt="" />
                    </a>
                    <div class="p-5">
                        <a href="{{ url('berita-desa/'.$d->slug) }}">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">{{ $d->judul }}</h5>
                        </a>
                        <div class="mb-3 font-normal text-gray-700 line-clamp-3">{!! $d->konten !!}</div>
                        <div class="mb-1 font-normal text-gray-400">
                            <i class="fa-solid fa-calendar mr-2"></i> {{ $d->created_at }}
                        </div>
                        <div class="mb-3 font-normal text-gray-400">
                            <i class="fa-solid fa-user mr-2"></i> {{ $d->author }}
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

@endsection

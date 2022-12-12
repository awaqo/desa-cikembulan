@extends('templates.master')

@section('content')

    <div class="mt-10 md:mt-20 mb-20 md:flex md:items-center md:justify-center gap-8 mx-4" data-aos="fade-up" data-aos-easing="ease-in-out">
        <div class="w-full sm:w-80 mx-auto md:mx-0">
            <img src="{{ asset('images/layanan_illust.png') }}" alt="">
        </div>
        <div class="flex flex-col">
            <div class="flex flex-col gap-3 items-center md:items-start">
                <h1 class="w-full md:w-[22rem] font-bold text-4xl text-[#2EB5F8]">Layanan Pengaduan Masyarakat Online</h1>
                <h3 class="w-full md:w-[21rem] text-lg text-gray-500">Sampaikan laporan masalah Anda di sini, kami akan memprosesnya dengan cepat</h3>
            </div>
            <a href="/layanan" class="w-full md:w-fit text-center px-8 py-3 rounded-full mt-8 uppercase text-lg text-white font-bold bg-[#2EB5F8] hover:bg-[#009AE7] transition duration-300 ease-in-out">
                Laporkan !
            </a>
        </div>
    </div>
    
@endsection

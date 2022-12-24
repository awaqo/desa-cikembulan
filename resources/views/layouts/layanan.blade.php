@extends('templates.master')

@section('content')

    <div class="mt-5 md:mt-10 mb-20 md:flex md:flex-col md:items-center md:justify-center">
        @if ($message = Session::get('success'))
            <div id="alert-succes" class="flex p-4 mb-4 mx-3 bg-green-100 rounded-lg" role="alert">
                <svg aria-hidden="true" class="flex-shrink-0 w-5 h-5 text-green-700" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
                <span class="sr-only">Info</span>
                <div class="ml-3 text-base text-green-700">
                    {{ $message }}
                </div>
                <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-green-100 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex h-8 w-8" data-dismiss-target="#alert-success" aria-label="Close">
                <span class="sr-only">Close</span>
                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </button>
            </div>
        @endif

        <div class="md:flex md:items-center md:justify-center gap-8 mx-4" data-aos="fade-up" data-aos-easing="ease-in-out">
            <div class="w-full sm:w-80 mx-auto md:mx-0">
                <img src="{{ asset('images/layanan_illust.png') }}" alt="">
            </div>
            <div class="flex flex-col">
                <div class="flex flex-col gap-3 items-center md:items-start">
                    <h1 class="w-full md:w-[22rem] font-bold text-4xl text-[#2EB5F8]">Layanan Pengaduan Masyarakat Online</h1>
                    <h3 class="w-full md:w-[21rem] text-lg text-gray-500">Sampaikan laporan masalah Anda di sini, kami akan memprosesnya dengan cepat</h3>
                </div>
                <a href="{{ route('pengaduan') }}" class="w-full md:w-fit text-center px-8 py-3 rounded-full mt-8 uppercase text-lg text-white font-bold bg-[#2EB5F8] hover:bg-[#009AE7] transition duration-300 ease-in-out">
                    Laporkan !
                </a>
            </div>
        </div>
    </div>
    
@endsection

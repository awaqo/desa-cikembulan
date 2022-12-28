@extends('templates.master')

@section('content')

    <div class="mx-5 md:mx-16 mt-10 md:mt-24 mb-20">
        {{-- Info Administrasi --}}
        <div class="md:flex md:items-center md:justify-center gap-8 mt-4">
            <div class="w-full sm:max-w-xl mx-auto md:mx-0">
                <img class="mx-auto" src="{{ asset('images/informasi_illust_1.png') }}" alt="" data-aos="fade-up" data-aos-easing="ease-in-out">
            </div>
            <div class="flex flex-col gap-4 mt-6 sm:mt-0" data-aos="fade-up" data-aos-easing="ease-in-out">
                <h1 class="w-full md:max-w-lg text-center sm:text-left font-bold text-3xl sm:text-4xl text-[#2EB5F8]">
                    Informasi Administrasi Kependudukan
                </h1>
                <table class="text-gray-500 font-medium text-sm sm:text-lg">
                    <tr>
                        <td class="w-5">A.</td>
                        <td>Persyaratan Pembuatan Akte Kelahiran</td>
                    </tr>
                    <tr>
                        <td class="w-5">B.</td>
                        <td>Persyaratan Warga Pindah Datang</td>
                    </tr>
                    <tr>
                        <td class="w-5">C.</td>
                        <td>Persyaratan Surat Keterangan Domisili Perorangan</td>
                    </tr>
                    <tr>
                        <td class="w-5">D.</td>
                        <td>Persyaratan Perubahan Kartu Keluarga</td>
                    </tr>
                    <tr>
                        <td class="w-5">E.</td>
                        <td>Persyaratan Warga Pindah Keluar</td>
                    </tr>
                    <tr>
                        <td class="w-5">F.</td>
                        <td>Persyaratan Pengantar Nikah</td>
                    </tr>
                    <tr>
                        <td class="w-5">G.</td>
                        <td>Persyaratan Surat Keterangan Usaha</td>
                    </tr>
                </table>
            </div>
        </div>

        {{-- Info Pembangunan --}}
        <div class="md:flex md:items-center md:justify-center gap-8 mt-20 sm:mt-32">
            <div class="flex flex-col gap-4 mt-6 sm:mt-0">
                <h1 class="w-full md:max-w-lg text-center sm:text-left font-bold text-3xl sm:text-4xl text-[#2EB5F8]" data-aos="fade-up" data-aos-easing="ease-in-out">
                    Pembangunan
                </h1>
                <h3 class="w-full md:max-w-md text-center sm:text-left font-bold text-xl sm:text-xl text-gray-600" data-aos="fade-up" data-aos-easing="ease-in-out">
                    Desa Cikembulan melakukan pembangunan bersama dengan warga
                </h3>
                <div class="w-full md:max-w-lg text-justify mt-4 text-lg text-gray-500" data-aos="fade-up" data-aos-easing="ease-in-out">
                    Perencanaan pembangunan Desa Cikembulan dibahas bersama dalam musyarah perencanaan pembangunan Desa. Semua warga berhak untuk mengusulkan ide untuk terwujudnya Desa Cikembulan yang mandiri.
                </div>
                <a href="/" class="w-full text-center md:max-w-fit px-8 py-5 mt-8 font-bold uppercase text-white bg-[#2EB5F8] hover:bg-[#009AE7] transition duration-300 ease-in-out rounded-full" data-aos="fade-up" data-aos-easing="ease-in-out">
                    Pembangunan <i class="fa-sharp fa-solid fa-caret-right"></i>
                </a>
            </div>
            <div class="w-full sm:max-w-xl mx-auto md:mx-0 mt-6 md:mt-0">
                <img class="mx-auto" src="{{ asset('images/informasi_illust_2.png') }}" alt="" data-aos="fade-up" data-aos-easing="ease-in-out">
            </div>
        </div>

        {{-- divider --}}
        <div class="w-full sm:max-w-6xl my-24 mx-auto h-0.5 bg-[#2EB5F8]" data-aos="fade-up" data-aos-easing="ease-in-out"></div>

        {{-- Info Pelayanan Administrasi --}}
        <h1 class="capitalize text-2xl sm:text-3xl text-center font-bold text-[#2EB5F8]" data-aos="fade-up" data-aos-easing="ease-in-out">
            Pelayanan Administrasi Kependudukan
        </h1>
        <div class=""></div>
    </div>
    
@endsection


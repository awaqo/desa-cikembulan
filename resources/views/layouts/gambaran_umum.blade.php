@extends('templates.master')

@section('content')

    <nav class="flex px-4 py-8 sm:p-8 mx-0 sm:mx-10" aria-label="Breadcrumb">
        <ol class="inline-flex items-center space-x-1 md:space-x-3">
            <li class="inline-flex items-center">
                <div class="flex items-center">
                    <span class="ml-1 text-lg font-semibold text-gray-700 md:ml-2">
                        Profil
                    </span>
                </div>
            </li>
            <li aria-current="page">
                <div class="flex items-center">
                    <svg class="w-6 h-6 text-gray-700" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                    <span class="ml-1 text-lg font-semibold text-gray-700 md:ml-2">
                        Gambaran Umum
                    </span>
                </div>
            </li>
        </ol>
    </nav>

    <div class="mx-5 md:mx-16 mt-10 md:mt-16 mb-20">
        {{-- Deskripsi --}}
        <div class="md:flex md:items-center gap-8 mt-4" data-aos="fade-up" data-aos-easing="ease-in-out">
            <div class="w-full sm:max-w-xl mx-auto md:mx-0">
                <h1 class="text-3xl font-bold text-center text-[#2EB5F8] drop-shadow-md">Gambaran Umum</h1>
                <img class="mx-auto mt-5" src="{{ asset('images/gambaran_umum_illust.png') }}" alt="">
            </div>
            <div class="flex flex-col gap-4 mt-6 sm:mt-0">
                <h1 class="w-full md:w-96 font-bold text-3xl sm:text-4xl text-gray-800">
                    Cikembulan,<br>Pekuncen, Banyumas
                </h1>
                <h3 class="w-full md:max-w-xl text-lg text-gray-600 text-justify">
                    Cikembulan adalah desa di kecamatan Pekuncen Banyumas, Jawa Tengah, Indonesia. Sebagian luhur masyarakatnya bermata pencaharian sebagai Petani. Aci di selatan Curug Cipendok perbatasan selang Kecamatan Pekuncen dan Cilongok. Di masa kepemimpinan Bambang Sudiro (1999-2013) Cikembulan menjadi desa yang makmut dan tentram. Berkat kewibawaan dan kepemimpinannya yang aci tanpa pilih - pilih kepada rakyatnya. Sebagian luhur masyarakat sedang berikeinginan dia yang memimpin. Terdapat 3 Sekolah dasar disini adalah SD NEGRI 1, 2, 3 Cikembulan
                </h3>
            </div>
        </div>

        {{-- Struktur Desa --}}
        <h1 class="mt-24 uppercase text-3xl text-center font-bold text-gray-800" data-aos="fade-up" data-aos-easing="ease-in-out">
            STRUKTUR ORGANISASI DAN TATA KERJA PEMRINTAHAN DESA
        </h1>
        <h1 class="mt-4 uppercase text-2xl text-center font-bold text-[#2EB5F8]" data-aos="fade-up" data-aos-easing="ease-in-out">
            Desa Cikembulan
        </h1>
        <h1 class="mt-2 uppercase text-2xl text-center font-bold text-gray-800" data-aos="fade-up" data-aos-easing="ease-in-out">
            Kec. Pekuncen - Kab. Banyumas
        </h1>
    </div>
    
@endsection
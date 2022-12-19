@extends('templates.master')

@section('content')

    <div class="flex px-4 py-8 sm:p-8 mx-0 sm:mx-10" aria-label="Breadcrumb">
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
                        Visi - Misi
                    </span>
                </div>
            </li>
        </ol>
    </div>

    <div class="flex flex-col items-center mt-8 md:mt-16 mx-4 mb-24" data-aos="fade-up" data-aos-easing="ease-in-out">
        {{-- Visi --}}
        <h1 class="uppercase text-2xl sm:text-3xl text-center font-bold text-[#2EB5F8]">Visi</h1>
        <div class="w-full md:max-w-3xl bg-[#84d6ff] px-8 py-10 sm:px-16 sm:py-16 mt-6 sm:mt-10 rounded-xl text-center">
            <p class="text-lg text-gray-600">
                “Terbangunnya Tata Kelola Pemerintahan Desa yang baik dan bersih guna terwujudnya kehidupan masyarakat desa yang adil, makmur dan sejahtera serta berbudaya dan berakhlaq mulia”
            </p>
        </div>

        {{-- Misi --}}
        <h1 class="uppercase mt-24 text-2xl sm:text-3xl font-bold text-[#2EB5F8]">Misi</h1>
        <div class="w-full md:max-w-3xl flex justify-center bg-[#84d6ff] px-8 py-10 sm:px-16 sm:py-16 mt-6 sm:mt-10 rounded-xl">
            <ol class="w-fit list-decimal list-inside text-lg text-gray-600 text-left sm:text-justify">
                <li class="mb-2">Meningkatkan tata pemerintahan yang demokratis, trasparan, akuntabel, efisien dan efektif</li>
                <li class="mb-2">Meningkatkan perekonomian pedesaan yang memiliki daya saing berbasis pada BUMDes dan Teknologi, baik pertanian, perikanan, perkebunan dan home industry</li>
                <li class="mb-2">Meningkatkan sumber daya manusia yang sehat (kesehatan), cerdas (Pendidikan), agamis (Keagamaan), dan bermoral (Budaya)n</li>
                <li class="mb-2">Meningkatkan pembangunan ifrastruktur pedesaan yang terarah dan berkualitas</li>
                <li class="mb-2">Meningkatkan Peran Kelembagaan dan Masyarakat Desa dalam mendorong pembangunan Desa</li>
                <li>Meningkatkan system keamanan lingkungan masyarakat desa</li>
            </ol>
        </div>
    </div>
    
@endsection
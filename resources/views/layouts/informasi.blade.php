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
        <div class="mt-10 sm:mt-16 w-full max-w-6xl mx-auto" data-aos="fade-up" data-aos-easing="ease-in-out">
            <ol class="list-roman list-inside flex flex-row flex-wrap justify-center items-center sm:space-x-8">
                <div class="space-y-5 mb-5">
                    <li class="text-lg font-bold">
                        Persyaratan Pembuatan Akte Kelahiran
                        <ul class="pl-5 text-base font-normal mt-1 space-y-1 list-disc list-inside">
                            <li>Surat Pengantar Ketua RT Setempat</li>
                            <li>KK Asli</li>
                            <li>Surat Bidan Asli atau SPTJM</li>
                            <li>Buku Nikah Asli</li>
                            <li>Materai 10.000 (2 lembar)</li>
                            <li>Fotocopy KTP Orang Tua Kandung</li>
                            <li>Fotocopy KTP Saksi (2 orang)</li>
                            <li>Fotocopy Rapor/Ijazah Terakhir</li>
                         </ul>
                    </li>
    
                    <li class="text-lg font-bold">
                        Persyaratan Warga Pindah Datang
                        <ul class="pl-5 text-base font-normal mt-1 space-y-1 list-disc list-inside">
                            <li>Surat Pindah dari Daerah Asal</li>
                            <li>KK (Asli & Fotocopy)</li>
                            <li>Fotocopy KTP</li>
                            <li>Surat Pengantar Ketua RT Setempat</li>
                            <li>Buku Nikah Asli</li>
                            <li>Materai 10.000 (2 lembar)</li>
                            <li>Fotocopy Ijazah Terakhir</li>
                         </ul>
                    </li>

                    <li class="text-lg font-bold">
                        Persyaratan Surat Keterangan Domisili Perorangan
                        <ul class="pl-5 text-base font-normal mt-1 space-y-1 list-disc list-inside">
                            <li>Surat Pengantar Ketua RT Setempat</li>
                            <li>Fotocopy KK</li>
                            <li>Fotocopy KTP</li>
                         </ul>
                    </li>
                    
                    <li class="text-lg font-bold">
                        Persyaratan Perubahan Kartu Keluarga
                        <ul class="pl-5 text-base font-normal mt-1 space-y-1 list-disc list-inside">
                            <li>Surat Pengantar Ketua RT Setempat</li>
                            <li>Surat Pelaporan Kematian <br>(jika ada anggota keluarga yang meninggal)</li>
                            <li>KK Asli</li>
                            <li>Buku Nikah Asli</li>
                            <li>Fotocopy Rapor/Ijazah Anak</li>
                            <li>Materai 10.000 (1 lembar)</li>
                         </ul>
                    </li>
                </div>

                <div class="space-y-5 lg:-mt-20">
                    <li class="text-lg font-bold">
                        Persyaratan Warga Pindah Keluar
                        <ul class="pl-5 text-base font-normal mt-1 space-y-1 list-disc list-inside">
                            <li>Surat Pengantar Ketua RT Setempat</li>
                            <li>KK (Asli & Fotocopy)</li>
                            <li>Fotocopy KTP</li>
                            <li>Buku Nikah Asli Orang Tua</li>
                            <li>Materai 10.000 (1 lembar)</li>
                            <li>Alamat Yang Dituju <br>(Nama Jalan/RT/RW/Dusun/Desa/Kec/Kab/Prov)</li>
                         </ul>
                    </li>

                    <li class="text-lg font-bold">
                        Persyaratan Pengantar Nikah
                        <ul class="pl-5 text-base font-normal mt-1 space-y-1 list-disc list-inside">
                            <li>Surat Pengantar Ketua RT Setempat</li>
                            <li>Fotocopy KK</li>
                            <li>Fotocopy KTP</li>
                            <li>Fotocopy Ijazah SLTA</li>
                            <li>Fotocopy Akte Kelahiran</li>
                            <li>Fotocopy KTP Orang Tua</li>
                            <li>Fotocopy KTP Calon Suami/Istri</li>
                            <li>Fotocopy KK Calon Suami/Istri</li>
                            <li>Fotocopy KTP Saksi (2 orang)</li>
                            <li>Fotocopy KTP Saksi Jenis Kelamin <br>(jika sudah tidak ada orang tua)</li>
                            <li>Materai 10.000 ( laki-laki 2 lembar, perempuan 5 lembar)</li>
                            <li>Fotocopy Akte Perceraian (Duda/Janda)</li>
                            <li>Pas Photo 2x3 2 lembar (latar biru)</li>
                         </ul>
                    </li>
    
                    <li class="text-lg font-bold">
                        Persyaratan Surat Keterangan Usaha
                        <ul class="pl-5 text-base font-normal mt-1 space-y-1 list-disc list-inside">
                            <li>Surat Pengantar Ketua RT Setempat</li>
                            <li>Fotocopy KK</li>
                            <li>Fotocopy KTP</li>
                            <li>Foto Tempat Usaha</li>
                         </ul>
                    </li>
                </div>

            </ol>
        </div>
    </div>
    
@endsection


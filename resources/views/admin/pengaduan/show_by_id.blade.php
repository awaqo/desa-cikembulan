@extends('admin.master')

@section('content-admin')
    <div class="p-5">
        <div class="my-5">
            <a href="{{ route('admin_pengaduan') }}" class="py-2 px-4 bg-blue-500 hover:bg-blue-600 text-white rounded-xl"><i class="fa-solid fa-arrow-left mr-2"></i> Kembali</a>
        </div>
        @foreach ($pengaduanData as $data)
            <h1 class="text-xl text-center mt-3 font-bold">Detail Data Diri Pelapor</h1>
            <div class="flex flex-col items-center">
                <div class="h-1 w-24 my-6 bg-[#2EB5F8]"></div>
            </div>
            <form class="w-full mx-5 mt-10" >
                {{-- data diri --}}
                <div class="grid gap-6 mb-6 md:grid-cols-2">
                    <div>
                        <label class="block mb-2 text-sm font-medium text-gray-900">Nama Lengkap</label>
                        <div class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-[#2EB5F8] focus:border-[#2EB5F8] block w-full p-2.5">{{ $data->nama }}</div>
                    </div>
                    <div>
                        <label class="block mb-2 text-sm font-medium text-gray-900 ">Nomor Induk Kependudukan (NIK)</label>
                        <div class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-[#2EB5F8] focus:border-[#2EB5F8] block w-full p-2.5">{{ $data->nik }}</div>
                    </div>
                    <div>
                        <label class="block mb-2 text-sm font-medium text-gray-900 ">Nomor Handphone</label>
                        <div class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-[#2EB5F8] focus:border-[#2EB5F8] block w-full p-2.5">{{ $data->no_hp }}</div>
                    </div>  
                    <div>
                        <label class="block mb-2 text-sm font-medium text-gray-900 ">Alamat Email</label>
                        <div class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-[#2EB5F8] focus:border-[#2EB5F8] block w-full p-2.5">{{ $data->email }}</div>
                    </div>
                    
                    <div>   
                        <label class="block mb-2 text-sm font-medium text-gray-900">Jenis Kelamin</label>
                        <div class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-[#2EB5F8] focus:border-[#2EB5F8] block w-full p-2.5">{{ $data->jenis_kelamin }}</div>
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
                            <div class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-[#2EB5F8] focus:border-[#2EB5F8] block w-full p-2.5">{{ $data->prov }}</div>
                        </div> 
                        <div>
                            <label for="kab_kota" class="block mb-2 text-sm font-medium text-gray-900 ">Kabupaten/Kota</label>
                            <div class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-[#2EB5F8] focus:border-[#2EB5F8] block w-full p-2.5">{{ $data->kab_kota }}</div>
                        </div> 
                        <div>
                            <label for="kec" class="block mb-2 text-sm font-medium text-gray-900 ">Kecamatan</label>
                            <div class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-[#2EB5F8] focus:border-[#2EB5F8] block w-full p-2.5">{{ $data->kec }}</div>
                        </div> 
                        <div>
                            <label for="desa_kelurahan" class="block mb-2 text-sm font-medium text-gray-900 ">Desa/Kelurahan</label>
                            <div class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-[#2EB5F8] focus:border-[#2EB5F8] block w-full p-2.5">{{ $data->desa_kelurahan }}</div>
                        </div> 
                    </div>
                    <div class="mb-6">                        
                        <label for="alamat_ktp" class="block mb-2 text-sm font-medium text-gray-900">Alamat sesuai KTP</label>
                        <div class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-[#2EB5F8] focus:border-[#2EB5F8] block w-full p-2.5">{{ $data->alamat_ktp }}</div>
                    </div>
                </div>

                {{-- aduan --}}
                <h2 class="text-2xl font-semibold uppercase mt-10 text-center">Isi Aduan</h2>
                    <div class="flex flex-col items-center">
                        <div class="h-1 w-24 my-6 bg-[#2EB5F8]"></div>
                    </div>
                <div class="mb-6">
                    <label for="judul" class="block mb-2 text-sm font-medium text-gray-900 ">Judul</label>
                    <div class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-[#2EB5F8] focus:border-[#2EB5F8] block w-full p-2.5">{{ $data->judul }}</div>
                </div> 
                <div class="mb-6">                        
                    <label for="deskripsi" class="block mb-2 text-sm font-medium text-gray-900">Deskripsi Aduan</label>
                    <div class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-[#2EB5F8] focus:border-[#2EB5F8] block w-full p-2.5">{{ $data->deskripsi }}</div>
                </div>
                <div class="mb-6">
                    <label class="block mb-2 text-sm font-medium text-gray-900" for="file_input">Upload file pendukung</label>
                    <div class="max-w-xl">
                        <img src="{{ asset('storage/pengaduan/'. $data->file_pendukung) }}" class="rounded-xl" alt="">
                    </div>
                </div>
            </form>        
        @endforeach
    </div>
@endsection
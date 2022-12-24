@extends('admin.master')

@section('content-admin')
<div class="p-5">
    <h1 class="text-2xl font-medium text-black pb-6">Data Pengaduan Masyarakat</h1>
  
    {{-- pagination --}}
    <div class="mb-8 flex justify-center">
        {!! $pengaduanData->links() !!}
    </div>
    <div class="overflow-x-auto relative shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left text-gray-500">
            <thead class="text-xs text-gray-100 uppercase bg-gray-400">
                <tr class="divide-x divide-y">
                    <th scope="col" class="w-16 py-3 px-6">
                        #
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Nama
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Alamat
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Judul
                    </th>
                    <th scope="col" class="w-32 text-center py-3 px-6">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y">
                @foreach ($pengaduanData as $data)
                    <tr class="divide-x">
                        <th class="w-16 py-4 px-6 text-center font-normal text-gray-900 whitespace-nowrap">
                            {{ $data->id }}
                        </th>
                        <td class="py-4 px-6">
                            {{ $data->nama }}
                        </td>
                        <td class="py-4 px-6">
                            {{ $data->alamat_ktp }}
                        </td>
                        <td class="py-4 px-6">
                            {{ $data->judul }}
                        </td>
                        <td class="w-32 text-center py-4 px-6">
                            <a href="{{ url('admin/pengaduan/'. $data->id) }}" class="py-2 px-3 rounded-md text-blue-100 bg-blue-500 hover:bg-blue-600"><i class="fa-solid fa-arrow-up-right-from-square"></i></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    {{-- pagination --}}
    <div class="mt-8 flex justify-center">
        {!! $pengaduanData->links() !!}
    </div>


</div>
@endsection
@extends('admin.master')

@section('content-admin')
<div class="p-5">
    {{-- modal --}}
    <div id="deleteModal" tabindex="-1" class="fixed top-0 left-0 right-0 z-50 hidden p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">
        <div class="relative w-full h-full max-w-md md:h-auto">
            <div class="relative bg-white rounded-lg shadow">
                <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center" data-modal-toggle="deleteModal">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    <span class="sr-only">Close modal</span>
                </button>
                <div class="p-6 text-center">
                    <svg aria-hidden="true" class="mx-auto mb-4 text-gray-400 w-14 h-14" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    <form action="{{ url('admin/pengaduan/hapus-pengaduan') }}" method="POST">
                        @csrf
                        <input type="hidden" name="deleted_id" id="delete_id">
                        <h3 class="mb-5 text-lg font-normal text-gray-500">Apakah Anda yakin ingin menghapus data pengaduan ini?</h3>
                        <button data-modal-toggle="deleteModal" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10">Batal</button>
                        <button type="submit" data-modal-toggle="deleteModal" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center ml-2">
                            Yakin
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <h1 class="text-2xl font-medium text-black pb-6">Data Pengaduan Masyarakat</h1>
    
    {{-- alert data dihapus --}}
    @if ($message = Session::get('success'))
        <div id="alert-success" class="flex p-4 mb-4 mx-3 bg-green-100 rounded-lg" role="alert">
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
    
    {{-- Unduh semua laporan pengaduan --}}
    <div class="my-4">
        <a data-tooltip-target="tooltip-all" data-tooltip-style="light" href="{{ url('unduh-semua') }}" class="py-3 px-5 rounded-md text-white bg-emerald-500 hover:bg-emerald-600">
            Unduh seluruh data <i class="fa-solid fa-circle-down ml-1"></i>
        </a>
    </div>
    <div id="tooltip-all" role="tooltip" class="inline-block absolute invisible z-10 py-2 px-3 text-sm font-medium text-gray-900 bg-white rounded-lg border border-gray-200 shadow-sm opacity-0 tooltip">
        Unduh seluruh data
        <div class="tooltip-arrow" data-popper-arrow></div>
    </div>

    {{-- pagination --}}
    <div class="my-8">
        {!! $pengaduanData->links() !!}
    </div>
    <div class="overflow-x-auto relative shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left text-gray-500">
            <thead class="text-xs text-white uppercase bg-gray-500">
                <tr class="divide-x divide-y">
                    <th scope="col" class="w-16 py-3 px-6">
                        No. Aduan
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
                @if ($pengaduanData->count() < 1)
                    <tr>
                        <td colspan="5" class="py-4 px-6 text-center text-lg">Belum ada postingan berita</td>
                    </tr>
                @else
                    @foreach ($pengaduanData as $data)
                        <tr class="divide-x">
                            <td class="w-16 py-4 px-6 text-center font-normal text-gray-900 whitespace-nowrap">
                                {{ $data->id }}
                            </td>
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
                                <div class="flex items-center space-x-2">
                                    <a href="{{ url('admin/pengaduan/'. $data->id) }}" class="py-2 px-3 rounded-md text-white bg-blue-500 hover:bg-blue-600" data-tooltip-target="tooltip-open" data-tooltip-style="light">
                                        <i class="fa-solid fa-arrow-up-right-from-square"></i>
                                    </a>
                                    <button data-modal-toggle="deleteModal" type="button" value="{{ $data->id }}" class="deleteBtn py-2 px-3 rounded-md text-white bg-red-500 hover:bg-red-600" data-tooltip-target="tooltip-delete" data-tooltip-style="light">
                                        <i class="fa-solid fa-trash"></i>
                                    </button>
                                    <a href="{{ url('admin/pengaduan/unduh/'.$data->id) }}" class="py-2 px-3 rounded-md text-white bg-emerald-500 hover:bg-emerald-600" data-tooltip-target="tooltip-unduh" data-tooltip-style="light">
                                        <i class="fa-solid fa-file-pdf"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
    </div>

    {{-- tooltip action button --}}
    <div id="tooltip-open" role="tooltip" class="inline-block absolute invisible z-10 py-2 px-3 text-sm font-medium text-gray-900 bg-white rounded-lg border border-gray-200 shadow-sm opacity-0 tooltip">
        Buka data pengaduan
        <div class="tooltip-arrow" data-popper-arrow></div>
    </div>
    <div id="tooltip-delete" role="tooltip" class="inline-block absolute invisible z-10 py-2 px-3 text-sm font-medium text-gray-900 bg-white rounded-lg border border-gray-200 shadow-sm opacity-0 tooltip">
        Hapus data pengaduan
        <div class="tooltip-arrow" data-popper-arrow></div>
    </div>
    <div id="tooltip-unduh" role="tooltip" class="inline-block absolute invisible z-10 py-2 px-3 text-sm font-medium text-gray-900 bg-white rounded-lg border border-gray-200 shadow-sm opacity-0 tooltip">
        Unduh data pengaduan
        <div class="tooltip-arrow" data-popper-arrow></div>
    </div>    

    {{-- pagination --}}
    <div class="mt-8">
        {!! $pengaduanData->links() !!}
    </div>


</div>
@endsection

@section('script')
    <script>
        $(document).ready(function() {
            $(document).on('click', '.deleteBtn', function (e) {
                e.preventDefault();

                var d_id = $(this).val();
                $('#delete_id').val(d_id);

                $('#deleteModal').modal('show');
            });
        })
    </script>
@endsection
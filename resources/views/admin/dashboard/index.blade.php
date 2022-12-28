@extends('admin.master')

@section('content-admin')

<div class="p-5">
    <h1 class="text-2xl font-medium text-black pb-6">Dashboard</h1>
    
    <div class="flex gap-5">
        <div class="min-w-[20rem] p-6 flex flex-col items-center gap-3 bg-emerald-100 border border-gray-200 rounded-lg shadow-emerald-300 shadow-md">
            <i class="fa-solid fa-users text-5xl mt-3 text-emerald-600 opacity-40"></i>
            <div>
                <h5 class="mb-2 text-2xl font-semibold tracking-tight text-emerald-800">Total admin</h5>
                <p class="mb-3 text-center font-bold text-4xl text-emerald-600 opacity-60">{{ $admin }}</p>
            </div>
        </div>
        
        <div class="min-w-[20rem] p-6 flex flex-col items-center gap-3 bg-blue-100 border border-gray-200 rounded-lg shadow-blue-300 shadow-md">
            <i class="fa-solid fa-flag text-5xl mt-3 text-blue-600 opacity-40"></i>
            <div>
                <h5 class="mb-2 text-2xl font-semibold tracking-tight text-blue-800">Jumlah pengaduan</h5>
                <p class="mb-3 text-center font-bold text-4xl text-blue-600 opacity-60">{{ $pengaduan }}</p>
            </div>
        </div>

        <div class="min-w-[20rem] p-6 flex flex-col items-center gap-3 bg-yellow-100 border border-gray-200 rounded-lg shadow-yellow-300 shadow-md">
            <i class="fa-solid fa-newspaper text-5xl mt-3 text-yellow-600 opacity-40"></i>
            <div>
                <h5 class="mb-2 text-2xl font-semibold tracking-tight text-yellow-800">Jumlah postingan berita</h5>
                <p class="mb-3 text-center font-bold text-4xl text-yellow-600 opacity-60">-</p>
            </div>
        </div>
    </div>
</div>
@endsection
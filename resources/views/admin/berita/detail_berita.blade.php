@extends('admin.master')

@section('content-admin')
<div class="m-10 w-full max-w-3xl">
    <div class="my-4 space-x-2">
        <a href="{{ route('indexBerita') }}" class="py-3 px-5 text-white rounded-xl bg-blue-500 hover:bg-blue-600">
            <i class="fa-solid fa-arrow-left mr-1"></i> Kembali
        </a>
        @foreach ($dataBerita as $d)
        <a href="{{ url('admin/berita/edit/'.$d->slug) }}" class="py-3 px-5 text-white rounded-xl bg-yellow-500 hover:bg-yellow-600">
            <i class="fa-solid fa-edit mr-1"></i> Edit
        </a>
    </div>
    {{-- list postingan berita --}}
    <div class="mt-8 space-y-3 bg-white shadow-md rounded-lg">
            <div class="p-2 sm:p-4 sm:border sm:border-gray-300 rounded-lg">
                <div class="header-berita space-y-1">
                    <h2 class="text-xl font-bold">{{ $d->judul }}</h2>
                    <p class="author space-x-2 text-gray-400">
                        <span><i class="fa-solid fa-calendar"></i> {{ $d->created_at }}</span>
                        <span><i class="fa-solid fa-user"></i> {{ $d->author }}</span>
                    </p>
                </div>

                <div class="gambar mt-5">
                    <img class="w-full h-auto rounded-md" 
                    src="{{ asset('storage/berita/'.$d->gambar) }}" alt="">
                </div>

                <div class="content mt-3 mb-5 mx-2 text-justify">
                    {!! $d->konten !!}
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
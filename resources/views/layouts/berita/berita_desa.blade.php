@extends('templates.master')

@section('content')
<div class="bg-white">
    <div class="py-3 px-3 sm:py-10 sm:px-16 mx-auto w-full max-w-4xl bg-white">
        <h1 class="text-xl sm:text-3xl mt-4 sm:mt-1 font-bold">Berita terkini</h1>
        <div class="w-24 h-0.5 bg-black mt-2"></div>
        
        {{-- pagination --}}
        <div class="my-5">
            {{ $dataBerita->links() }}
        </div>
    
        {{-- list postingan berita --}}
        <div class="mt-8 space-y-3">
            @foreach ($dataBerita as $d)
                <div class="p-4 border border-gray-300 rounded-lg">
                    <div class="header-berita space-y-1">
                        <h2 class="text-xl font-bold">{{ $d->judul }}</h2>
                        <p class="author space-x-2 text-gray-400">
                            <span><i class="fa-solid fa-calendar"></i> {{ $d->created_at }}</span>
                            <span><i class="fa-solid fa-user"></i> {{ $d->author }}</span>
                        </p>
                    </div>

                    <div class="gambar mt-5">
                        <img class="w-full sm:max-w-md h-auto rounded-md" 
                        src="{{ asset('storage/berita/'.$d->gambar) }}" alt="">
                    </div>

                    <div class="content mt-3 mb-5 mx-2 text-justify line-clamp-5">
                        {!! $d->konten !!}
                    </div>
                    <div class="mb-3">
                        <a href="{{ url('berita-desa/'.$d->slug) }}" class="py-3 px-6 block sm:inline text-center bg-blue-500 hover:bg-blue-600 text-white rounded-md">
                            Selengkapnya <i class="fa-solid fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>

        {{-- pagination --}}
        <div class="my-5">
            {{ $dataBerita->links() }}
        </div>
        
    </div>
</div>
@endsection
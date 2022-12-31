@extends('admin.master')

@section('content-admin')

<div class="m-10">
    <a href="{{ route('indexBerita') }}" class="py-3 px-5 text-white rounded-xl bg-blue-500 hover:bg-blue-600">
        <i class="fa-solid fa-arrow-left mr-1"></i> Kembali
    </a>

    <h1 class="text-2xl font-medium text-black mt-8">Edit Postingan Berita</h1>

    <div class="max-w-full mt-3 p-8 rounded-lg bg-white shadow-lg">
        @foreach ($dataBerita as $d)
        <form action="updating/{{ $d->slug }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="flex flex-row gap-4">
                <div class="max-w-2xl flex flex-col gap-3">
                    <div class="space-y-2 mb-3">
                        <label for="author" class="block font-medium">Uploader</label>
                        @foreach ($adminData as $aD)
                        <input type="hidden" name="author" id="author" value="{{ $aD->name }}"
                        class="py-2 px-3 block w-full rounded-md border-gray-300 bg-gray-50" 
                        placeholder="masukkan judul berita">
                        <div class="py-2 px-3 block w-full text-gray-400 rounded-md border border-gray-300 bg-gray-50">{{ $aD->name }}</div>
                        @endforeach
                    </div>
    
                        <input type="hidden" value="{{ $d->id }}">
                        <input type="hidden" value="{{ $d->slug }}">
                        <div class="space-y-2 mb-3">
                            <label for="judul" class="block font-medium">Judul berita</label>
                            <input type="text" name="judul" id="judul" value="{{ $d->judul }}" 
                            class="py-2 px-3 block w-full rounded-md border-gray-300 bg-gray-50" 
                            placeholder="masukkan judul berita">
                        </div>
    
                        <div class="space-y-2 mb-3">
                            <label for="konten" class="block font-medium">Konten berita</label>
                            <textarea name="konten" id="konten" 
                            class="ckeditor py-2 px-3 block w-full border-gray-300 bg-gray-50" 
                            placeholder="isi konten berita . . .">{!! $d->konten !!}</textarea>
                        </div>
                    @endforeach
                </div>
                
                <div class="w-full flex flex-col gap-3">
                    <div class="space-y-2 mb-3">
                        <label for="gambar" class="block font-medium">Gambar sebelumnya</label>
                        <img class="w-auto h-auto rounded-md" src="{{ asset('storage/berita/'.$d->gambar) }}" alt="">
                    </div>
                    <div class="space-y-2 mb-3">
                        <label for="gambar" class="block font-medium">Gambar baru <span class="text-gray-400 font-normal">(jika perlu)</span></label>
                        <input type="file" name="gambar" id="gambar"
                        class="block w-full text-sm border border-gray-300 rounded-md cursor-pointer bg-gray-50 text-gray-400 focus:outline-none">
                    </div>
                </div>
            </div>
            <button type="submit" class="block w-full p-3 bg-blue-500 hover:bg-blue-600 text-white font-medium rounded-md">Posting</button>
        </form>
    </div>
</div>

@endsection

@section('script')
    <script>
        ClassicEditor
            .create( document.querySelector( '.ckeditor' ), {
                ckfinder: {
                    uploadUrl: '{{ route('ckeditor.upload').'?_token='.csrf_token() }}'
                }
            })
            .catch( error => {
                console.error( error );
            });
    </script>
@endsection
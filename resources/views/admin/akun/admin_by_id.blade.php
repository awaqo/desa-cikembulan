@extends('admin.master')

@section('content-admin')
<div class="p-5 mt-5">
    <a href="{{ route('admin_akun') }}" class="py-2 px-4 bg-blue-500 hover:bg-blue-600 text-white rounded-xl">
        <i class="fa-solid fa-arrow-left mr-2"></i> Kembali
    </a>

    <div class="mt-8 mx-4">
        @foreach ($admin as $d)
        <div class="bg-white px-7 py-10 w-full max-w-sm rounded-xl shadow-lg">
            <form class="space-y-4" action="update/{{ $d->id }}" method="POST">
                <div class="flex justify-between gap-3">
                    <h5 class="text-xl font-bold text-gray-900">Edit Data Admin</h5>
                    <a href="password/{{ $d->id }}" class="text-white focus:ring-2 focus:outline-none font-medium rounded-lg text-sm px-5 py-3 text-center bg-orange-400 hover:bg-orange-500 focus:ring-orange-500">
                        Ubah Password
                    </a>
                </div>
                @csrf
                <input type="hidden" name="id" value="{{ $d->id }}">
                <div>
                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Nama</label>
                    <input type="text" name="name" id="name" value="{{ $d->name }}"
                        class="bg-gray-300 border-gray-200 placeholder-gray-500 text-gray-700 text-sm rounded-lg focus:ring-[#2EB5F8] focus:border-[#2EB5F8] block w-full p-3" 
                        placeholder="nama admin">
                </div>
                <div>
                    <label for="username" class="block mb-2 text-sm font-medium text-gray-900">Username</label>
                    <input type="text" name="username" id="username" value="{{ $d->username }}"
                        class="bg-gray-300 border-gray-200 placeholder-gray-500 text-gray-700 text-sm rounded-lg focus:ring-[#2EB5F8] focus:border-[#2EB5F8] block w-full p-3" 
                        placeholder="username123">
                </div>

                <button type="submit" class="w-full text-white focus:ring-4 focus:outline-none font-medium rounded-lg text-sm px-5 py-3 text-center bg-[#2EB5F8] hover:bg-[#009AE7] focus:ring-[#007fbf]">
                    Update
                </button>
            </form>
        </div>
        @endforeach
    </div>
</div>
@endsection
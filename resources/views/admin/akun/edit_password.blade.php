@extends('admin.master')

@section('content-admin')
<div class="p-5 mt-5">
    @foreach ($data as $d)
    <a href="{{ url('admin/akun/edit/'.$d->id) }}" class="py-2 px-4 bg-blue-500 hover:bg-blue-600 text-white rounded-xl">
        <i class="fa-solid fa-arrow-left mr-2"></i> Kembali
    </a>
    
    <div class="mt-8 mx-4">
        @if ($errors->any())
            <ul id="alert-success" class="flex p-4 mx-3 mb-3 bg-red-100 rounded-lg" role="alert">
                @foreach ($errors->all() as $error)
                <li class="ml-3 text-base text-red-700">
                    {{ $error }}
                </li>
                @endforeach
                <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-red-100 text-red-500 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-200 inline-flex h-8 w-8" data-dismiss-target="#alert-success" aria-label="Close">
                    <span class="sr-only">Close</span>
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </button>
            </ul>
        @endif
        <div class="bg-white px-7 py-10 w-full max-w-sm rounded-xl shadow-lg">
            <form class="space-y-4" action="ubah/{{ $d->id }}" method="POST">
                <div class="flex gap-3">
                    <h5 class="text-xl font-bold text-gray-900">Ubah Password</h5>
                </div>
                @csrf
                <input type="hidden" name="id" value="{{ $d->id }}">
                <div>
                    <label for="current_password" class="block mb-2 text-sm font-medium text-gray-900">Password lama</label>
                    <input type="text" name="current_password" id="current_password"
                        class="bg-gray-300 border-gray-200 placeholder-gray-500 text-gray-700 text-sm rounded-lg focus:ring-[#2EB5F8] focus:border-[#2EB5F8] block w-full p-3" >
                </div>
                <div>
                    <label for="password" class="block mb-2 text-sm font-medium text-gray-900">Password Baru</label>
                    <input type="text" name="password" id="password"
                        class="bg-gray-300 border-gray-200 placeholder-gray-500 text-gray-700 text-sm rounded-lg focus:ring-[#2EB5F8] focus:border-[#2EB5F8] block w-full p-3" >
                </div>
                <div>
                    <label for="password_confirmation" class="block mb-2 text-sm font-medium text-gray-900">Konfirmasi Password</label>
                    <input type="text" name="password_confirmation" id="password_confirmation"
                        class="bg-gray-300 border-gray-200 placeholder-gray-500 text-gray-700 text-sm rounded-lg focus:ring-[#2EB5F8] focus:border-[#2EB5F8] block w-full p-3" >
                </div>
                <div class="flex p-4 mb-4 text-sm text-blue-700 bg-blue-100 rounded-lg" role="alert">
                    <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
                    <span class="sr-only">Info</span>
                    <div>
                      <span class="font-medium">Penting</span>
                        <ul class="mt-1.5 text-blue-700 list-disc list-inside">
                          <li>Password minimal 6 karakter</li>
                          <li>Harap simpan informasi password dengan benar</li>
                      </ul>
                    </div>
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
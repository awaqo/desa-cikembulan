@extends('admin.master')

@section('content-admin')
<div class="w-full max-w-md rounded-lg shadow-md p-8 mx-auto mt-10 bg-gray-800 border-gray-700">
    <form class="space-y-6" action="{{ route('auth.validate_registration') }}" method="POST">
        <a href="{{ route('admin_akun') }}" class="ml-auto text-sm hover:underline text-[#2EB5F8]"><i class="fa-solid fa-arrow-left"></i> Kembali</a>
        <div class="flex gap-3">
            <div class="w-8 h-8">
                <img src="{{ asset('images/logo-bms.png') }}" alt="">
            </div>
            <h5 class="text-xl font-bold text-white">Tambah akun admin</h5>
        </div>
        @csrf
        <div>
            <label for="name" class="block mb-2 text-sm font-medium text-white">Nama</label>
            <input type="text" name="name" id="name" 
                class="bg-gray-600 border-gray-500 placeholder-gray-400 text-white text-sm rounded-lg focus:ring-[#2EB5F8] focus:border-[#2EB5F8] block w-full p-2.5" 
                placeholder="nama admin" required>
            @if ($errors->has('name'))
                <span class="text-xs text-red-500">{{ $errors->first('name') }}</span>
            @endif
        </div>
        <div>
            <label for="username" class="block mb-2 text-sm font-medium text-white">Username</label>
            <input type="text" name="username" id="username" 
                class="bg-gray-600 border-gray-500 placeholder-gray-400 text-white text-sm rounded-lg focus:ring-[#2EB5F8] focus:border-[#2EB5F8] block w-full p-2.5" 
                placeholder="username123" required>
            @if ($errors->has('username'))
                <span class="text-xs text-red-500">{{ $errors->first('username') }}</span>
            @endif
        </div>
        <div>
            <label for="password" class="block mb-2 text-sm font-medium text-white">Password</label>
            <input type="password" name="password" id="password" 
                class="bg-gray-600 border-gray-500 placeholder-gray-400 text-white text-sm rounded-lg focus:ring-[#2EB5F8] focus:border-[#2EB5F8] block w-full p-2.5"
                placeholder="••••••••" required>
            @if ($errors->has('password'))
                <span class="text-xs text-red-500">{{ $errors->first('password') }}</span>
            @endif
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
            Tambah Admin
        </button>
    </form>
</div>
@endsection
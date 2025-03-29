@extends('layout')

@section('konten')
<div class="container mx-auto flex justify-center mt-44">
<div class="w-full max-w-md bg-white p-8 rounded-lg shadow-md">
    <h2 class="text-2xl font-semibold text-center text-gray-700">Login</h2>
    <form class="mt-6" action="{{ route('login.submit') }}" method="POST">
        @csrf
        <div>
            <label class="block text-sm font-medium text-gray-700">Email</label>
            <input type="email" name="email" placeholder="Masukkan email" class="w-full px-4 py-2 mt-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
        </div>
        <div class="mt-4">
            <label class="block text-sm font-medium text-gray-700">Password</label>
            <input type="text" name="password" placeholder="Masukkan password" class="w-full px-4 py-2 mt-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
        </div>
        <button type="submit" class="w-full mt-6 bg-blue-500 text-white py-2 rounded-lg hover:bg-blue-600 transition">Login</button>
    </form>
    <p class="mt-4 text-sm text-center text-gray-600">Belum punya akun? <a href="{{ route('registrasi.tampil') }}" class="text-blue-500 hover:underline">registrasi</a></p>
    @if (session('gagal'))
        <p class="text-red-500">{{ session('gagal') }}</p>
        
    @endif
</div>
</div>
@endsection
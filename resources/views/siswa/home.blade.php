@extends('layout')

@section('konten')
<div class="min-h-screen bg-gray-100">
    <!-- Navbar -->
    <nav class="bg-white shadow-md py-4">
        <div class="container mx-auto flex justify-between items-center px-6">
            <a href="#" class="text-2xl font-bold text-blue-600">MyWebsite</a>
            <div>
                <a href="{{ route('login.tampil') }}" class="text-gray-700 px-4 font-bold">Login</a>
               
            </div>
        </div>
    </nav>
    
    <!-- Hero Section -->
    <section class="bg-blue-500 text-white py-20 text-center">
        <div class="container mx-auto">
            <h1 class="text-4xl font-bold">Selamat Datang di Website Kami</h1>
            <p class="mt-4 text-lg">Tempat terbaik untuk menemukan informasi dan layanan terbaik.</p>
            <a href="#" class="mt-6 inline-block bg-white text-blue-500 px-6 py-3 rounded-lg font-semibold hover:bg-gray-200 transition">Pelajari Lebih Lanjut</a>
        </div>
    </section>
    
    <!-- Section Content -->
    <section class="py-16 container mx-auto px-6">
        <h2 class="text-3xl font-semibold text-center text-gray-800">Layanan Kami</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-8">
            <div class="bg-white p-6 shadow-md rounded-lg text-center">
                <h3 class="text-xl font-semibold">Layanan 1</h3>
                <p class="mt-2 text-gray-600">Deskripsi singkat tentang layanan pertama.</p>
            </div>
            <div class="bg-white p-6 shadow-md rounded-lg text-center">
                <h3 class="text-xl font-semibold">Layanan 2</h3>
                <p class="mt-2 text-gray-600">Deskripsi singkat tentang layanan kedua.</p>
            </div>
            <div class="bg-white p-6 shadow-md rounded-lg text-center">
                <h3 class="text-xl font-semibold">Layanan 3</h3>
                <p class="mt-2 text-gray-600">Deskripsi singkat tentang layanan ketiga.</p>
            </div>
        </div>
    </section>
</div>
@endsection
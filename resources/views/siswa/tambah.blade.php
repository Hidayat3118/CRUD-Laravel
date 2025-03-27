@extends('layout')

@section('konten')
    <div class="max-w-lg bg-white shadow-lg rounded-xl mx-auto p-8 mt-10">
        <h1 class="text-2xl font-bold text-gray-800 text-center mb-6">Tambah Siswa</h1>
        <form action="{{ route('siswa.submit') }}" class="space-y-4" method="POST">
            @csrf
            <div>
                <label for="nis" class="block text-gray-600 font-medium">NIS</label>
                <input type="number" id="nis" name="nis" placeholder="Masukkan NIS" class="w-full p-3 border rounded-lg focus:ring-2 focus:ring-blue-400">
            </div>
            <div>
                <label for="nama" class="block text-gray-600 font-medium">Nama</label>
                <input type="text" id="nama" name="nama" placeholder="Masukkan Nama" class="w-full p-3 border rounded-lg focus:ring-2 focus:ring-blue-400">
            </div>
            <div>
                <label for="alamat" class="block text-gray-600 font-medium">Alamat</label>
                <input type="text" id="alamat" name="alamat" placeholder="Masukkan Alamat" class="w-full p-3 border rounded-lg focus:ring-2 focus:ring-blue-400">
            </div>
            <div>
                <label for="no_hp" class="block text-gray-600 font-medium">No HP</label>
                <input type="tel" id="no_hp" name="no_hp" placeholder="Masukkan No HP" class="w-full p-3 border rounded-lg focus:ring-2 focus:ring-blue-400">
            </div>
            <div>
                <label for="jenis_kelamin" class="block text-gray-600 font-medium">Jenis Kelamin</label>
                <select id="jenis_kelamin" name="jenis_kelamin" class="w-full p-3 border rounded-lg focus:ring-2 focus:ring-blue-400">
                    <option value="">Pilih Jenis Kelamin</option>
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div>
            <div>
                <label for="hobi" class="block text-gray-600 font-medium">Hobi</label>
                <input type="text" id="hobi" name="hobi" placeholder="Masukkan Hobi" class="w-full p-3 border rounded-lg focus:ring-2 focus:ring-blue-400">
            </div>
            <div class="text-center">
                <button class="bg-blue-500 hover:bg-blue-600 py-3 px-6 rounded-lg text-white font-bold text-lg transition duration-300">
                    Tambahkan
                </button>
            </div>
        </form>
        
    </div>
@endsection

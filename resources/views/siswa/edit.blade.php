@extends('layout')

@section('konten')
    <div class="max-w-lg bg-white shadow-lg rounded-xl mx-auto p-8 mt-10">
        <h1 class="text-2xl font-bold text-gray-800 text-center mb-6">Tambah Siswa</h1>
        <form action="{{ route('siswa.update', $siswa->id) }}" class="space-y-4" method="POST">
            @csrf
            <div>
                <label for="nis" class="block text-gray-600 font-medium">NIS</label>
                <input type="number" id="nis" value="{{ $siswa->nis }}" name="nis" placeholder="Masukkan NIS" class="w-full p-3 border rounded-lg focus:ring-2 focus:ring-blue-400">
            </div>
            <div>
                <label for="nama" class="block text-gray-600 font-medium">Nama</label>
                <input type="text" id="nama" value="{{ $siswa->nama }}" name="nama" placeholder="Masukkan Nama" class="w-full p-3 border rounded-lg focus:ring-2 focus:ring-blue-400">
            </div>
            <div>
                <label for="alamat" class="block text-gray-600 font-medium">Alamat</label>
                <input type="text" id="alamat" value="{{ $siswa->alamat }}" name="alamat" placeholder="Masukkan Alamat" class="w-full p-3 border rounded-lg focus:ring-2 focus:ring-blue-400">
            </div>
            <div>
                <label for="no_hp" class="block text-gray-600 font-medium">No HP</label>
                <input type="tel" id="no_hp" value="{{ $siswa->no_hp }}" name="no_hp" placeholder="Masukkan No HP" class="w-full p-3 border rounded-lg focus:ring-2 focus:ring-blue-400">
            </div>
            <div>
                <label for="jenis_kelamin" class="block text-gray-600 font-medium">Jenis Kelamin</label>
                <select id="jenis_kelamin" name="jenis_kelamin" class="w-full p-3 border rounded-lg focus:ring-2 focus:ring-blue-400">
                    <option value="">Pilih Jenis Kelamin</option>
                    <option value="Laki-laki" {{ $siswa->jenis_kelamin == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                    <option value="Perempuan" {{ $siswa->jenis_kelamin == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                </select>
            </div>
            
            <div>
                <label for="hobi" class="block text-gray-600 font-medium">Hobi</label>
                <input type="text" id="hobi" value="{{ $siswa->hobi }}" name="hobi" placeholder="Masukkan Hobi" class="w-full p-3 border rounded-lg focus:ring-2 focus:ring-blue-400">
            </div>
            <div class="text-center">
                <button class="bg-blue-500 hover:bg-blue-600 py-3 px-6 rounded-lg text-white font-bold text-lg transition duration-300">
                    Edit
                </button>
            </div>
        </form>
        
    </div>
@endsection

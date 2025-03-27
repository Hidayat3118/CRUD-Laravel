@extends('layout')

@section('konten')
    <div class="container mx-auto mt-32">
        <div class="bg-green-500 w-32 rounded-xl py-3 text-center font-bold text-white hover:bg-green-600 cursor-pointer">
            <a href="{{ route('siswa.tambah') }}">Tambahkan</a>
        </div>
        <div class="container mx-auto p-6">
            <div class="overflow-x-auto">
                <table class="min-w-full bg-white border border-gray-300 rounded-xl shadow-md">
                    <thead class="bg-gray-100">
                        <tr>
                            <th class="py-3 px-6 text-center border-b border-gray-300">No</th>
                            <th class="py-3 px-6 text-center border-b border-gray-300">Nis</th>
                            <th class="py-3 px-6 text-center border-b border-gray-300">Nama</th>
                            <th class="py-3 px-6 text-center border-b border-gray-300">alamat</th>
                            <th class="py-3 px-6 text-center border-b border-gray-300">No Hp</th>
                            <th class="py-3 px-6 text-center border-b border-gray-300">Jenis Kelamin</th>
                            <th class="py-3 px-6 text-center border-b border-gray-300">Hobi</th>
                            <th class="py-3 px-6 text-center border-b border-gray-300">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($siswa as $no => $data)
                            <tr class="border-b border-gray-300 hover:bg-gray-100">
                                <td class="py-3 px-6 text-center">{{ $no + 1 }}</td>
                                <td class="py-3 px-6 text-center">{{ $data->nis }}</td>
                                <td class="py-3 px-6 text-center">{{ $data->nama }}</td>
                                <td class="py-3 px-6 text-center">{{ $data->alamat }}</td>
                                <td class="py-3 px-6 text-center">{{ $data->no_hp }}</td>
                                <td class="py-3 px-6 text-center">{{ $data->jenis_kelamin }}</td>
                                <td class="py-3 px-6 text-center">{{ $data->hobi }}</td>
                                <td class="py-3 px-6 text-center">
                                    <div class="flex justify-center gap-4">
                                        {{-- Hapus --}}
                                        <form action="{{ route('siswa.delete', $data->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" id="button"
                                                class="bg-red-500 w-32 rounded-xl py-3 text-center font-bold text-white hover:bg-red-700 cursor-pointer">
                                                <i class="fa-solid fa-trash"></i>
                                            </button>
                                        </form>
                                        {{-- Edit --}}
                                        <a href="{{ route('siswa.edit', $data->id) }}"
                                            class="bg-yellow-500 w-32 rounded-xl py-3 text-center font-bold text-white hover:bg-yellow-600 cursor-pointer">
                                            <i class="fa-solid fa-pen-to-square"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>

    <script src="../js/tampil.js"></script>
@endsection

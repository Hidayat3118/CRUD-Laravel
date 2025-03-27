@extends('layout')

@section('konten')
    <div class="container mx-auto mt-32">
        <div class="container mx-auto p-6">
            <div class="overflow-x-auto">
                <table class="min-w-full bg-white border border-gray-200 rounded-lg shadow-md">
                    <thead class="bg-gray-100">
                        <tr>
                            <th class="py-3 px-6 text-left border-b">No</th>
                            <th class="py-3 px-6 text-left border-b">Nis</th>
                            <th class="py-3 px-6 text-left border-b">Nama</th>
                            <th class="py-3 px-6 text-left border-b">alamat</th>
                            <th class="py-3 px-6 text-left border-b">No Hp</th>
                            <th class="py-3 px-6 text-left border-b">Jenis Kelamin</th>
                            <th class="py-3 px-6 text-left border-b">Hobi</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- <tr class="border-b hover:bg-gray-50">
                            <td class="py-3 px-6">1</td>
                            <td class="py-3 px-6">John Doe</td>
                            <td class="py-3 px-6">johndoe@example.com</td>
                            <td class="py-3 px-6 text-green-600">Active</td>
                        </tr>
                        <tr class="border-b hover:bg-gray-50">
                            <td class="py-3 px-6">2</td>
                            <td class="py-3 px-6">Jane Smith</td>
                            <td class="py-3 px-6">janesmith@example.com</td>
                            <td class="py-3 px-6 text-red-600">Inactive</td>
                        </tr>
                        <tr class="border-b hover:bg-gray-50">
                            <td class="py-3 px-6">3</td>
                            <td class="py-3 px-6">Michael Johnson</td>
                            <td class="py-3 px-6">michael@example.com</td>
                            <td class="py-3 px-6 text-green-600">Active</td>
                        </tr> --}}
                    </tbody>
                </table>
            </div>
        </div>
        
    </div>
@endsection 
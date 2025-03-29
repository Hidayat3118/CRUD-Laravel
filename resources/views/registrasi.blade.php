@extends('layout')

@section('konten')
    <div class="container mx-auto mt-48">
        
            <div class="flex justify-center">
                <div class="w-full max-w-md p-8 space-y-6 bg-gray-100 shadow-lg rounded-xl">
                    <h2 class="text-2xl font-bold text-center text-gray-700">Register</h2>

                    <form action="{{ route('registrasi.submit') }}"  method="POST" class="space-y-4">
                        @csrf
                        <div>
                            <label for="name" class="block text-gray-600 font-medium">Nama</label>
                            <input type="text" id="name" name="name" class="w-full p-3 border rounded-lg focus:ring-2 focus:ring-blue-400" required>
                        </div>
                        <div>
                            <label for="email" class="block text-gray-600 font-medium">Email</label>
                            <input type="email" id="email" name="email" class="w-full p-3 border rounded-lg focus:ring-2 focus:ring-blue-400" required>
                        </div>
                        <div>
                            <label for="password" class="block text-gray-600 font-medium">Password</label>
                            <input type="text" id="password" name="password" class="w-full p-3 border rounded-lg focus:ring-2 focus:ring-blue-400" required>
                        </div>
                        <button type="submit" class="w-full bg-blue-600 text-white py-3 rounded-lg hover:bg-blue-700">Daftar</button>
                    </form>
                    
                    <p class="text-center text-gray-600">Sudah punya akun? <a class="text-blue-500 hover:underline">Login</a></p>
                </div>
            </div>
       
    </div>
@endsection

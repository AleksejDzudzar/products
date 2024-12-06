@extends('layout.app')

@section('title', 'Login')

@section('content')
    <div class="min-h-screen flex items-center justify-center bg-gray-100">
        <div class="bg-white shadow-lg rounded-lg p-8 w-full max-w-md">
            <h2 class="text-2xl font-semibold text-center text-blue-600 mb-6">Register</h2>
            <form method="POST" action="/register" class="space-y-4">
                @csrf
                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                    <input
                        type="name"
                        id="name"
                        name="name"
                        class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 text-gray-700"
                        value="{{ old('name') }}"
                        required>
                    @error('name')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div><div>
                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                    <input
                        type="email"
                        id="email"
                        name="email"
                        class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 text-gray-700"
                        value="{{ old('email') }}"
                        required>
                    @error('email')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                    <input
                        type="password"
                        id="password"
                        name="password"
                        class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 text-gray-700"
                        required>
                    @error('password')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Potvrdi lozinku -->
                <div>
                    <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Password</label>
                    <input
                        type="password"
                        id="password_confirmation"
                        name="password_confirmation"
                        class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 text-gray-700"
                        required>
                </div>

                <div>
                    <button
                        type="submit"
                        class="w-full bg-blue-600 text-white py-2 px-4 rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                        Login
                    </button>
                </div>

            </form>


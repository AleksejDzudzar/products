@extends('layout.app')
@section('title','Newsletters')
@section('content')
    <x-sidebar/>
    <div class="container mx-auto mt-10">
        <div class="bg-white shadow-md rounded p-4">
            <h2 class="text-xl font-semibold text-blue-800 mb-4">Edit Newsletters</h2>

            <div class="space-y-4">
                @foreach ($user as $user)
                    <div class="bg-gray-100 shadow rounded p-4 flex justify-between items-center w-full">
                        <div>
                            <p class="text-sm text-gray-600 font-semibold">Email:</p>
                            <p class="text-lg text-blue-800 font-bold">{{ $user->email }}</p>
                        </div>
                        <div>
                            <p class="text-sm text-gray-600 font-semibold">Date:</p>
                            <p class="text-lg text-gray-800">{{ $user->created_at->format('d.m.Y') }}</p>
                        </div>
                        <div>
                            <form method="POST" action="">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-primary btn-sm">
                                    <i class="fas fa-trash-alt"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection

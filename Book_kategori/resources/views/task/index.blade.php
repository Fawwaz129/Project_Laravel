@extends('layouts.app')
@section('main')
<div class="min-h-[100vh] bg-blue-500 w-full">
    <div class="flex">
    <a href="{{url("/tasks/create")}}" class="btn bg-blue-800 px-7 mt-10 rounded-full ml-3 text-white font-semibold py-3">Add</a>
</div>
    <div class="container flex-wrap w-full items-center min-h-min gap-5 py-44 flex justify-evenly m-auto"> 
@foreach ($data as $item)

<div class="w-[400px] bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
    <div class="p-5">
        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $item->book_name }}</h5>
        <h5 class="mb-3 font-semibold text-gray-700 dark:text-gray-400">Nama Buku : {{ $item->book_name }}</h5>
        <h5 class="mb-3 font-semibold text-gray-700 dark:text-gray-400">Rate Buku : {{ $item->rate_book }}</h5>   
        <h5 class="mb-3 font-semibold text-gray-700 dark:text-gray-400">Pengarang Buku : {{ $item->pengarang_book }}</h5>   
        <form method="POST" action="{{ url("/tasks/$item->id") }}">
            @csrf
            @method('DELETE')
        <a href="{{ url("/tasks/$item->id/edit") }}" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-green-700 rounded-lg hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Edit</a>
        <button class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-orange-700 rounded-lg hover:bg-orange-800 focus:ring-4 focus:outline-none focus:ring-orange-300 dark:bg-orange-600 dark:hover:bg-orange-700 dark:focus:ring-orange-800">Remove</button>
    </form>
    </div>
</div>
    
@endforeach
@endsection
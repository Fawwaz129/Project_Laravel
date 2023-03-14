@extends('layouts.app')
@section('main')
<div class="min-h-[100vh] bg-blue-500 w-full">
    <div class="container flex-wrap w-full items-center min-h-min gap-3 py-44 flex justify-evenly m-auto"> 
@foreach ($data as $item)
<div class="w-[400px] bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
    <div class="p-5">
        <h5 class="mb-3 font-semibold text-gray-700 dark:text-gray-400"> Username : {{ $item->name }}</h5>
        <h5 class="mb-3 font-semibold text-gray-700 dark:text-gray-400">Email : {{ $item->email }}</h5>   
        <h5 class="mb-3 font-semibold text-gray-700 dark:text-gray-400">role : {{ $item->role }}</h5>   
    </div>
</div>
    
@endforeach
@endsection
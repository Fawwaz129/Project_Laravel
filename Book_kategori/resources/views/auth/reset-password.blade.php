@extends('layouts.app')
@section('main')
{{-- https://bit.ly/mastering-task-form --}}
<div class="w-full h-[100vh] flex justify-center items-center">
    <div class="w-full max-w-xs">
        <form action="{{ route('password.update') }}" method="POST" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            @csrf
            <input type="hidden" name="token" value="{{ $request->route('token')}}">
          <div class="mb-6">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="">
              Email
            </label>
            <input class="shadow appearance-none border border-red-500 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" name="email" type="email" value="{{ old('email', $request->email) }}">
          </div>
          <div class="mb-6">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="">
              Password
            </label>
            <input class="shadow appearance-none border border-red-500 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" name="password" type="password" value="{{old('password')}}">
          </div>
          <div class="mb-6">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="">
                Confirm Password
            </label>
            <input class="shadow appearance-none border border-red-500 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" name="password_confirmation" type="password">
          </div>
          <div class="flex items-center justify-between">
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                Reset Password
            </button>
          </div>
        </form>
      </div>
    </div>
@endsection
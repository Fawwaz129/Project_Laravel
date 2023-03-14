@extends('layouts.app')
@section('main')
{{-- https://bit.ly/mastering-task-form --}}
<div class="flex items-center justify-center w-full h-[100vh]">
<div class="w-full max-w-xs">
    <form action="{{ url('/tasks') }}" method="POST" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
        @csrf
      <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="">
          Nama Buku
        </label>
        <input name="book_name" type="text" class="shadow form-control appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outlin" value="{{ old('book_name') }}">
        @error('book_name')
        <span class="text-xs text-orange-500">
            {{ $message }}
        </span>
         @enderror
      </div>
      <div class="mb-6">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="">
            Rate Buku
          </label>
          <input name="rate_book" type="text" class="shadow form-control appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outlin" value="{{ old('rate_book') }}">
          @error('rate_book')
          <span class="text-xs text-orange-500">
              {{ $message }}
          </span>
           @enderror
      </div>
      <div class="mb-6">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="">
            Pengarang Buku
          </label>
          <input name="pengarang_book" type="text" class="shadow form-control appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outlin" value="{{ old('pengarang_book') }}">
          @error('pengarang_book')
          <span class="text-xs text-orange-500">
              {{ $message }}
          </span>
           @enderror
      </div>
      <div class="flex items-center justify-between">
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
          Submit
        </button>
      </div>
    </form>
    <p class="text-center text-gray-500 text-xs">
      &copy;2020 Acme Corp. All rights reserved.
    </p>
  </div>
</div>
@endsection
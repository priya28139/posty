@extends('layouts.app')
@section('content')
<div class="flex justify-center">
    <div class="w-10/12 bg-white p-6 rounded-lg">
        <div>
            <h2 class="text-center text-3xl text-gray-900">
                Make your post!
            </h2>
            <p class="mt-2 text-center text-sm text-gray-600">
                THE
                <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500">
                    world is waiting for it :)))
                </a>
            </p>
        </div>
        <form class="mt-4 space-y-6" action="{{ route('posts') }}" method="POST">
            @csrf
            <div class="rounded-md shadow-sm -space-y-px">

                <!-- title -->
                <div>
                    <label for="title" class="sr-only">Title</label>
                    <input id="title" name="title" type="text" class="appearance-none rounded-none relative block w-full px-3 py-3 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm mb-2 @error('title') border-red-500 @enderror" placeholder="Title" value="{{ old('title') }}">
                    @error('title')
                    <div class="text-red-500 mb-2 text-xs">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <!-- body -->
                <div>
                    <label for="body" class="sr-only">Body</label>
                    <textarea id="body" name="body" class="appearance-none rounded-none relative block w-full h-full px-3 py-3 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm mb-2 @error('body') border-red-500 @enderror" placeholder="Post something great! Make it memorable x" style="height: 150px;"></textarea>
                    @error('body')
                    <div class="text-red-500 mb-2 text-xs">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
            </div>
            <div>
                <button type="submit" class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 mb-2 -mt-2">
                    <span class="absolute left-0 inset-y-0 flex items-center pl-3">
                        <!-- Heroicon name: solid/lock-closed -->
                        <svg class="h-5 w-5 text-indigo-500 group-hover:text-indigo-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd" />
                        </svg>
                    </span>
                    LET'S GO!
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
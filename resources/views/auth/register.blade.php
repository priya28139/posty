@extends('layouts.app')
@section('content')
<div class="flex justify-center">
    <div class="w-5/12 bg-white p-6 rounded-lg">
        <div>
            <img class="mx-auto h-12 w-auto" src="https://tailwindui.com/img/logos/workflow-mark-indigo-600.svg" alt="Workflow">
            <h2 class="mt-6 text-center text-3xl text-gray-900">
                Register with us!
            </h2>
            <p class="mt-2 text-center text-sm text-gray-600">
                WE
                <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500">
                    can't wait for YOU to start x
                </a>
            </p>
        </div>
        <form class="mt-8 space-y-6" action="{{ route('register') }}" method="POST">
            @csrf
            <input type="hidden" name="remember" value="true">
            <div class="rounded-md shadow-sm -space-y-px">
                <!-- name -->
                <div>
                    <label for="name" class="sr-only">Name</label>
                    <input id="name" name="name" type="text" class="appearance-none rounded-none relative block w-full px-3 py-3 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm mb-2 @error('name') border-red-500 @enderror" placeholder="Name" value="{{ old('name') }}">
                    @error('name')
                    <div class="text-red-500 mb-2 text-xs">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <!-- username -->
                <div>
                    <label for="username" class="sr-only">Username</label>
                    <input id="username" name="username" type="text" class="appearance-none rounded-none relative block w-full px-3 py-3 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm mb-2 @error('username') border-red-500 @enderror" placeholder="Username" value="{{ old('username') }}">
                    @error('username')
                    <div class="text-red-500 mb-2 text-xs">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <!-- email -->
                <div>
                    <label for="email" class="sr-only">Email</label>
                    <input id="email" name="email" type="email" class="appearance-none rounded-none relative block w-full px-3 py-3 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm mb-2 @error('email') border-red-500 @enderror" placeholder="Email" value="{{ old('email') }}">
                    @error('email')
                    <div class="text-red-500 mb-2 text-xs">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <!-- password -->
                <div>
                    <label for="password" class="sr-only">Password</label>
                    <input id="password" name="password" type="password" class="appearance-none rounded-none relative block w-full px-3 py-3 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm mb-2 @error('password') border-red-500 @enderror" placeholder="Password">
                    @error('password')
                    <div class="text-red-500 mb-2 text-xs">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <!-- password -->
                <div>
                    <label for="password_confirmation" class="sr-only">Confirm password</label>
                    <input id="password_confirmation" name="password_confirmation" type="password" class="appearance-none rounded-none relative block w-full px-3 py-3 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-b-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm @error('password_confirmation') border-red-500 @enderror" placeholder="Confirm password">
                    @error('password_confirmation')
                    <div class="text-red-500 mb-2 text-xs">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
            </div>

            <div class="flex items-center justify-between">
                <div class="flex items-center">
                    <input id="remember_me" name="remember_me" type="checkbox" class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded">
                    <label for="remember_me" class="ml-2 block text-sm text-gray-900">
                        Remember me
                    </label>
                </div>

                <div class="text-sm">
                    <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500">
                        Already a user? Login here.
                    </a>
                </div>
            </div>

            <div>
                <button type="submit" class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 mb-2">
                    <span class="absolute left-0 inset-y-0 flex items-center pl-3">
                        <!-- Heroicon name: solid/lock-closed -->
                        <svg class="h-5 w-5 text-indigo-500 group-hover:text-indigo-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd" />
                        </svg>
                    </span>
                    I'M IN!
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
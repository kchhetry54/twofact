@extends('layouts.app')

@section('title', 'Two Factor Authentication')


@section('content')

    <div
        class="min-h-screen bg-gray-50 flex flex-col justify-center py-12 sm:px-6 lg:px-8"
        >
        <x-alert/>

        <div class="sm:mx-auto sm:w-full sm:max-w-md">
            <div class="flex items-center justify-center">
                <a href="/">
                </a>
            </div>

            <h2
                class="mt-6 text-center text-3xl leading-9 font-extrabold text-gray-900 mb-4"
            >
                Two Factor Authentication
            </h2>
            <p class="text-center text-gray-700">Please enter your 2FA Key from your Authenticator.</p>
        </div>
        <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
            <div class="bg-white py-8 px-4 shadow sm:rounded-lg sm:px-10">
                <form action="/two-factor-challenge" method="post" >
                @csrf

                <x-input
                    field="code"
                    text="2FA Code"
                    type="text"
                />

                <div class="mt-6">
                    <span class="block w-full rounded-md shadow-sm">
                    <button
                        name="button"
                        type="submit"
                        class="w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition duration-150 ease-in-out"
                    >
                        Confirm
                    </button>
                    </span>
                </div>
                </form>
                <div class="mt-6">
                    <div class="relative">
                        <div class="absolute inset-0 flex items-center">
                        <div class="w-full border-t border-gray-300"></div>
                        </div>
                        <div class="relative flex justify-center text-sm leading-5">
                        <span class="px-2 bg-white text-gray-500">
                            Or
                        </span>
                        </div>
                    </div>
                    <div class="mt-6">
                        <div>
                        <span class="w-full inline-flex rounded-md shadow-sm">
                            <a
                            class="w-full inline-flex justify-center py-2 px-4 border border-gray-300 rounded-md bg-white text-sm leading-5 font-medium text-gray-500 hover:text-gray-400 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue transition duration-150 ease-in-out"
                            href="{{ route('logout') }}"
                            >
                            Cancel and Logout
                            </a>
                        </span>
                        </div>
                    </div>
                </div>
        </div>
        </div>
    </div>

@endsection
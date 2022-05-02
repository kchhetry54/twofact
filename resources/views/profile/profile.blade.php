@extends('layouts.app')

@section('title', 'Profile')

@section('content')
<div class="container my-5 bg-secondary py-5 py-3 text-white">
    <x-alert/>
    <div class="flex p-8">
        <div class="w-full md:w-1/2">
            <h3 class="text-lg">Update Profile</h3>
        </div>
        <div class="w-full md:w-1/2">
            {{-- @if($user->media_id)
                <div class="mb-4">
                    <div class="m-3">
                        <img src="{{ $user->photo }}" alt="" class="inline-block h-16 w-16 rounded-full">
                    </div>

                    <a class="text-xs bg-gray-50 border border-gray-300 rounded-md shadow-sm px-3 py-2" href="{{ route('profile.clear') }}">
                        Clear Image
                    </a>
                </div>
            @endif --}}

            <form action="{{ route('profile.update') }}" enctype="multipart/form-data" method="post">
                @csrf

                <x-input
                    field="name"
                    text="Name"
                    :required="true"
                    :current="$user->name"
                />

                <x-input
                    field="email"
                    text="Email Address"
                    :required="true"
                    :current="$user->email"
                />



                <div class="mt-2">
                    <x-button type="submit">
                        Save
                    </x-button>
                </div>
            </form>
        </div>
    </div>

    <div class="flex p-8">
        <div class="w-full md:w-1/2">
            <h3 class="text-lg">Update Password</h3>
        </div>
        <div class="w-full md:w-1/2">
            <form action="{{ route('profile.password') }}" method="post">
                @csrf

                <x-input
                    type="password"
                    field="current_password"
                    text="Current Password"
                    :required="true"
                />

                <x-input
                    type="password"
                    field="password"
                    text="New Password"
                    :required="true"
                />

                <x-input
                    type="password"
                    field="password_confirmation"
                    text="Confirm New Password"
                    :required="true"
                />

                <div class="mt-4">
                    <x-button type="submit">
                        Save
                    </x-button>
                </div>

            </form>
        </div>
    </div>

</div>
@endsection

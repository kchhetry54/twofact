@extends('layouts.app')

@section('title', 'Two_fact_auth')



@section('content')
<div class="flex p-8 container bg-secondary py-5 my-5">
    <x-alert/>

    <div class="w-full  md:w-1/2">
        <h3 class="text-lg">Two Factor Authentication</h3>
    </div>
    <div class="w-full md:w-1/2">
        @if (session('status') == 'two-factor-authentication-enabled')
            <div class="mb-4 font-medium text-sm text-green-600">
                Two factor authentication has been enabled.
            </div>
        @endif

        @if(empty(auth()->user()->two_factor_secret))
            <form action="/user/two-factor-authentication" method="post">
                @csrf

                <x-button type="submit">
                    Enable 2-Factor Authentication
                </x-button>
            </form>
        @else

       <div class="mb-3">
            {!! $user->twoFactorQrCodeSvg() !!}
       </div>

       <h3 class="text-gray-700 font-semibold mb-3">Recovery Codes</h3>
       <div class="font-mono p-3 bg-gray-100 text-gray-700 mb-3">
           @foreach($user->recoveryCodes() as $code)
            {{ $code }}
           @endforeach
        </div>

        <form action="/user/two-factor-authentication" method="post">
            @csrf @method('DELETE')
            <x-button  type="submit">
                Disable 2-Factor Authentication
            </x-button>
        </form>

        @endif

    </div>
</div>

@endsection


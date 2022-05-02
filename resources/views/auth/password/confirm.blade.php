@extends('layouts.auth')

@section('title', 'Confirm Password')
@section('css')
    <style>
        h2{
            font-weight: 600;
            
          }
    </style>
@endsection

@section('content')
<div class="mask d-flex align-items-center py-4 gradient-custom-3" style="flex:1">
  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-9 col-lg-7 col-xl-6 ">
        <div class="card auth-card " style="border-radius: 15px;">
          <div class="card-body p-5 ">
            <x-alert/>

            <div class="sm:mx-auto sm:w-full sm:max-w-md">
                <h2
                  class="mt-6 text-center text-3xl leading-9 font-extrabold text-gray-900 mb-4"
                >
                  Confirm Password
                </h2>
                <p class="text-center text-gray-700 mb-5">This action requires you to confirm your password! Please enter your current password!</p>
              </div>
            <form action="{{ route('password.confirm') }}" name="RegForm" onsubmit="return FormVal()" method="POST">
              @csrf

              <x-input
              field="password"
              text="Password"
              type="password"
              :required="true"
          />

              <div class="d-flex justify-content-center text-white">
                <button type="submit"
                  class="btn btn-success form-control btn-block btn-lg gradient-custom-4 text-body">Confirm</button>
              </div>

            </form>
            <div class="text-center mt-3">
                <span class="btn btn-link">
                    Or
                </span>
              </div>
            
            <form action="{{ route('home') }}" method="get">
                <div class="d-flex justify-content-center mt-4 text-white">
                    <button type="submit"
                      class="btn btn-success form-control btn-block btn-lg gradient-custom-4 text-body">Cancel</button>
                  </div>
            </form>
              <div class="text-center mt-5">
                <a class="btn btn-link" href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }} {{--}} For language change{{--}}
                </a>
              </div> 

          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection



@extends('layouts.auth')

@section('title', 'Login')
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

            <h2 class="text-uppercase text-center mb-5 ">Login Form</h2>

            <form action="{{ route('login') }}" name="RegForm" onsubmit="return FormVal()" method="POST">
              @csrf

              <div class="form-outline mb-4">
                <span class="text-danger">@error('email') {{ $message }} @enderror</span>
                <input type="email" id="email" name="email" class="form-control form-control-lg" placeholder="Your Email"/>
              </div>

              <div class="form-outline mb-4">
                <span class="text-danger">@error('password') {{ $message }} @enderror</span>
                <input type="password" id="password" name="password" class="form-control form-control-lg" placeholder="password"/>
              </div>

              <div class="d-flex justify-content-center text-white">
                <button type="submit"
                  class="btn btn-success form-control btn-block btn-lg gradient-custom-4 text-body">Login</button>
              </div>


              <div class="text-center mt-5">
                @if (Route::has('password.request'))
                <a class="btn btn-link" href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }} {{--}} For language change{{--}}
                </a>
              @endif
              </div>
              <p class="text-center text-muted mt-3 mb-0">doesn't have an account? <a href="{{ route('register') }}"
                  class="fw-bold text-body"><u>Register here</u></a></p>

            </form>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection



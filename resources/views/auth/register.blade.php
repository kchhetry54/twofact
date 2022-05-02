@extends('layouts.auth')

@section('title', 'Register')

@section('css')
    <style>
        h2{
            font-weight: 600;
            
          }
    </style>
@endsection

@section('content')
<div class="mask d-flex align-items-center  py-4 gradient-custom-3" style="flex: 1">
  <div class="container ">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-9 col-lg-7 col-xl-6">
        <div class="card auth-card" style="border-radius: 15px;">
          <div class="card-body p-5">
          <x-alert/>
     
            <h2 class="text-uppercase text-center mb-5 ">Create an account</h2>

            <form action="{{ route('register') }}" name="RegForm" onsubmit="return FormVal()" method="POST">
              @csrf
              <div class="form-outline mb-4">
                <span class="text-danger">@error('name') {{ $message }} @enderror</span>
                <input type="text" id="name" name="name" class="form-control form-control-lg" placeholder="Your Name" />
              </div>

              <div class="form-outline mb-4">
                <span class="text-danger">@error('email') {{ $message }} @enderror</span>
                <input type="email" id="email" name="email" class="form-control form-control-lg" placeholder="Your Email"/>
              </div>

              <div class="form-outline mb-4">
                <span class="text-danger">@error('password') {{ $message }} @enderror</span>
                <input type="password" id="password" name="password" class="form-control form-control-lg" placeholder="password"/>
              </div>

              <div class="form-outline mb-4">
                <span class="text-danger">@error('password_confirmation') {{ $message }} @enderror</span>
                <input type="password" id="password_confirmation" name="password_confirmation" class="form-control form-control-lg" placeholder="Repeat your password" />
              </div>

              <div class="form-check d-flex justify-content-center mb-5">
                <span class="text-danger">@error('checklist') {{ $message }} @enderror</span>
                <input class="form-check-input me-2" required type="checkbox" value="" name="accept" id="accept" />
                <label class="form-check-label" for="accept">
                  I agree all statements in <a href="#!" class="text-body"><u>Terms of service</u></a>
                </label>
              </div>

              <div class="d-flex justify-content-center text-white">
                <button type="submit"
                  class="btn btn-success form-control btn-block btn-lg gradient-custom-4 text-body">Register</button>
              </div>

              <p class="text-center text-muted mt-5 mb-0">Have already an account? <a href="{{ route('login') }}"
                  class="fw-bold text-body"><u>Login here</u></a></p>

            </form>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection


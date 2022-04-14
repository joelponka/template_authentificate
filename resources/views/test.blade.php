@extends('layouts.auth')
@section('title')@lang('Login') @endsection
@section('content')
<section class="section">
    <div class="container mt-5">
      <div class="row">
        <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
          <div class="card card-primary">
            <div class="card-header">
              <h4>@lang('Register')</h4>
            </div>
            <div class="card-body">
              <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="row">
                  <div class="form-group col-12">
                    <label for="name">@lang('Name')</label>
                    <input id="name" type="text" class="form-control" name="name" tabindex="1"  autofocus>
                    <div class="invalid-feedback">
                        @lang('Please fill in your name')
                    </div>
                  </div>
                </div>
                <div class="form-group">
                    <label for="email">@lang('Email')</label>
                    <input id="email" type="email" class="form-control" name="email" tabindex="1"  autofocus>
                    <div class="invalid-feedback">
                      @lang('Please fill in your email')
                    </div>
                  </div>
                <div class="row">
                  <div class="form-group col-6">
                    <label for="password" class="d-block">@lang('Password')</label>
                    <input id="password" type="password" class="form-control pwstrength" data-indicator="pwindicator"
                      name="password"  tabindex="3" >
                      <div class="invalid-feedback">
                        @lang('Please fill in your password')
                      </div>
                    <div id="pwindicator" class="pwindicator">
                      <div class="bar"></div>
                      <div class="label"></div>
                    </div>
                  </div>
                  <div class="form-group col-6">
                    <label for="password_confirmation" class="d-block">@lang('Confirm Password')</label>
                    <input id="password_confirmation" type="password" class="form-control" name="password_confirmation" >
                  </div>
                </div>
                <div class="form-group">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" name="remember" class="custom-control-input" tabindex="3" id="remember-me">
                      <label class="custom-control-label" for="remember-me">@lang('I agree with the terms and conditions')</label>
                    </div>
                  </div>
                
                <div class="form-group">
                  <button type="submit" class="btn btn-primary btn-lg btn-block">
                    @lang('Register')
                  </button>
                </div>
              </form>
            </div>
            <div class="mb-4 text-muted text-center">
              @lang('Already registered?') <a href="{{route('login')}}">@lang('Log in')</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
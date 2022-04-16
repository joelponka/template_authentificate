@extends('layouts.auth')
@section('title')@lang('Reset Password') @endsection
@section('content')
<section class="section">
    <div class="container mt-5">
      <div class="row">
        <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
          <div class="card card-primary">
            <div class="card-header">
              <h4>@lang('Reset Password')</h4>
            </div>
            <div class="card-body">
              <p class="text-muted">@lang('Enter Your New Password')</p>
              <form  method="POST" action="{{ route('password.update') }}">
                @csrf
                @method('POST')
                <input type="hidden" name="token" value="{{ $request->route('token') }}">
                <div class="form-group">
                  <label for="email" class="form-label">@lang('Email') <span class="text-danger">*</span></label>
                  <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" 
                    name="email" tabindex="1" required autofocus placeholder="@lang('Email')" value="{{ $request->email ?? old('email') }}">
                  @error('email')
                    <span class="text-danger">{{ $message }}</span>
                  @enderror
                </div>

                <div class="form-group">
                  <label for="password" class="form-label">@lang('New Password') <span class="text-danger">*</span></label>
                  <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                    name="password" tabindex="2" required placeholder="@lang('New Password')">
                  @error('password')
                    <span class="text-danger">{{ $message }}</span>
                  @enderror
                </div>

                <div class="form-group">
                  <label for="password-confirm" class="form-label">@lang('Confirm Password') <span class="text-danger">*</span></label>
                  <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                    tabindex="2" required autofocus placeholder="@lang('Confirm Password')">
                </div>

                <div class="form-group">
                  <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                    @lang('Reset Password')
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
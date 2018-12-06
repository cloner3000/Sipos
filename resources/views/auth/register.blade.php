@extends('layouts.base')


@section('title')
Register
@endsection


@section('content')

<div class="col-md-12">
  <div class="card">
    <h3 class="card-header h4">Register</h3>
    <div class="card-block">
      <form class="form-horizontal" action="{{ route('register') }}" method="post">
        @csrf

        <div class="form-group">
          <div class="col-sm-12">
            <label class="sr-only" for="frontend_signup_username">Name</label>
            <input class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus type="text" id="frontend_signup_username" placeholder="Name" />
            @if ($errors->has('name'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
            @endif
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-12">
            <label class="sr-only" for="frontend_signup_email">Email</label>
            <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required type="email" id="frontend_signup_email" placeholder="Email" />
            @if ($errors->has('email'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-12">
            <label class="sr-only" for="frontend_signup_password">Password</label>
            <input class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required type="password" id="frontend_signup_password" placeholder="Password" />
            @if ($errors->has('password'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-12">
            <label class="sr-only" for="frontend_signup_confirm_password">Confirm Password</label>
            <input class="form-control" type="password" id="frontend_signup_confirm_password" placeholder="Confirm password" name="password_confirmation" required/>
          </div>
        </div>
        <button class="btn btn-app btn-block" type="submit">Register</button>
      </form>
    </div>
  </div>
</div>
@endsection

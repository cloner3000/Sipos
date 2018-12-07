@extends('layouts.base')

@section('title')
Login
@endsection

@section('content')
<main class="app-layout-content">
  <div class="page-content">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <h3 class="card-header h4">Login</h3>
            <div class="card-block">
              <form action=" {{ route('login') }}" method="post">
                @csrf
                <div class="form-group">
                  <label class="sr-only" for="frontend_login_email">Email</label>
                  <input type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" id="frontend_login_email" placeholder="Email" required autofocus/>
                  @if ($errors->has('email'))
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $errors->first('email') }}</strong>
                      </span>
                  @endif
                </div>
                <div class="form-group">
                  <label class="sr-only" for="frontend_login_password">Password</label>
                  <input type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" id="frontend_login_password" placeholder="Password" required/>
                  @if ($errors->has('password'))
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $errors->first('password') }}</strong>
                      </span>
                  @endif
                </div>
                <div class="form-group">
                  <label for="frontend_login_remember" class="css-input switch switch-sm switch-app">
                    <input type="checkbox" id="frontend_login_remember" name="remember" {{ old('remember') ? 'checked' : '' }}/><span></span> Remember me</a>
                  </label>
                </div>
                <button type="submit" class="btn btn-app btn-block">Login</button>
                @if (Route::has('password.request'))
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                @endif
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
@endsection

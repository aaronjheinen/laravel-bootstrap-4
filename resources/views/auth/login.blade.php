@extends('layouts.base')

@section('content')
<div class="row">
  <div class="col-md-8 offset-md-2">
    <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
      <div class="card text-center">
        <div class="card-header">
          Login
        </div>
        <div class="card-block">
          {{ csrf_field() }}

          <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
              <label for="email" class="control-label">E-Mail Address</label>

                  <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                  @if ($errors->has('email'))
                      <span class="help-block">
                          <strong>{{ $errors->first('email') }}</strong>
                      </span>
                  @endif
          </div>

          <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
              <label for="password" class="control-label">Password</label>

                  <input id="password" type="password" class="form-control" name="password" required>

                  @if ($errors->has('password'))
                      <span class="help-block">
                          <strong>{{ $errors->first('password') }}</strong>
                      </span>
                  @endif
          </div>

          <div class="form-group">
              <div class="col-md-6 offset-md-4">
                <label class="check">
                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                    <span class="box"></span>
                    <span class="form-check-label">Remember Me</span>
                </label>
              </div>
          </div>
        </div>
        <div class="card-footer text-muted">
          <div class="form-group">
              <div class="col-md-8 offset-md-4">
                  <button type="submit" class="btn btn-primary">
                      Login
                  </button>

                  <a class="btn btn-link" href="{{ route('password.request') }}">
                      Forgot Your Password?
                  </a>
              </div>
          </div>
        </div>
      </div>
    </form>
  </div>
</div>
@endsection

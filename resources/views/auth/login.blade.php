@extends('form')
@section('content')
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Sign in to start your session</p>

    <form action="/admin/auth/login" method="post">
    {!! csrf_field() !!}
      <div class="form-group has-feedback">
        <input name="email" type="email" class="form-control" placeholder="Email" value="{{old('email')}}">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input name="password" type="password" class="form-control" placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
      	<a href="/admin/auth/register">Doesnt have account? create here</a>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox"> Remember Me
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

@endsection
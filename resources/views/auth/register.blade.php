@extends('form')
@section('content')
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Sign up Now</p>

    <form action="/admin/auth/register" method="post">
    {!! csrf_field() !!}
      <div class="form-group has-feedback">
        <input type="email" name="email" class="form-control" placeholder="Email" value="{{old('email')}}">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input name="password" type="password" class="form-control" placeholder="Password" >
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>

      <div class="row">
        <!-- /.col -->

      <div class="col-xs-8">
        <a href="/admin/auth/login">Already have account? Login here</a>
      </div>
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Sign Up</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

@endsection
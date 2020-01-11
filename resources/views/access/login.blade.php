<!DOCTYPE html>
<html>
<link rel="icon" href="{{ asset('folder/itdev.ico') }}" type="image/icon">
  <head>
    <meta charset="UTF-8">
    <title>Admin IT Development | Rosalia Indah Group</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link href="{{ asset('folder/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="{{ asset('folder/bootstrap/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="{{ asset('folder/dist/css/AdminLTE.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- iCheck -->
    <link href="{{ asset('folder/plugins/iCheck/square/blue.css') }}" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  
  <body class="login-page">
    <div class="login-box">
      <div class="login-logo">
        <a href=""><b>Admin</b> IT Transisi</a>
      </div><!-- /.login-logo -->
      
      <div class="login-box-body">
        <p class="login-box-msg">Log in untuk memulai sesi</p>
         @if(\Session::has('alert'))
                <div class="alert alert-danger">
                    <div>{{Session::get('alert')}}</div>
                </div>
            @endif
            @if(\Session::has('alert-success'))
                <div class="alert alert-success">
                    <div>{{Session::get('alert-success')}}</div>
                </div>
        @endif
        <form action="{{ url ('checklogin') }}" method="post">
             {{ @csrf_field () }}
          <div class="form-group has-feedback">
              <input type="email" id="email" name="email" 
                     class="form-control" value="{{ old('email') }}" placeholder="email" autofocus="" required autocomplete="email" autofocus/>
            @error('email') <span class="glyphicon glyphicon-envelope form-control-feedback" role="alert"></span><strong>{{ $message }}</strong>
               @enderror
          </div>


          <div class="form-group has-feedback">
            
            <input type="password" id="password" name="password" 
            class="form-control" placeholder="Password" required autocomplete="current-password"/>

            @error('password')
            <span class="glyphicon glyphicon-lock form-control-feedback" role="alert"></span>
            <strong>{{ $message }}</strong>
            @enderror

          </div>
          
          <div class="row">
              <div class="col-xs-12">
                  <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
              </div><!-- /.col -->
          </div>
        </form>
        <br>
        <div class="social-auth-links text-center">
          <p>IT Development &copy; 2020
          </p>
        </div><!-- /.social-auth-links -->
      </div><!-- /.login-box-body -->
      
    </div><!-- /.login-box -->

    <!-- jQuery 2.1.3 -->
    <script src="{{ asset('folder/plugins/jQuery/jQuery-2.1.3.min.js') }}"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="{{ asset('folder/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>
    <!-- iCheck -->
    <script src="{{ asset('folder/plugins/iCheck/icheck.min.js') }}" type="text/javascript"></script>
    


    <script>

      $(function () {
        $('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%' // optional
        });
      });
    </script>
  
  </body>
  
</html>



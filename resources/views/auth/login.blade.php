<!DOCTYPE html>
<html lang="en">
    
<head>
        <title>Login Page</title><meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}" />
        <link rel="stylesheet" href="{{asset('assets/css/bootstrap-responsive.min.css')}}" />
        <link rel="stylesheet" href="{{asset('assets/css/maruti-login.css')}}" />
    </head>
    <body>
        <div id="loginbox">
          
            <form id="loginform" class="form-vertical" method="POST" action="{{ route('login') }}">
                @csrf
                 <div class="control-group normal_text"> <h3>Login Admin</h3></div>
                   @error('username')
                                      <div class="alert alert-danger alert-block text-center"> 
              Maaf, Username atau password salah, cek akun anda.</div>
                                @enderror
                                @error('password')
                                     <div class="alert alert-danger alert-block text-center"> 
              Maaf, Username atau password salah, cek akun anda.</div
                                @enderror         
                <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on"><i class="icon-user"></i></span><input type="text" placeholder="Username" name="username" required />
                        </div>
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on"><i class="icon-lock"></i></span><input type="password" placeholder="Password" name="password" required />
                        </div>
                    </div>
                </div>
                <div class="form-actions text-center">
                    <input type="submit" class="btn btn-success" value="Login" />
                    <a href="{{url('/')}}" class="flip-link btn btn-primary" id="to-recover">Website Saya</a>

                </div>
            </form>
        </div>
        
        <script src="{{asset('assets/js/jquery.min.js')}}"></script>  
        <script src="{{asset('assets/js/maruti.login.js')}}"></script> 
    </body>

</html>

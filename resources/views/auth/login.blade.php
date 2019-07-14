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
         @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror            
            <form id="loginform" class="form-vertical" method="POST" action="{{ route('login') }}">
                @csrf
                 <div class="control-group normal_text"> <h3>Login Admin</h3></div>
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
                <div class="form-actions">
                    <span class="pull-left"><a href="{{url('/')}}" class="flip-link btn btn-primary" id="to-recover">Website Saya</a></span>
                    <span class="pull-right"><input type="submit" class="btn btn-success" value="Login" /></span>
                </div>
            </form>
        </div>
        
        <script src="{{asset('assets/js/jquery.min.js')}}"></script>  
        <script src="{{asset('assets/js/maruti.login.js')}}"></script> 
    </body>

</html>

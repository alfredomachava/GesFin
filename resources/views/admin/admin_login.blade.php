<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/backend_img/rend.jpg')}}">
    <title>GesFinancas</title>
    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('css/backend_css/lib/bootstrap/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ asset('css/backend_css/helper.css')}}" rel="stylesheet">
    <link href="{{ asset('css/backend_css/style.css')}}" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:** -->
    <!--[if lt IE 9]>
    <script src="https:**oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https:**oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="fix-header fix-sidebar">
    <!-- Preloader - style you can find in spinners.css -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
			<circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <!-- Main wrapper  -->
    <div id="main-wrapper">

        <div class="unix-login">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-lg-4">
                        <div class="login-content card">
                            <div class="login-form">
											
                                <h4>Login</h4>
                                <form method="post" action="{{url('/gesfinancas')}}">
								  {{csrf_field()}}
                                    <div class="form-group">
                                        <label>Email address</label>
                                        <input type="email" name="email" class="form-control" placeholder="Email">
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" name="password" class="form-control" placeholder="Password">
                                    </div>
                                    <div class="checkbox">
                                        <label>
        										<input type="checkbox"> Remember Me
        									</label>
                                        <label class="pull-right">
        										<a href="#">Forgotten Password?</a>
        									</label>

                                    </div>
									@if(Session::has('flush_message_error'))
									 <div class='alert alert-warning alert_block'>
									   <button type="button" class="close" data-dismiss="alert">x</button>
									    <strong>{!! session('flush_message_error')!!}</strong>
									</div>
								    @endif
									@if(Session::has('flush_message_success'))
									 <div class='alert alert-success alert_block'>
									   <button type="button" class="close" data-dismiss="alert">x</button>
									    <strong>{!! session('flush_message_success')!!}</strong>
									</div>
								    @endif
                                    <button type="submit" value="login" class="btn btn-primary btn-flat m-b-30 m-t-30" >Sign in</button>
									</form>
                                    <div class="register-link m-t-15 text-center">
                                        <p>Don't have account ? <a href="{{ url('/user/register') }}"> Sign Up Here</a></p>
                                    </div>
									
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- End Wrapper -->
    <!-- All Jquery -->
    <script src="{{ asset('js/backend_js/lib/jquery/jquery.min.js')}}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{ asset('js/backend_js/lib/bootstrap/js/popper.min.js')}}"></script>
    <script src="{{ asset('js/backend_js/lib/bootstrap/js/bootstrap.min.js')}}"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="{{ asset('js/backend_js/jquery.slimscroll.js')}}"></script>
    <!--Menu sidebar -->
    <script src="{{ asset('js/backend_js/sidebarmenu.js')}}"></script>
    <!--stickey kit -->
    <script src="{{ asset('js/backend_js/lib/sticky-kit-master/dist/sticky-kit.min.js')}}"></script>
    <!--Custom JavaScript -->
    <script src="{{ asset('js/backend_js/custom.min.js')}}"></script>

</body>

</html>
<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from coderthemes.com/ubold/layouts/dark/pages-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 28 May 2019 04:48:00 GMT -->
<head>
        <meta charset="utf-8" />
        <title>IHRM - Intels Human Resource Management </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{asset('assets/images/favicon.ico')}}">

        <!-- App css -->
        <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/css/app.min.css')}}" rel="stylesheet" type="text/css" />

        <style>
            /* .bg{
            background-image: url("img/background.jpg");
            background-position: center;
            background-size: cover;        
            } */
            .login_bg{
            background-image: url("img/login.jpg");
            background-position: center;
            background-size: cover;
        
            }
            .logo{
            height:100px;
            width:100px;
            }
            
            .text1{
            font-size:35px;
            text-align:center;
            
            }
            .text2{
            text-align:center;
            }
            .hrm{
            color:MidnightBlue;
            text-shadow:1px 0px black;
            }
    
        </style>

    </head>

    <body>

        <div class="authentication-bg authentication-bg-pattern bg">
            <div class="container">
                <div class="row justify-content-center ">
                    <div class="col-md-8 col-lg-5 col-xl-5">
                        <div class="card bg-pattern mt-5">

                            <div class="card-body p-4">
                                
                                <div class="text-center w-75 m-auto">
                                    <a href="index.html">
                                        <span><img src="{{asset('assets/images/habibsoft.png')}}" alt="login" height="44"></span>
                                    </a>
                                    <p class="text-muted mb-4 mt-3">Enter your email address and password to access admin panel.</p>
                                </div>



                                <form action="#" method="post">

                                    <div class="form-group mb-3">
                                        <label for="name">User Name</label>
                                        <input class="form-control" type="text" name="txtUsername"  required="" placeholder="Enter username or email">
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="password">Password</label>
                                        <input class="form-control" type="password" required="" name="pwdPassword"  placeholder="Enter your password">
                                    </div>

                                    <div class="form-group mb-3">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="checkbox-signin" checked>
                                            <label class="custom-control-label" for="checkbox-signin">Remember me</label>
                                        </div>
                                    </div>

                                    <div class="form-group mb-0 text-center">
                                        <a href="{{url('home')}}" class="btn btn-primary btn-block" name="btnLogin" type="submit"> Log In </a>
                                    </div><br>
                                    <div>
                                        <table class="table table-bordered table-sm">
                                            <tr>
                                                <td>Username:  user@gmail.com</td>
                                                <td> Password:  123456</td>
                                            </tr>
                                        </table>
                                    </div>

                                </form>

                              
                            </div> <!-- end card-body -->
                        </div>
                        <!-- end card -->


                    </div>
                     <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end page -->

        <!-- Vendor js -->
        <script src="{{asset('assets/js/vendor.min.js')}}"></script>

        <!-- App js -->
        <script src="{{asset('assets/js/app.min.js')}}"></script>
        
    </body>
<!-- Mirrored from coderthemes.com/ubold/layouts/dark/pages-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 28 May 2019 04:48:01 GMT -->
</html>
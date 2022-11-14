<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from coderthemes.com/ubold/layouts/dark/forms-validation.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 28 May 2019 04:48:16 GMT -->
    <head>
        <meta charset="utf-8" />
        <title>IHRM-Intellect Human Resource Management</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{asset('assets/images/favicon.ico')}}">
         <!-- Footable css -->
         <link href="{{asset('assets/libs/footable/footable.core.min.css')}}" rel="stylesheet" type="text/css" />

        <!-- App css -->
        <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/css/app.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="/resources/demos/style.css">
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

        <style>
            /*  page title font size */
            #font-size{
                font-size:21px;
            }
            .navbar-custom{
                background-color:#334250;
            }
            .card-box{
                background-color:#334250;
            }
            .card {
                background-color:#334250;
            }
           .footer{
                background-color:#334250;
            }
            .card-header{
                background-color:#3c4e5f;
            }
            .ed{
                background-color:#1abc9c;
            }
            .de{
                background-color:#f1556c;
            }
           
        </style>

    </head>
    <body>

        <!----- Begin page Navbar-------->
        <div id="wrapper">

            <!------------ Navbar Start -------------------->
            @include("include.navbar")
            <!--------------- /End Navbar ----------- ------->


            <!------------ Left Sidebar Start --------------->
            @include("include.left_sidebar")
            <!------------- /Left Sidebar End ---------------->


            <!--------- Content wrapper DASHBOARD -------------->
            <div class="content-page">

                 @yield('body')

                <!------------- Footer Start --------------------->
                @include("include.footer")
                <!------------- /End Footer ----------------------->
            </div>
            <!------------ /End Wrapper  DASHBOARD ----------->

        </div>

             <!------------- Right Sidebar ------------------->
             @include("include.right_sidebar")
            <!---------------/Right-Sidebar ------------------>



     <!-- Right bar overlay-->
     <div class="rightbar-overlay"></div>

        <!-- Vendor js -->
        <script src="{{asset('assets/js/vendor.min.js')}}"></script>
        <!-- Plugin js-->
        <script src="{{asset('assets/libs/parsleyjs/parsley.min.js')}}"></script>
        <!-- Validation init js-->
        <script src="{{asset('assets/js/pages/form-validation.init.js')}}"></script>
        <!-- App js -->
        <script src="{{asset('assets/js/app.min.js')}}"></script>
        <!-- Plugins js-->
        <script src="{{asset('assets/libs/twitter-bootstrap-wizard/jquery.bootstrap.wizard.min.js')}}"></script>
        <!-- Init js-->
        <script src="{{asset('assets/js/pages/form-wizard.init.js')}}"></script>
        <script src="{{asset('assets/js/pages/form-advanced.init.js')}}"></script>

        <!-- Footable js -->
        <script src="{{asset('assets/libs/footable/footable.all.min.js')}}"></script>
        <!-- Init js -->
        <script src="{{asset('assets/js/pages/foo-tables.init.js')}}"></script>
  
</body>

<!-- Mirrored from coderthemes.com/ubold/layouts/dark/forms-validation.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 28 May 2019 04:48:16 GMT -->
</html>

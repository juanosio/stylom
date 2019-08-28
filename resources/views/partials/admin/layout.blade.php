<!DOCTYPE html>
<html lang="en">

<head>
    <title>Adminty - Premium Admin Template by Colorlib </title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="#">
    <meta name="keywords" content="Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="#">
    <!-- Favicon icon -->
    <link rel="icon" href="{{ asset('assets/admin/images/favicon.ico') }}" type="image/x-icon">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/bower_components/bootstrap/css/bootstrap.min.css') }}">
    <!-- feather Awesome -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/icon/feather/css/feather.css') }}">
    
         <!-- Data Table Css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/bower_components/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/assets/pages/data-table/css/buttons.dataTables.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/bower_components/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css') }}">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/assets/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/assets/css/jquery.mCustomScrollbar.css') }}">
</head>
</head>


<body>


    <!-- Pre-loader start -->
    <div class="theme-loader">
        <div class="ball-scale">
            <div class='contain'>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
            </div>
        </div>
    </div> 
<!--    Menu       -->
  @include ('partials/admin/menu')


<!--    Menu lateral    -->

  @include ('partials/admin/sidebar')


<!--    Contenido editable    -->

     @yield('content')



  

    <!-- Warning Section Ends -->
    <!-- Required Jquery -->
    <script type="text/javascript" src="{{ asset('assets/admin/bower_components/jquery/js/jquery.min.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('assets/admin/bower_components/jquery-ui/js/jquery-ui.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/admin/popper.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/admin/bower_components/bootstrap/js/bootstrap.min.js') }}"></script>
    <!-- jquery slimscroll js -->
    <script type="text/javascript" src="{{ asset('assets/admin/bower_components/jquery-slimscroll/js/jquery.slimscroll.js') }}"></script>
<!-- modernizr js -->
<script type="text/javascript" src="{{ asset('assets\admin\bower_components\modernizr\js\modernizr.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets\admin\bower_components\modernizr\js\css-scrollbars.js') }}"></script>

<!-- data-table js -->
<script src="{{ asset('assets\admin\bower_components\datatables.net\js\jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets\admin\bower_components\datatables.net-buttons\js\dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('assets\admin\assets\pages\data-table\js\jszip.min.js') }}"></script>
<script src="{{ asset('assets\admin\assets\pages\data-table\js\pdfmake.min.js') }}"></script>
<script src="{{ asset('assets\admin\assets\pages\data-table\js\vfs_fonts.js') }}"></script>
<script src="{{ asset('assets\admin\bower_components\datatables.net-buttons\js\buttons.print.min.js') }}"></script>
<script src="{{ asset('assets\admin\bower_components\datatables.net-buttons\js\buttons.html5.min.js') }}"></script>
<script src="{{ asset('assets\admin\bower_components\datatables.net-bs4\js\dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets\admin\bower_components\datatables.net-responsive\js\dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('assets\admin\bower_components\datatables.net-responsive-bs4\js\responsive.bootstrap4.min.') }}js"></script>
<!-- i18next.min.js -->
<script type="text/javascript" src="{{ asset('assets\admin\bower_components\i18next\js\i18next.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets\admin\bower_components\i18next-xhr-backend\js\i18nextXHRBackend.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets\admin\bower_components\i18next-browser-languagedetector\js\i18nextBrowserLanguageDetector.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets\admin\bower_components\jquery-i18next\js\jquery-i18next.min.js') }}"></script>
<!-- Custom js -->
<script src="{{ asset('assets\admin\assets\pages\data-table\js\data-table-custom.js') }}"></script>

<script src="{{ asset('assets\admin\assets\js\pcoded.min.js') }}"></script>
<script src="{{ asset('assets\admin\assets\js\vartical-layout.min.js') }}"></script>
<script src="{{ asset('assets\admin\assets\js\jquery.mCustomScrollbar.concat.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets\admin\assets\js\script.js') }}"></script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
   <script>
    $("#seeAnotherField").change(function () {
        if ($(this).val() == "yes") {
            $('#otherFieldDiv').show();
            $('#otherFieldDiv2').hide();

        } else {
            $('#otherFieldDiv').hide();
            $('#otherFieldDiv2').show();
        }
    });
    $("#seeAnotherField").trigger("change");
</script>


</body>

</html>

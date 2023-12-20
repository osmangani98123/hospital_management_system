<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>zabeer</title>
  <meta content="" name="description">
  <meta content="" name="keywords">


  <!-- Favicons -->
  <link href="{{asset('ui/frontend')}}/assets/img/favicon.png" rel="icon">
  <link href="{{asset('ui/frontend')}}/assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  {{-- frontawesome --}}

  <link rel="stylesheet" href="path-to-your-css/fontawesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('ui/frontend')}}/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{asset('ui/frontend')}}/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="{{asset('ui/frontend')}}/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="{{asset('ui/frontend')}}/assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="{{asset('ui/frontend')}}/assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="{{asset('ui/frontend')}}/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="{{asset('ui/frontend')}}/assets/vendor/simple-datatables/style.css" rel="stylesheet">
  <link href="{{asset('ui/frontend')}}/assets/vendor/simple-datatables/responsive.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('ui/frontend')}}/assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: Jul 27 2023 with Bootstrap v5.3.1
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>
<style>
    body {
  font-family: "Open Sans", sans-serif;
  background: #ffffff;
  color: #444444;
}
.main{
    margin-left: 0px;
}
</style>

<body>



  <!-- ======= Header ======= -->

  @include('frontend.layouts.includes.navbar')


  <!-- End Header -->


  <!-- ======= Sidebar ======= -->

  @include('frontend.layouts.includes.sidebar')
  <!-- End Sidebar-->




{{-- main  --}}

<main id="main" class="main">

    @yield('content')

</main>
<style>
    #main {
        /* Your CSS styles here */
        margin-left: 0; /* For example, setting the left margin to 0 */
    }
</style>

<!-- End #main -->
<!-- ======= Footer ======= -->
@include('frontend.layouts.includes.footer')
 <!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset('ui/frontend')}}/assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="{{asset('ui/frontend')}}/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="{{asset('ui/frontend')}}/assets/vendor/chart.js/chart.umd.js"></script>
  <script src="{{asset('ui/frontend')}}/assets/vendor/echarts/echarts.min.js"></script>
  <script src="{{asset('ui/frontend')}}/assets/vendor/quill/quill.min.js"></script>
  <script src="{{asset('ui/frontend')}}/assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="{{asset('ui/frontend')}}/assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="{{asset('ui/frontend')}}/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('ui/frontend')}}/assets/js/main.js"></script>
  <!-- Javascript files-->
  <script src="{{asset('ui/backend')}}/assets/js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="{{asset('ui/backend')}}/assets/js/bootstrap.bundle.min.js"></script>
  <script src="{{asset('ui/backend')}}/assets/js/jquery-3.0.0.min.js"></script>
  <script src="{{asset('ui/backend')}}/assets/js/plugin.js"></script>
  <!-- sidebar -->
  <script src="{{asset('ui/backend')}}/assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
  <script src="{{asset('ui/backend')}}/assets/js/custom.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.5.0/js/bootstrap.bundle.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
     function openNav() {
       document.getElementById("mySidenav").style.width = "250px";
     }

     function closeNav() {
       document.getElementById("mySidenav").style.width = "0";
     }
  </script>

</body>

</html>

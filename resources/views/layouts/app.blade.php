<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Material Design for Bootstrap</title>
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <!-- MDB icon -->
  <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Google Fonts Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="{{ asset('fe-wtl/css/bootstrap.min.css') }}">
  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" href="{{ asset('fe-wtl/css/mdb.min.css') }}">
  <!-- Your custom styles (optional) -->
  <link rel="stylesheet" href="{{ asset('fe-wtl/css/style.css') }}">


  <style type="text/css">
    .view,
    body,
    html {
      height: 100%;
    }

    .carousel {
      height: 50%
    }

    .carousel .carousel-inner,
    .carousel .carousel-inner .active,
    .carousel .carousel-inner .carousel-item {
      height: 100%
    }

    @media (max-width:776px) {
      .carousel {
        height: 100%
      }
    }

    .navbar {
      background-color: rgba(0, 0, 0, .2);
    }

    .navbar .navbar-nav .nav-item .nav-link:hover,
    .navbar .navbar-nav .nav-item .nav-link.active {
      background: rgba(252, 221, 68, 0.7);
      color: black;
    }

    .page-footer,
    .top-nav-collapse {
      background-color: #212121
    }

    @media only screen and (max-width:768px) {
      .navbar {
        background-color: #929FBA
      }
    }

    html,
    body,
    header,
    .carousel {
      height: 60vh;
    }

    @media (max-width: 740px) {

      html,
      body,
      header,
      .carousel {
        height: 100vh;
      }
    }

    @media (min-width: 800px) and (max-width: 850px) {

      html,
      body,
      header,
      .carousel {
        height: 100vh;
      }
    }

    @media (min-width: 800px) and (max-width: 850px) {
      .navbar:not(.top-nav-collapse) {
        background: #929FBA !important;
      }
    }

    /* footer {
      position: fixed;
      left: 0;
      bottom: 0;
      width: 100%;
      background-color: red;
      color: white;
      text-align: center;
    } */
  </style>
</head>

<body>
    <!-- Start your project here-->
    <!--Main Navigation-->
    <header>



    @include('layouts.nav')

    @yield('carousel')


  </header>
  <!--Main Navigation-->


  <!--Main Layout-->
  <main>

    @yield('content')

  </main>
  <!--End Main Layout-->

  <!-- Footer -->
  <footer class="page-footer font-small  darken-4 py-4">

    <!-- Footer Elements -->
    <div class="container">

      <div class="row">
        <div class="col-md-6 d-flex justify-content-start">
          <!-- Copyright -->
          <div class="footer-copyright text-center bg-transparent">© 2019 Copyright:
            <a href="https://mdbootstrap.com/education/bootstrap/"> MDBootstrap.com</a>
          </div>
          <!-- Copyright -->
        </div>
        <div class="col-md-6 d-flex justify-content-end">
          <ul class="list-unstyled d-flex mb-0">
            <li>
              <a class="mr-3" role="button"><i class="fab fa-facebook-f"></i></a>
            </li>
            <li>
              <a class="mr-3" role="button"><i class="fab fa-twitter"></i></a>
            </li>
            <li>
              <a class="mr-3" role="button"><i class="fab fa-instagram"></i></a>
            </li>
            <li>
              <a class="" role="button"><i class="fab fa-youtube"></i></a>
            </li>
          </ul>
        </div>
      </div>

    </div>
    <!-- Footer Elements -->

  </footer>
  <!-- Footer -->
  <!-- End your project here-->

  <!-- jQuery -->
  <script type="text/javascript" src="{{ asset('fe-wtl/js/jquery.min.js') }}"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="{{ asset('fe-wtl/js/popper.min.js') }}"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="{{ asset('fe-wtl/js/bootstrap.min.js') }}"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="{{ asset('fe-wtl/js/mdb.min.js') }}"></script>
  <!-- Your custom scripts (optional) -->
  <script type="text/javascript"></script>

</body>

</html>

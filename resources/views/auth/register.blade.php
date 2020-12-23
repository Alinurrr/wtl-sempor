
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Material Design for Bootstrap</title>
  <!-- WTL icon -->
  <link rel="icon" href="{{ asset('fe-wtl/img/wtl-favicon.ico') }}" type="image/x-icon">
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

  <!-- livewire -->
  <livewire:styles/>
  <livewire:scripts/>
   <!-- Scripts -->
   <script src="{{ mix('js/app.js') }}" defer></script>



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


  <style>
    :root {
      --input-padding-x: 1.5rem;
      --input-padding-y: .75rem;
    }

    body {
      background-image: url('{{ asset('fe-wtl/img/banner/login.jpg') }}');
      background-repeat: no-repeat;
      background-size: cover;
    }

    .card-signin {
      border: 0;
      border-radius: 1rem;
      box-shadow: 0 0.5rem 1rem 0 rgba(0, 0, 0, 0.1);
      overflow: hidden;
    }

    .card-signin .card-title {
      margin-bottom: 2rem;
      font-weight: 300;
      font-size: 1.5rem;
    }

    .card-signin .card-img-left {
      width: 45%;
      /* Link to your background image using in the property below! */
      background: scroll center url('https://source.unsplash.com/WEQbe2jBg40/414x512');
      background-size: cover;
    }

    .card-signin .card-body {
      padding: 2rem;
    }

    .form-signin {
      width: 100%;
    }

    .form-signin .btn {
      font-size: 80%;
      border-radius: 5rem;
      letter-spacing: .1rem;
      font-weight: bold;
      padding: 1rem;
      transition: all 0.2s;
    }

    .form-label-group {
      position: relative;
      margin-bottom: 1rem;
    }

    .form-label-group input {
      height: auto;
      border-radius: 2rem;
    }

    .form-label-group>input,
    .form-label-group>label {
      padding: var(--input-padding-y) var(--input-padding-x);
    }

    .form-label-group>label {
      position: absolute;
      top: 0;
      left: 0;
      display: block;
      width: 100%;
      margin-bottom: 0;
      /* Override default `<label>` margin */
      line-height: 1.5;
      color: #495057;
      border: 1px solid transparent;
      border-radius: .25rem;
      transition: all .1s ease-in-out;
    }

    .form-label-group input::-webkit-input-placeholder {
      color: transparent;
    }

    .form-label-group input:-ms-input-placeholder {
      color: transparent;
    }

    .form-label-group input::-ms-input-placeholder {
      color: transparent;
    }

    .form-label-group input::-moz-placeholder {
      color: transparent;
    }

    .form-label-group input::placeholder {
      color: transparent;
    }

    .form-label-group input:not(:placeholder-shown) {
      padding-top: calc(var(--input-padding-y) + var(--input-padding-y) * (2 / 3));
      padding-bottom: calc(var(--input-padding-y) / 3);
    }

    .form-label-group input:not(:placeholder-shown)~label {
      padding-top: calc(var(--input-padding-y) / 3);
      padding-bottom: calc(var(--input-padding-y) / 3);
      font-size: 12px;
      color: #777;
    }

    .btn-google {
      color: white;
      background-color: #ea4335;
    }

    .btn-facebook {
      color: white;
      background-color: #3b5998;
    }
  </style>

  <!--Main Layout-->
  <!-- This snippet uses Font Awesome 5 Free as a dependency. You can download it at fontawesome.io! -->

  <body>
    <div class="container">
      <div class="row">
        <div class="col-lg-10 col-xl-9 mx-auto">
          <div class="card card-signin flex-row my-5">
            <div class="card-img-left d-none d-md-flex">
              <!-- Background image for card set in CSS! -->
            </div>
            <div class="card-body">
              <h5 class="card-title text-center">Register</h5>
              <form class="form-signin"method="POST" action="{{ route('register') }}">
                @csrf
                <div class="form-label-group">
                  <input type="text" id="inputUserame" class="form-control" placeholder="Nama" name="name" value="{{ old('name') }}" autofocus>
                  <label for="inputUserame">Nama</label>
                </div>
                @error('name')
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>{{ $message }}</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @enderror

                <div class="form-label-group">
                  <input type="email" id="inputEmail" class="form-control" placeholder="Email address" name="email" value="{{ old('email') }}">
                  <label for="inputEmail">Email address</label>
                </div>
                @error('email')
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>{{ $message }}</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @enderror

                <hr>

                <div class="form-label-group">
                  <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="password" tocomplete="new-password">
                  <label for="inputPassword">Password</label>
                </div>
                @error('password')
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>{{ $message }}</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @enderror

                <div class="form-label-group">
                  <input type="password" id="inputConfirmPassword" class="form-control" placeholder="Password"  name="password_confirmation" autocomplete="new-password">
                  <label for="inputConfirmPassword">Confirm password</label>
                </div>


                <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Register</button>
                <hr class="my-4">
                <a class="d-block text-center mt-2 " href="{{ route('login') }}">Sign In</a>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>

  <!--End Main Layout-->




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



<!doctype html>
<html lang="en">
  <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css">
      <style>
          .navbar-dark .navbar-nav .nav-link {
              color: rgba(255, 255, 255, .75);
          }
          .navbar-dark .navbar-nav .nav-link:focus, .navbar-dark .navbar-nav .nav-link:hover {
              color: rgba(255, 255, 255, 1);
          }
          .py-6 {
              padding-top: 8rem;
              padding-bottom: 8rem;
          }
          .mb-4-5 {
              margin-bottom: 2rem;
          }
          .collapsing {
              -webkit-transition: all 0s ease 0s;
              -o-transition: all 0s ease 0s;
              transition: all 0s ease 0s;
          }
          #images img {
              cursor: pointer;
          }
          .text-decoration-none {
              text-decoration: none !important;
          }
          .text-primary, .lead a {
              color: #a91616 !important;
          }
          .bg-primary {
              background-color: #a91616 !important;
          }
          .btn-primary {
              background-color: #a91616 !important;
              border-color: #a91616 !important;
              box-shadow: none !important;
              padding-left:15px;
              padding-right:15px;
              padding-top:10px;
              padding-bottom:10px;
              border-radius: 25px;
              float:inherit;
          }
          html, body {
              background-color: #fff;
              color: #636b6f;
              font-family: 'Nunito', sans-serif;
              font-weight: 200;
              height: 100vh;
              margin: 0;
          }

          .full-height {
              height: 100vh;
          }

          .flex-center {
              align-items: center;
              display: flex;
              justify-content: center;
          }

          .position-ref {
              position: relative;
          }

          .top-right {
              position: absolute;
              right: 10px;
              top: 18px;
          }

          .content {
              text-align: center;
          }

          .title {
              font-size: 84px;
          }

          .links > a {
              color: #636b6f;
              padding: 0 25px;
              font-size: 12px;
              font-weight: 600;
              letter-spacing: .1rem;
              text-decoration: none;
              text-transform: uppercase;
          }

          table, td, th {
            padding:5px;
            border-spacing:5px;
            padding-left:20px;
          }
          td, th {
            padding-left:50px;
            padding-right:50px;
          }

          .m-b-md {
              margin-bottom: 30px;
            }
      </style>
      <!-- Scripts -->
      <script src="{{ asset('js/app.js') }}" defer></script>

      <!-- Fonts -->
      <link rel="dns-prefetch" href="https://fonts.gstatic.com">
      <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

      <!-- Styles -->
      <link href="{{ asset('css/app.css') }}" rel="stylesheet">

      <title>{{ config('app.name', 'Community Forests Pemba') }}</title>

      <!-- Scripts -->
      <script src="{{ asset('js/app.js') }}" defer></script>

  </head>
  <body>
    <!-- navbar -->
<nav id="menu" class="navbar sticky-top navbar-expand-md navbar-dark bg-primary navbar-laravel">
    <div class="container">
                        <a class="navbar-brand" href="#home"><img src="/storage/Logo/cfplogo.png" onerror="this.src='https://i.imgur.com/KaRxkxl.png';" alt="CFP Logo" width="30px" height="30px"/> Community Forests Pemba</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                <li class="nav-item"><a class="nav-link" href="#features">Focus</a></li>
                <li class="nav-item"><a class="nav-link" href="#images">Images</a></li>
                <li class="nav-item"><a class="nav-link" href="#staff">Staff</a></li>
                <li class="nav-item"><a class="nav-link" href="#testimonials">Testimonials</a></li>
                <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
            </ul>
        </div>
    </div>
    <div class="container">

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">

            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
              <div class="container">

                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                      <span class="navbar-toggler-icon"></span>
                  </button>

                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                      <!-- Left Side Of Navbar -->
                      <ul class="navbar-nav mr-auto">

                      </ul>
    </div>
    <div id="app">
            <div class="container">

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="btn-primary" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="btn-primary" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @else
                        <!--Drop Down-->
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <a class="dropdown-item" href="{{ route('employee.create') }}">
                                        {{ __('Create Employee') }}
                                    </a>

                                    <a class="dropdown-item" href="{{ route('employees') }}">
                                        {{ __('View Employees') }}
                                    </a>

                                    <a class="dropdown-item" href="{{ route('beneficiary.create') }}">
                                        {{ __('Create Beneficiary') }}
                                    </a>

                                    <a class="dropdown-item" href="{{ route('beneficiaries') }}">
                                        {{ __('View Beneficiaries') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
</nav>


    <main class="py-4">
        @yield('content')
    </main>
</div>



<!--Footer -->
    <div id="footer" class="py-4 text-center text-light bg-dark">
            <div class="container">
                &copy;2018 Community Forests Pemba
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>
        <script>
            $(document).ready(function () {
                $(document).on('click', '#menu .navbar-brand, #menu .nav-link, #home a', function (event) {
                    event.preventDefault();

                    $('.navbar-collapse').collapse('hide');
                    $('html, body').animate({ scrollTop: $($(this).attr('href')).offset().top - 56 }, 'fast');
                });

                $(document).on('click', '#images img', function (event) {
                    event.preventDefault();

                    var images_modal = $('#images_modal');

                    images_modal.find('img').attr('src', $(this).attr('src'));
                    images_modal.modal();
                });
            });
        </script>
  </body>
</html>

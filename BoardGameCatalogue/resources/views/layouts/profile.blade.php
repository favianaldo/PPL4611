<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }}</title>

  <!-- Custom styles for this template-->
  <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
  <link rel="stylesheet" href="{{ asset('css/sb-admin-2.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  @livewireStyles
</head>

<body>
    <div class="container">
        <!-- Outer Row -->
        <div class="row justify-content-md-center">
            <div class="col-xl-8 col-lg-12 col-md-4">
                <div class="card o-hidden border-0 my-5">
                    <!-- Card Body -->
                    <div class="card-body" id="card-body">
                        <!-- Topbar -->
                        <nav class="navbar navbar-expand navbar-light bg-black topbar mb-4 static-top shadow">
                            <a href="{{ route('teams') }}"><i class="fa fa-arrow-left text-white mx-3 my-3" aria-hidden="true"></i></a>
                            {{-- <!-- Topbar Navbar -->
                            <ul class="navbar-nav mr-auto">
                                <!-- Nav Item - Menu Information -->
                                <div class="d-sm-flex align-items-center justify-content-between mb-2">
                                    <h1 class="h4 mb-0 text-gray-800" id="home">Home</h1>
                                </div>
                            </ul>
                            <!-- End of Topbar -->
                            <!-- Topbar Navbar -->
                            <ul class="navbar-nav ml-auto">
                                <!-- Plus Team -->
                                <li class="nav-item dropdown no-arrow">
                                    <a class="nav-link dropdown-toggle" href="{{ route('teams.add') }}" role="button">
                                        <span class="mr-2 d-none d-lg-inline text-gray-600 small"></span>
                                        <i class="fa fa-plus-circle" aria-hidden="true"></i>
                                    </a>
                                </li>
                                <!-- Batas -->
                                <li class="nav-item dropdown no-arrow">
                                    <a class="nav-link dropdown-toggle" aria-haspopup="true" aria-expanded="false" id="batas">
                                        <span>|</span>
                                    </a>
                                </li>
                                <!-- Nav Item - User Information -->
                                <li class="nav-item dropdown no-arrow">
                                    <a class="nav-link dropdown-toggle" href="{{ url('/user/profile') }}" role="button">
                                        <span class="mr-2 d-none d-lg-inline text-gray-600 small"></span>
                                        <i class="fa fa-user-circle" aria-hidden="true"></i>
                                        <!-- <img class="img-profile rounded-circle" src="#"> -->
                                    </a>
                                </li>
                            </ul> --}}
                        </nav>
                        <!-- End of Topbar -->
                        <!-- Page Content -->
                        <main>
                            {{ $slot }}
                        </main>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @stack('modals')

    @livewireScripts
    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/popper.js') }}"></script>
    <script src="{{ asset('js/bootstrap.js') }}"></script>
    <script src="{{ asset('js/sb-admin-2.min.js') }}"></script>
    @stack('scripts')
</body>

</html>

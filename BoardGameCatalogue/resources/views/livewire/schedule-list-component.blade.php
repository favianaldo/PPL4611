<div>
    <!-- Topbar -->
    <nav class="navbar navbar-expand navbar-light bg-black topbar mb-4 static-top shadow">

        <!-- Topbar Navbar -->
        <ul class="navbar-nav mr-auto">

            <!-- Nav Item - Menu Information -->
            <div class="d-sm-flex align-items-center justify-content-between mb-2">
                <h1 class="h4 mb-0 text-gray-800" id="home">Home</h1>
            </div>
        </ul>
        <!-- End of Topbar -->

        <!-- Topbar Navbar -->
        <ul class="navbar-nav ml-auto">
            <!-- Notif -->
            <li class="nav-item dropdown no-arrow">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="mr-2 d-none d-lg-inline text-gray-600 small"></span>
                    <i class="fa fa-bell-o @if(count($invitations) != 0) text-danger @endif" aria-hidden="true"></i>
                </a>

                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown" style="min-width: 20rem;">
                    @isset($invitations)
                        @foreach ($invitations as $invitation)
                            <a class="dropdown-item" style="padding: .5rem;">
                                <div class="row">
                                    <div class="col-2 col-lg-2 col-xs-2 p-2">
                                        <img id="gambar-icon" src="{{ asset('img/logo_bgc.png') }}">
                                    </div>
                                    <div class="col-6 col-lg-6 col-xs-6 mb-2">
                                        <div class="row">
                                            <div class="col-12 col-lg-12 col-xs-12">
                                                <h6 class="m-0 font-weight-bold">{{ $invitation->team->name }}</h6>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 col-lg-12 col-xs-12">
                                                <h6 class="m-0 font-weight-bold">{{ $invitation->team->game->name }}</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4 col-lg-4 col-xs-4">
                                        <div class="row">
                                            <div class="col-6 col-lg-6 col-xs-6 pt-2">
                                                <button wire:click="accept({{ $invitation->id }})" class="btn btn btn-success"><i class="fa fa-check"></i></button>
                                            </div>

                                            <div class="col-6 col-lg-6 col-xs-6 pt-2">
                                                <button wire:click="decline({{ $invitation->id }})" class="btn btn btn-danger"><i class="fa fa-times"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        @endforeach
                    @endisset

                </div>
            </li>

            {{-- <!-- Batas -->
            <li class="nav-item dropdown no-arrow">
                <a class="nav-link dropdown-toggle" aria-haspopup="true" aria-expanded="false" id="batas">
                    <span>|</span>
                </a>
            </li> --}}

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
                <a class="nav-link dropdown-toggle" href="{{ url('/profile') }}" role="button">
                    <span class="mr-2 d-none d-lg-inline text-gray-600 small"></span>
                    <i class="fa fa-user-circle" aria-hidden="true"></i>
                    <!-- <img class="img-profile rounded-circle" src="#"> -->
                </a>
            </li>

        </ul>

    </nav>
    <!-- End of Topbar -->

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Content Row -->
        <div class="row">

            <div class="col-lg-12 mb-4">

                <input class="form-control mr-sm-2" type="search" wire:model="search" placeholder="Search for my team" aria-label="Cari">

            </div>
        </div>

        <div class="container col-lg-12 col-xs-12 container-buttons" id="coloring1">
            <div class="row">
                <div class="col-12 col-lg-3 col-xs-3 col-buttons text-center">
                    <a class="font-weight-bold btn btn-dark active" id="menu">My Teams</a>
                </div>
                <div class="col-12 col-lg-3 col-xs-3 col-buttons text-center">
                    <!-- <button class="btn btn-warning buttons-4 active">Game List</button> -->
                    <a class="font-weight-bold btn" href="{{ route('games') }}" id="menu">Game List</a>
                </div>
            </div>
            <div class="row" style="margin-top: 20px;">
                <div class="col-12 col-lg-3 col-xs-3 col-buttons text-center">
                    <!-- <button class="btn btn-secondary buttons-41">New Games</button> -->
                    <a class="font-weight-bold btn" href="{{ route('teams') }}" id="menu">Team List</a>
                </div>
                <div class="col-12 col-lg-3 col-xs-3 col-buttons text-center">
                    <!-- <button class="btn btn-secondary buttons-41 active">Most - Liked</button> -->
                    <a class="font-weight-bold btn rounded main-gray" id="menu">Schedule</a>
                </div>
            </div>
        </div>
        <!-- Page Content -->

        <!-- Content Row -->
        <div class="row">

            <div class="col-12 col-lg-12 col-xs-12 mb-4">

            <!-- Approach -->
            @foreach ($schedules->sortBy('fight_at') as $schedule)
            @if ($schedule->status == null)
            <div class="card shadow mb-4 dropdown">
                <div class="card-header py-3" id="card-header">
                <div class="row">
                    <div class="col-2 col-lg-1 col-xs-1">
                    <img class="m-2" id="gambar-icon" src="{{ asset('img/logo_bgc.png') }}">
                    <!-- <i class="fa fa-file-image-o" aria-hidden="true"></i> -->
                    </div>
                    <div class="col-7 col-lg-8 col-xs-8 mb-2">
                    <div class="row">
                        <div class="col-12 col-lg-12 col-xs-12">
                        <h6 class="m-0 font-weight-bold" id="coloring">{{ $schedule->username_1->user_username }} VS {{ $schedule->username_2->user_username }}</h6>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-lg-12 col-xs-12">
                        <h6 class="m-0 font-weight-bold" id="coloring">{{ $schedule->team->name }}</h6>
                        </div>
                    </div>
                    </div>
                    <div class="col-12 col-lg-3 col-xs-3 text-right">
                    <div class="row">
                        <div class="col-12 col-lg-12 col-xs-12">
                        <h6 class="m-0 font-weight-bold" id="coloring">{{ Carbon\Carbon::parse($schedule->fight_at)->format('d M Y') }}</h6>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-lg-12 col-xs-12">
                        <h6 class="m-0 font-weight-bold" id="coloring2">{{ Carbon\Carbon::parse($schedule->fight_at)->format('H:i') }} WIB</h6>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            @endif

            @endforeach

            </div>
        </div>

    </div>
    <!-- /.container-fluid -->
</div>

{{-- <div>
    <form action="{{ route('teams.add-member',['code' => $team->code]) }}"
        class="d-inline">
        <button class="px-4 py-2 bg-primary border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition ml-4" type="submit">
            {{ __('Add Member') }}
        </button>
    </form>

    <form action="{{ route('teams.add-schedule',['code' => $team->code]) }}"
        class="d-inline">
        <button class="px-4 py-2 bg-primary border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition ml-4" type="submit">
            {{ __('Add Schedule') }}
        </button>
    </form>
</div> --}}

<div>
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Content Row -->
        <div class="row">
            <div class="col-12 col-lg-12 col-xs-12 mb-4">
                <!-- Approach -->
                <div class="card shadow mb-4" id="card1">
                    <div class="card-header py-3" id="card-header1">
                        <div class="row">
                            <div class="col-12 col-lg-12 col-xs-12 mb-2 text-center">
                                <h6 class="m-0 font-weight-bold" id="coloring">{{ $team->game->name }}</h6>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-lg-4 col-xs-4 m-auto" id="icon">
                                <div class="card shadow1 mb-2 m-auto" id="card2">
                                    <img class="card-header" id="card-header2" src="{{ asset('storage/' . $team->icon) }}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-lg-12 col-xs-12 mb-2 mt-2 text-center">
                                <h6 class="m-0 font-weight-bold" id="coloring">{{ $team->name }}</h6>
                            </div>
                        </div>
                    </div>

                    <div class="dropdown" aria-labelledby="icon">
                        <div class="card-body dropdown-item" id="card-body">
                            <div class="container col-lg-12 col-xs-12 container-buttons" id="coloring1">
                                <div class="row">
                                    <div class="col-12 col-lg-4 col-xs-3 col-buttons text-center">
                                        <!-- <button class="btn btn-warning buttons-4 active">Member</button> -->
                                        <a class="font-weight-bold btn" id="menu">Member</a>
                                    </div>
                                    <div class="col-12 col-lg-4 col-xs-3 col-buttons text-center">
                                        <!-- <button class="btn btn-warning buttons-4">Schedule</button> -->
                                        <a class="font-weight-bold btn btn-dark active" href="#" id="menu">Schedule</a>
                                    </div>
                                    <div class="col-12 col-lg-4 col-xs-3 col-buttons text-center">
                                        <!-- <button class="btn btn-warning buttons-4">Statistic</button> -->
                                        <a class="font-weight-bold btn" href="#" id="menu">Statistic</a>
                                    </div>
                                </div>
                            </div>
                            <!-- Page Content -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
</div>

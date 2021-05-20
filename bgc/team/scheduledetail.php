<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Schedule Detail</title>

  <!-- Custom styles for this template-->
  <link rel="stylesheet" href="../assets/css/bootstrap.css"> 
  <link rel="stylesheet" href="../assets/css/sb-admin-2.min.css">
  <link rel="stylesheet" href="../assets/css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body class="bg-dark">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-md-center">

      <div class="col-xl-8 col-lg-12 col-md-4">

        <div class="card o-hidden border-0 my-5">
               
          <!-- Card Body -->
          <div class="card-body" id="card-body">

            <!-- Begin Page Content -->
            <div class="container-fluid">
              
              <!-- Content Row -->
              <div class="row">

                <div class="col-12 col-lg-12 col-xs-12 mb-4">

                  <!-- Approach -->
                  <div class="card shadow mb-4" id="card1">
                    <div class="card-header py-3" id="card-header1">
                      <i class="fa fa-arrow-left text-white mx-3 my-3" aria-hidden="true" type="button" id="btn"></i>
                      <div class="row">
                        <div class="col-12 col-lg-12 col-xs-12 mb-2 text-center">
                          <h6 class="m-0 font-weight-bold" id="coloring">Alamat Game</h6>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-12 col-lg-4 col-xs-4 m-auto" id="icon">
                          <div class="card shadow1 mb-2 m-auto" id="card2">
                            <img class="card-header" id="card-header2" src="../assets/img/logo_bgc.png">
                          </div>
                        </div>
                        <!-- <div class="col-3 col-lg-1 col-xs-1 m-auto">
                          <div class="m-2" id="icon">
                            <i class="fa fa-file-image-o" aria-hidden="true"></i>
                          </div>
                        </div> -->
                      </div>
                      <div class="row">
                        <div class="col-12 col-lg-12 col-xs-12 mb-2 mt-2 text-center">
                          <h6 class="m-0 font-weight-bold" id="coloring">Game Name</h6>
                        </div>
                      </div>
                    </div>
                    
                    <div class="dropdown" aria-labelledby="icon">
                      <div class="card-body dropdown-item" id="card-body">
                        
                        <!-- <div class="container col-lg-12 col-xs-12 container-buttons">
                          <div class="row">
                            <div class="col-12 col-lg-4 col-xs-3 col-buttons text-center">
                              <button class="btn btn-warning buttons-4">Member</button>
                            </div>
                            <div class="col-12 col-lg-4 col-xs-3 col-buttons text-center">
                              <button class="btn btn-warning buttons-4 active">Schedule</button>
                            </div>
                            <div class="col-12 col-lg-4 col-xs-3 col-buttons text-center">
                              <button class="btn btn-warning buttons-4">Statistic</button>
                            </div>
                          </div>
                        </div> -->

                        <div class="container col-lg-12 col-xs-12 container-buttons" id="coloring1">
                          <div class="row">
                            <div class="col-12 col-lg-4 col-xs-3 col-buttons text-center">
                              <!-- <button class="btn btn-warning buttons-4 active">Member</button> -->
                              <a class="font-weight-bold btn-dark disabled" id="menu" type="button">Member</a>
                            </div>
                            <div class="col-12 col-lg-4 col-xs-3 col-buttons text-center">
                              <!-- <button class="btn btn-warning buttons-4">Schedule</button> -->
                              <a class="font-weight-bold btn-dark active" id="menu" type="button">Schedule</a>
                            </div>
                            <div class="col-12 col-lg-4 col-xs-3 col-buttons text-center">
                              <!-- <button class="btn btn-warning buttons-4">Statistic</button> -->
                              <a class="font-weight-bold btn-dark disabled" id="menu" type="button">Statistic</a>
                            </div>
                          </div>
                        </div>

                        <div class="row" id="coloring">
                          <div class="col-12 col-lg-9 col-xs-9">
                            <p class="text-large">Add Schedule</p>
                          </div>
                          <div class="col-12 col-lg-3 col-xs-3">
                          <p class="text-small text-center">
                          <button class="fa fa-plus fa-3x" aria-hidden="true" id="drop1"></button>
                        </p>
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-2 col-lg-1 col-xs-1 text-center">
                            <!-- <img class="m-2" id="gambar-icon" src="../assets/img/logo_bgc.png"> -->
                              <i class="fa fa-calendar m-2" id="icon2" aria-hidden="true"></i>
                          </div>
                          <div class="col-7 col-lg-8 col-xs-8 mb-2">
                            <div class="row">
                              <div class="col-12 col-lg-12 col-xs-12">
                                <h6 class="m-0 font-weight-bold" id="coloring">Username 1 VS Username 2</h6>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-12 col-lg-12 col-xs-12">
                                <div class="row">
                                  <div class="col-12 col-lg-6 col-xs-6">
                                    <h6 class="m-0 font-weight-bold" id="coloring2">DD - MM - YYYY</h6>
                                  </div>
                                  <div class="col-12 col-lg-6 col-xs-6">
                                    <h6 class="m-0 font-weight-bold" id="coloring2">Time WIB</h6>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-2 col-lg-1 col-xs-1 text-center">
                            <!-- <img class="m-2" id="gambar-icon" src="../assets/img/logo_bgc.png"> -->
                              <i class="fa fa-calendar m-2" id="icon2" aria-hidden="true"></i>
                          </div>
                          <div class="col-7 col-lg-8 col-xs-8 mb-2">
                            <div class="row">
                              <div class="col-12 col-lg-12 col-xs-12">
                                <h6 class="m-0 font-weight-bold" id="coloring">Username 3 VS Username 4</h6>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-12 col-lg-12 col-xs-12">
                                <div class="row">
                                  <div class="col-12 col-lg-6 col-xs-6">
                                    <h6 class="m-0 font-weight-bold" id="coloring2">DD - MM - YYYY</h6>
                                  </div>
                                  <div class="col-12 col-lg-6 col-xs-6">
                                    <h6 class="m-0 font-weight-bold" id="coloring2">Time WIB</h6>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>

                      </div>
                    </div>
                  </div>

                </div>
              </div>

            </div>
            <!-- /.container-fluid -->

          </div>

        </div>

      </div>

    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="../assets/js/jquery.js"></script> 
	<script src="../assets/js/popper.js"></script> 
  <script src="../assets/js/bootstrap.js"></script>
  <script src="../assets/js/sb-admin-2.min.js"></script>

</body>

</html>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Add Schedule</title>
  
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

          <!-- Card -->
          <div class="card-body bg-dark">
          <!-- <div class="bg-dark card-body p-0"> kalo udah fix hitam baru dipake -->
            
            <!-- Nested Row within Card Body -->
            <div class="row" id="card">
              <div class="col-lg-2"></div>
              <div class="col-lg-8">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 mb-4" id="coloring1">Add Schedule</h1>
                  </div>
                  <form class="user">
                    <div class="form-group">
                      <input type="text" name="username1" id="username1" class="form-control form-control-user" placeholder="Username #1" required>
                    </div>
                    <div class="form-group">
                      <input type="text" name="username2" id="username2" class="form-control form-control-user" placeholder="Username #2" required>
                    </div>
                    <div class="form-group">
                      <div class="row">
                        <div class="col-6 col-lg-6 col-xs-6">
                          <input type="date" name="date" id="date" class="form-control form-control-user" placeholder="Date" required>
                        </div>
                        <div class="col-6 col-lg-6 col-xs-6">
                           <input type="text" name="time" id="time" class="form-control form-control-user timepicker" placeholder="Time" required>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="row">
                      </div>
                    </div>
                    <input type="submit" value="Add Schedule" name="add_schedule" class="btn btn-primary btn-user btn-block">
                    <input type="submit" value="Back" name="back" class="btn btn-secondary btn-user btn-block">
                  </form>
                </div>
              </div>
              <div class="col-lg-2"></div>
            </div>
          
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
  <script src="../assets/js/bootstrap-timepicker.js"></script>
  <script>
    $('.timepicker').timepicker({
    showInputs: false,
    showMeridian: false
    })
  </script>

</body>

</html>

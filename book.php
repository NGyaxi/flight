<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Client</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="vendors/base/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />
</head>
<body>
  <div class="container-scroller">

    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <div class="navbar-brand-wrapper d-flex justify-content-center">
        <div class="navbar-brand-inner-wrapper d-flex justify-content-between align-items-center w-100">  
          <a class="navbar-brand brand-logo" href="index.html"><img src="images/a.png" alt="logo"/></a>
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-sort-variant"></span>
          </button>
        </div>  
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item dropdown mr-4">
            <a class="nav-link count-indicator dropdown-toggle d-flex align-items-center justify-content-center notification-dropdown" id="notificationDropdown" href="#" data-toggle="dropdown">
              <i class="mdi mdi-bell mx-0"></i>
              <span class="count"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="notificationDropdown">
              <p class="mb-0 font-weight-normal float-left dropdown-header">Notifications</p>
              <a class="dropdown-item">
                <div class="item-thumbnail">
                  <div class="item-icon bg-success">
                    <i class="mdi mdi-information mx-0"></i>
                  </div>
                </div>
                <div class="item-content">
                  <h6 class="font-weight-normal">Booking Error</h6>
                  <p class="font-weight-light small-text mb-0 text-muted">
                    Just now
                  </p>
                </div>
              </a>
              <a class="dropdown-item">
                <div class="item-thumbnail">
                  <div class="item-icon bg-warning">
                    <i class="mdi mdi-settings mx-0"></i>
                  </div>
                </div>
                <div class="item-content">
                  <h6 class="font-weight-normal">Settings</h6>
                  <p class="font-weight-light small-text mb-0 text-muted">
                    Private message
                  </p>
                </div>
              </a>
              <a class="dropdown-item">
                <div class="item-thumbnail">
                  <div class="item-icon bg-info">
                    <i class="mdi mdi-account-box mx-0"></i>
                  </div>
                </div>
                <div class="item-content">
                  <h6 class="font-weight-normal">New user registration</h6>
                  <p class="font-weight-light small-text mb-0 text-muted">
                    2 days ago
                  </p>
                </div>
              </a>
            </div>
          </li>
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
              <i class="mdi mdi-account-circle icon-lg text-primary"></i>
              <span class="nav-profile-name">Name Here</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
              <a class="dropdown-item">
                <i class="mdi mdi-settings text-primary"></i>
                Settings
              </a>
              <a class="dropdown-item" href="./home.html">
                <i class="mdi mdi-logout text-primary"></i>
                Logout
              </a>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>

    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="client.php">
              <i class="mdi mdi-home menu-icon"></i>
              <span class="menu-title">Home</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="mybookings.php">
              <i class="mdi mdi-clipboard menu-icon"></i>
              <span class="menu-title">My Bookings</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="airline.php">
              <i class="mdi mdi-receipt menu-icon"></i>
              <span class="menu-title">My Tickets</span>
            </a>
          </li> 
          <li class="nav-item">
            <a class="nav-link" href="airline.php">
              <i class="mdi mdi-settings menu-icon"></i>
              <span class="menu-title">settings</span>
            </a>
          </li>     
        </ul>
      </nav>

      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-md-12 grid-margin">
                  <div class="d-flex justify-content-between flex-wrap">
                    <div class="d-flex align-items-end flex-wrap">
                      <div class="mr-md-3 mr-xl-5">
                        <h2>Booking History</h2>
                      </div>
                      <div class="d-flex">
                        <i class="mdi mdi-home text-muted hover-cursor"></i>
                        <p class="text-muted mb-0 hover-cursor">&nbsp;/&nbsp;Dashboard&nbsp;/&nbsp;</p>
                        <p class="text-muted mb-0 hover-cursor"></p>
                        <p class="text-primary mb-0 hover-cursor">&nbsp;Bookings&nbsp;</p>
                      </div>
                    </div>
                    <div class="d-flex justify-content-between align-items-end flex-wrap">
                      <button type="button" class="btn btn-light bg-white btn-icon mr-3 d-none d-md-block ">
                        <i class="mdi mdi-download text-muted"></i>
                      </button>
                      <button type="button" class="btn btn-primary">
                        <i class="mdi mdi-printer "></i>
                      </button>
                    
                    </div>
                  </div>
                </div>
              </div>     
        </div>
        <!-- content-wrapper ends -->
                  <div class="row">  
            <div class="col-12 grid-margin">
                <div class="container">
                  <header>Add Flight</header>
                    <form action="" method="POST">
                    <div class="form first">
                      <div class="details personal">
                        <span class="title">Flight Details</span>
                        <div class="fields">
                        <div class="input-field">
                            <label>Flight Name</label>
                            <input type="text" name="flightname" placeholder="Enter Flight Name" value="<?php echo $flightname ?>" required>
                        </div>
                        <div class="input-field">
                            <label>Take of Date</label>
                            <input type="date" name="departDate" value="<?php echo $departDate ?>" placeholder="Enter Take of Date" required>
                        </div>
                        <div class="input-field">
                            <label>Take of Point</label>
                            <input type="text" name="departFrom" placeholder="Enter Take of Point" value="<?php echo $departFrom ?>" required>
                        </div>
                        <div class="input-field">
                            <label>Total Seat</label>
                            <input type="number" name="totalSeat" placeholder="Enter Total Seat" value="<?php echo $totalSeat ?>" required>
                        </div>
                        <div class="input-field">
                            <label>Class</label>
                            <select required name="route">
                                <option selected><?php echo $route ?></option>
                                <option>Transit</option>
                                <option>Striaght</option>
                            </select>
                        </div>
                        <div class="input-field">
                            <label>Arrival Point</label>
                            <input type="text" name="departTo" value="<?php echo $departTo ?>" placeholder="Enter your Arrival Point" required>
                        </div>
                    </div>
                </div>
                <div class="details ID">
                        <div class="fields">
                          <div class="input-field">
                              <label>Flight ID</label>
                              <input type="text" name="id" placeholder="Enter ID " value="<?php echo $id ?>" required>
                            </div>
                        </div>
                        <button type="submit">
                            <span class="btnText">Update</span>
                        </button>
                        </div> 
                    </div>
                  </form>
                </div>
            </div>
          </div>
        </div>
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2023 <a href="https://www.urbanui.com/" target="_blank">Easy-flight</a>. All rights reserved.</span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="vendors/base/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src="vendors/chart.js/Chart.min.js"></script>
  <script src="vendors/datatables.net/jquery.dataTables.js"></script>
  <script src="vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="js/dashboard.js"></script>
  <script src="js/data-table.js"></script>
  <script src="js/jquery.dataTables.js"></script>
  <script src="js/dataTables.bootstrap4.js"></script>
  <!-- End custom js for this page-->
</body>

</html>


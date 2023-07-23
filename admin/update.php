<?php

//require_once "functions.php";


$id = $_GET['id'] ?? null;
if (!$id) {
    header('Location: index.php');
    exit;
}

$pdo = new PDO('mysql:host=localhost;port=3306;dbname=flight', 'root', '');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$statement = $pdo->prepare('SELECT * FROM airlines_table WHERE id = :id');
$statement->bindValue(':id', $id);
$statement->execute();
$product = $statement->fetch(PDO::FETCH_ASSOC);


$errors = [];
$id= $product['id'];
$departFrom = $product['takeOffpoint'];
$flightname = $product['flight_name'];
$departTo =$product['destination'];
$totalSeat =$product['totalSeat'];
$departDate = $product['takeOffdate'];
$route = $product['flight_name'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $departFrom = $_POST['departFrom'];
    $flightname = $_POST['flightname'];
    $totalSeat = $_POST['totalSeat'];
    $departDate = $_POST['departDate'];
    $departTo = $_POST['departTo'];
    $route = $_POST['route'];


    if (!$flightname) {
        $errors[] = 'Flight Name is required';
    }

    if (empty($errors)) {
        $statement = $pdo->prepare("UPDATE airlines_table SET flight_name = :flight_name, 
                                        takeOffpoint = :takeOffpoint, 
                                        takeOffdate = :takeOffdate,
                                        destination = :destination, 
                                        route = :route,
                                        totalSeat = :totalSeat WHERE id = :id");
        $statement->bindValue(':flight_name', $flightname);
        $statement->bindValue(':takeOffpoint', $departFrom);
        $statement->bindValue(':destination', $departTo);
        $statement->bindValue(':takeOffdate', $departDate);
        $statement->bindValue(':totalSeat', $totalSeat);
        $statement->bindValue(':route', $route);
        $statement->bindValue(':id', $id);

       $pfd= $statement->execute();
       
        if ($pfd) {
         # code...
        ?>
        <script>
          let as = Swal.fire({
                    icon: 'success',
                    title: 'Data Have Been Add',
                    text: 'Something went wrong!'
                  });
        </script>
        <?php 
header('Location: airline.php');
        }
    }


}


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="vendors/base/vendor.bundle.base.css">

  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/add.css">

  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <!-- partial:../../partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <div class="navbar-brand-wrapper d-flex justify-content-center">
        <div class="navbar-brand-inner-wrapper d-flex justify-content-between align-items-center w-100">  
          <a class="navbar-brand brand-logo" href="index.html"><img src="images/a.png" alt="logo"/></a>
          <a class="navbar-brand brand-logo-mini" href="index.html"><img src="images/logo-mini.svg" alt="logo"/></a>
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
      <!-- partial:../../partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="index.php">
              <i class="mdi mdi-home menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="airline.php">
              <i class="mdi mdi-airplane menu-icon"></i>
              <span class="menu-title">Airlines</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="bookings.php">
              <i class="mdi mdi-chart-pie menu-icon"></i>
              <span class="menu-title">Bookings</span>
            </a>
          </li>
        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">        
        <div class="content-wrapper">
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
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2018 <a href="https://www.urbanui.com/" target="_blank">Urbanui</a>. All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="mdi mdi-heart text-danger"></i></span>
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
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="js/file-upload.js"></script>
  <!-- End custom js for this page-->
</body>

</html>

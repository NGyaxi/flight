<?php


$errors = [];
$flight_id = '';
$departFrom = '';
$flightname = '';
$departTo ='';
$totalSeat ='';
$departDate = '';
$route = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['flight_id'];
    $departFrom = $_POST['departFrom'];
    $flightname = $_POST['flightname'];
    $totalSeat = $_POST['totalSeat'];
    $departDate = $_POST['departDate'];
    $departTo = $_POST['departTo'];
    $route = $_POST['route'];


    if (!$flightname) {
        $errors[] = 'Flight Name is required';
    }

      $statement = $pdo->prepare('SELECT * FROM airlines_table WHERE id = :id');
      $statement->bindValue(':id', $id);
      $statement->execute();
      $product = $statement->fetch(PDO::FETCH_ASSOC);

      if ($product<1) {
        # code...
      
    if (empty($errors)) {
        $statement = $pdo->prepare("INSERT INTO airlines_table (id,flight_name, takeOffpoint, destination, totalSeat, takeOffdate,route)
                VALUES (:id, :flight_name, :takeOffpoint, :destination, :totalSeat, :takeOffdate, :route)");
        $statement->bindValue(':flight_name', $flightname);
        $statement->bindValue(':takeOffpoint', $departFrom);
        $statement->bindValue(':destination', $departTo);
        $statement->bindValue(':takeOffdate', $departDate);
        $statement->bindValue(':totalSeat', $totalSeat);
        $statement->bindValue(':route', $route);
        $statement->bindValue(':id', $id);
        

       $pfd = $statement->execute();
       if ($pfd) {
         # code...
        ?>
        <script>
          let as = Swal.fire({
                    icon: 'success',
                    title: 'Data Have Been Add',
                    text: 'Something went wrong!'
                  });
            if (as) {
                setTimeout(function() {
                window.location.reload()
              },2000);
            }
        </script>
        <?php 

        }
    }

    }

}


?>


!<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" dir="ltr">
    <title>PHP CRUD</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

  </head>
  <body>
    <?php require_once 'process.php'; ?>

    <?php
      if(isset($_SESSION['message'])): ?>

      <div class="alert alert-<?=$_SESSION['msg_type']?>">
        <?php
          echo $_SESSION['message'];
          unset($_SESSION['message']);
        ?>

      </div>
    <?php endif ?>
    <div class="container">

    <?php
      $mysqli = new mysqli('localhost','root','','demo') or die(mysqli_error($mysqli));
      $result = $mysqli->query("SELECT * FROM data") or die($mysqli->error);
      // pre_r($result);
      ?>

      <div class="row justify-content-center">
        <table class="table">
          <thead>
            <tr>
              <!-- <th>Index</th> -->
              <th>Name</th>
              <th>Location</th>
              <th>age</th>
              <th>sex</th>

             
            </tr>
          </thead>

          <?php
              while ($row = $result->fetch_assoc()): ?>

            <tr>
              <!-- <td><?php //echo $row['id']; ?></td> -->
              <td><?php echo $row['name']; ?></td>
              <td><?php echo $row['location']; ?></td>
              <td><?php echo $row['age']; ?></td>
              <td><?php echo $row['sex']; ?></td>
          

            </tr>

          <?php endwhile; ?>
        </table>
      </div>

      <?php

      function pre_r($array) {
        echo '<pre>';
        print_r($array);
        echo '</pre>';
      }

     ?>
     <li><a href="delete.php">Delete Data</li>
  <li><a href="update.php">Update Data</li>
  <li><a href="view.php">View Data</li>

   


  
  </body>
</html>

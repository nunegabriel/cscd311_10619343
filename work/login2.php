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
              <th colspan="4">Action</th>
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
              <td>
                <a href="login2.php?edit=<?php echo $row['id'];?>" class="btn btn-info">Edit</a>
                <a href="process.php?delete=<?php echo $row['id'];?>" class="btn btn-danger">Delete</a>
              </td>

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

    <div class="row justify-content-center">
      <form class="" action="process.php" method="POST">
          <input type="hidden" name="id" value="<?php echo $id;?>">
          <div class="form-group">
            <label for="">Name</label>
            <input class="form-control" type="text" name="name" placeholder="Enter your name" value="<?php echo $name;?>">
          </div>

          <div class="form-group">
            <label for="">Location</label>
            <input class="form-control" type="text" name="location" placeholder="Enter your location" value="<?php echo $location; ?>">
          </div>
          <div class="form-group">
            <label for="">age</label>
            <input class="form-control" type="number" name="age" placeholder="Enter your age" value="<?php echo $age; ?>">
          </div>
         <!--  <div class="form-group">
            <label for="">sex</label>
            <input class="form-control" type="text" name="sex" placeholder="Enter your sex" value="<?php echo $sex; ?>">
          </div> -->
           


          <div class="form-group">
            <?php
              if ($update == true):
           ?>
            <button class="btn btn-info" type="submit" name="update">Update</button>
          <?php else: ?>

            <button class="btn btn-primary" type="submit" name="save">Save</button>
          <?php endif; ?>
          </div>
      </form>
    </div>


  </div>
  </body>
</html>

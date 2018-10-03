<!DOCTYPE html>
<html lang="en">
  <head>
  <title>DELETE ENTRIES</title>
  <center>
  <p style="color:white;font-size:50px">DELETE ENTRY!</p>
  </center>

    <meta charset="utf-8" dir="ltr">
    <title>PHP CRUD</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
       <style>
      body{
            background-image:url("nude.png");
            background-size:cover;
            background-position:center;
          }
     </style>

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
              <th style="color:white;font-size:larger">Name</th>
              <th style="color:white;font-size:larger">Location</th>
              <th style="color:white;font-size:larger">Age</th>
              <th style="color:white;font-size:larger"colspan="2">Action</th>
            </tr>
          </thead>

          <?php
              while ($row = $result->fetch_assoc()): ?>

            <tr>
              <!-- <td><?php //echo $row['id']; ?></td> -->
              <td style="color:white;font-size:larger"><?php echo $row['name']; ?></td>
              <td style="color:white;font-size:larger"><?php echo $row['location']; ?></td>
              <td style="color:white;font-size:larger"><?php echo $row['age']; ?></td>
              <td>
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
     <li><a href="delete.php">Delete Data</li>
	<li><a href="admin.php">Home</li>
	<li><a href="view.php">View Data</li>
	<li><a href="add.php">ADD Data</li>

  


  </body>
</html>

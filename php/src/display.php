<?php

include 'connect.php';

 ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.rtl.min.css">

    <title>Crud Operation</title>
  </head>
  <body>
    <div class="container">

      <button class="btn btn-primary my-5"><a href="index.php" class="text-light">Add User</a></button>
      <table class="table">
  <thead>
    <tr>
      <th scope="col">S No</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Mobile</th>
      <th scope="col">Password</th>
      <th scope="col">Operations</th>
    </tr>
  </thead>
  <tbody>

    <?php
      $sql="SELECT * from crud ";
      $result=mysqli_query($con,$sql);
      if($result){


        while($row=mysqli_fetch_assoc($result)){
        //  echo $row['mobile'];
          $id=$row['id'];
          $name=$row['name'];
          $email=$row['email'];
          $mobile=$row['mobile'];
          $password=$row['password'];
          echo '  <tr>
              <th scope="row">'.$id.'</th>
              <td>'.$name.'</td>
              <td>'.$email.'</td>
              <td>'.$mobile.'</td>
              <td>'.$password.'</td>
              <td>
                <button class="btn btn-primary" ><a href="" class="text-light">Update</a></button>
                <button class="btn btn-danger"><a href="delete.php?deleteid='.$id.'" class="text-light">Delete</a></button>
              </td>
            </tr>';
        }
      }


     ?>


  </tbody>
</table>
    </div>
  </body>
</html>

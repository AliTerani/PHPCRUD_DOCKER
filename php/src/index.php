<?php

include 'connect.php';
if(isset($_POST['submit'])){
  $name=$_POST['name'];
  $email=$_POST['email'];
  $mobile=$_POST['mobile'];
  $password=$_POST['password'];


  $query = "INSERT INTO crud(name, email, mobile,password)";

            $query .= "VALUES('{$name}','{$email}','{$mobile}','{$password}') ";

            $result= mysqli_query($con, $query);

            //confirmQuery($create_user_query);


  //$sql="insert into 'crud' (name,email,mobile,password)
//  values('$name','$email','$mobile','$password')";
//  $result=mysqli_query($con,$sql);

  if ($result) {
  //  echo "Saved";
  header('location:display.php');
  }else {
    die(mysqli_error($con));
  }
}
 ?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.rtl.min.css">

    <title>Crud Example</title>
  </head>
  <body>
    <div class="container my-5">

      <form method="post">
        <div class="mb-3">
          <label class="form-label">Name</label>
          <input type="text" class="form-control" placeholder="Enter your name" name="name" autocomplete="off">
        </div>

        <div class="mb-3">
          <label class="form-label">Email</label>
          <input type="email" class="form-control" placeholder="Enter your email" name="email" autocomplete="off">
        </div>

        <div class="mb-3">
          <label class="form-label">Mobile Number</label>
          <input type="text" class="form-control" placeholder="Enter your mobile number" name="mobile" autocomplete="off">
        </div>

        <div class="mb-3">
          <label class="form-label">Password</label>
          <input type="text" class="form-control" placeholder="Enter your password" name="password" autocomplete="off">
        </div>

        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
      </form>


    </div>
  </body>
</html>

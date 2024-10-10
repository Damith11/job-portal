
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Signin Template for Bootstrap</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/sign-in/">

    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/signin.css" rel="stylesheet">
    <style>


    </style>
  </head>

  <body class="text-center">
    <div class="container">
    <form class="form-signin" action="Sign_up.php"  method="POST" onsubmit="return validateForm()">
     
              <h1 class="h3 mb-3 font-weight-normal">Create Account</h1>

              <label for="inputEmail" class="sr-only">Email address</label>
              <input type="email" id="email" name="email" id class="form-control" placeholder="Email address" required autofocus >

              <label for="inputPassword" class="sr-only">Password</label>
              <input type="password" id="password" name="password" class="form-control" placeholder="Password" required autofocus>

              <label for="inputFrist_Name" class="sr-only">Frist Name</label>
              <input type="text" id="frist_name" name="frist_name" class="form-control" placeholder="Enter Frist Name" required autofocus>

              <label for="inputLast_Name" class="sr-only">Last Name</label>
              <input type="text" id="last_name" name="last_name" class="form-control" placeholder="Enter Last Name" required autofocus>

              <label for="inputNumber" class="sr-only">Mobile Number</label>
              <input type="number" id="mobile_number" name="mobile_number" class="form-control" placeholder="Enter Mobile Number" required autofocus>

              <label for="inputdob" class="sr-only">Date of Birth</label>
              <input type="date" id="dob" name="dob" class="form-control" placeholder="Enter Date of Birth" required autofocus>

              <!-- <div class="checkbox mb-3">
                <label>
                  <input type="checkbox" value="remember-me"> Remember me
                </label>
              </div> -->
              <br>
              <input type="submit" class="btn btn-lg btn-primary btn-block" name="submit" id="submit" value="Sign Up">
              <a href="job-post.php"> Already Account </a>
              <p class="mt-5 mb-3 text-muted">&copy; 2022-2023</p>
    </form>
  </div>
  </body>
</html>


<script>
            function validateForm() {
              var frist_name = document.getElementById('frist_name');
              var last_name = document.getElementById('last_name');

              // Check if the name field is empty.
              if (frist_name.value === '') {
                alert('Please enter your name.');
                return false;
              }

              // Check if the name field contains any numbers.
              if (/[\d]/.test(frist_name.value)) {
                alert('The name field must not contain any numbers.');
                return false;
              }


              if (last_name.value === '') {
                alert('Please enter your name.');
                return false;
              }

              // Check if the name field contains any numbers.
              if (/[\d]/.test(last_name.value)) {
                alert('The name field must not contain any numbers.');
                return false;
              }


              // The form data is valid.
              return true;
            }
  </script>






<?php

    include ('connection/db.php');

    
      if (isset($_POST['submit'])){
        $email =$_POST['email'];
        $password =$_POST['password'];
        $frist_name =$_POST['frist_name'];
        $last_name =$_POST['last_name'];
        $mobile_number =$_POST['mobile_number'];
        $dob =$_POST['dob'];

        $query =mysqli_query($conn,"INSERT INTO jobskeer (email,password,frist_name,last_name,mobile_number,dob)
                                            VALUE('$email','$password','$frist_name','$last_name','$mobile_number','$dob')");

        var_dump($query);
        if ($query){
            echo"<script> alert('Now You Can Login')</script>";
            header('location:job-post.php');
        }
        else{
            echo"<script> alert('Some Error')</script>";
        }
      }



?>

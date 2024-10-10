<?php
  
?>



<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Cover Template for Bootstrap</title>

    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>

<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Custom styles for this template -->
    <link href="css/apply.css" rel="stylesheet">
  </head>

  <body class="text-center">

    <div class="cover-container d-flex h-100 p-3 mx-auto flex-column">
      <!-- <header class="masthead mb-auto">
        <div class="inner">
          <h3 class="masthead-brand">Cover</h3>
          <nav class="nav nav-masthead justify-content-center">
            <a class="nav-link active" href="#">Home</a>
            <a class="nav-link" href="#">Features</a>
            <a class="nav-link" href="#">Contact</a>
          </nav>
        </div>
      </header> -->

      <main role="main" class="inner cover">
        <h1 class="cover-heading"></h1>    
        
        <?php

session_start();
include('connection/db.php');

      $img=$_FILES['img']['name'];
      $user_email=$_SESSION['email'];
     $name=$_POST['name'];
     $dob=$_POST['dob'];
     $number=$_POST['number'];
     $email=$_POST['email'];

$tmp_name =$_FILES['img']['tmp_name'];

$sql=mysqli_query($conn,"SELECT * FROM profiles WHERE user_email='{$_SESSION['email']}'");

$sql_check=mysqli_num_rows($sql);
//   var_dump($sql);
  if(!empty($sql_check)){


     $query=mysqli_query($conn,"UPDATE profiles SET img='$img',name='$name',dob='$dob',number='$number',email='$email',user_email='$user_email'");

     if($query){
     echo"<h1> Profile Update Successfull  !! </h1>";
     }
     else {
     echo"<h1> Some Error  !! </h1>";
     }


  }

 else{
         move_uploaded_file($_FILES["img"]["tmp_name"],'profile/'.$img);

         $query=mysqli_query($conn,"INSERT INTO profiles(img,name,dob,number,email,user_email)
                                 VALUES('$img','$name','$dob','$number','$email','$user_email')");
             
             if($query){
                 echo"<h1> Profile Added Successfull  !! </h1>";
             }
             else {
                 echo"<h1> Some Error  !! </h1>";
             }


}

?>
        
       

       
       
       
        <p class="lead">
          <a href="http://localhost/job_portal/my_profile.php" class="btn btn-lg btn-secondary">Back</a>
        </p>
      </main>

      <!-- <footer class="mastfoot mt-auto">
        <div class="inner">
          <p>Cover template for <a href="https://getbootstrap.com/">Bootstrap</a>, by <a href="https://twitter.com/mdo">@mdo</a>.</p>
        </div>
      </footer>
    </div>
 -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
  </body>
</html>

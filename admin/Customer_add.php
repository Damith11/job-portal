<?php

include 'connection/db.php';

     $email      =$_POST['email'];
     $Username   =$_POST['Username'];
     $password   =$_POST['password'];
     $frist_name =$_POST['frist_name'];
     $last_name  =$_POST['last_name'];
     $admin_type =$_POST['admin_type'];


  $query =mysqli_query($conn,"insert into admin_login(
        admin_email,admin_pass,admin_username,frist_name,last_name,admin_type)
        
        values('$email','$password','$Username','$frist_name','$last_name','$admin_type')" );

    //var_dump($query);
    if ($query){
        echo "<div class ='  alert-success'> Data has been Successfull Inserted </div>" ;
        //header('location:Customers.php');
    }
    else{
        echo " <div class ='alert  alert-danger'> Some error Try Again </div>";
    }


?>
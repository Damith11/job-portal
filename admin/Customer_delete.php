<?php

include ('connection/db.php');

$del=$_GET['del'];

$query=mysqli_query($conn,"delete FROM admin_login WHERE id='$del'");
if ($query){
    echo"<script> alert('Record has been successfull Deleted !!!')</script>";
    header('location:Customers.php');
}
else{
    echo"<script> alert('some error')</script>"; 
}

?>
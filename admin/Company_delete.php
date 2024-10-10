<?php

include ('connection/db.php');

$del=$_GET['del'];

$query=mysqli_query($conn,"DELETE FROM company WHERE company_id='$del'");
if ($query){
    echo"<script> alert('Record has been successfull Deleted !!!')</script>";
    header('location:Create_company.php');
}
else{
    echo"<script> alert('some error')</script>"; 
}

?>
<?php

include ('connection/db.php');

$del=$_GET['del'];

$query=mysqli_query($conn,"delete FROM all_jobs WHERE job_id='$del'");
if ($query){
    echo"<script> alert('Record has been successfull Deleted !!!')</script>";
    header('location:Job_create.php');
}
else{
    echo"<script> alert('some error')</script>"; 
}

?>
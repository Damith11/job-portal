<?php

include 'connection/db.php';

     $category     =$_POST['category'];
     $Description  =$_POST['Description'];
     


  $query =mysqli_query($conn," INSERT INTO  job_category(
        category,des)
        
        VALUES('$category','$Description')" );

    //var_dump($query);
    if ($query){
        echo "Data has been Successfull Inserted " ;
       header('location:http://localhost/job_portal/admin/add_category.php');
    }
    else{
        echo "Some error Try Again ";
    }


?>
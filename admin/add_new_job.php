<?php
session_start();

include 'connection/db.php';
   
     $login= $_SESSION['email'];

     $Job_Title      =$_POST['Job_Title'];
     $Description  =$_POST['Description'];
     $keyword  =$_POST['keyword'];
     $category =$_POST['category'];
     $country   =$_POST['country'];
     $state     =$_POST['state'];
     $city    =$_POST['city'];
    
    
    
        $query =mysqli_query($conn," INSERT INTO all_jobs(
            customer_email,job_title,des,keyword,category,country,state,city)
                
                values('$login','$Job_Title','$Description','$keyword','$category','$country','$state','$city')" );

            // var_dump($query);
            if ($query){
                echo "Data has been Successfull Inserted " ;
            }
            else{
                echo "Some error Try Again ";
            }

            
?>



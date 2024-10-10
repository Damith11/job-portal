<?php

include ('connection/db.php');
include('include/header.php');
include('include/sidebar.php');

$id=$_GET['edit'];
$query=mysqli_query($conn,"SELECT * FROM admin_login WHERE id='$id'");
while($row=mysqli_fetch_array($query)){
     $email          =$row['admin_email'];
     $admin_pass     =$row['admin_pass'];
     $admin_username =$row['admin_username'];  
     $frist_name     =$row['frist_name'];
     $last_name      =$row['last_name'];
     $admin_type     =$row['admin_type'];
     
}

?>
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="admin_dashboard.php">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="Customers.php">Customers</a></li>
                    <li class="breadcrumb-item"><a href="Customers.php">Update Customer</a></li>
                   
                </ol>
                </nav>
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
          <h1 class="h2">Update Customer</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">
                
              </div>
              <!-- <a class="btn btn-primary" href="add_customers.php"> Add Customers  </a> -->
            </div>
          </div>
          
          <div>
              <div style="width: 60%; background-color: #ecf0f1; margin-left:20%;">
                 <form action="" method="POST" style ="margin:3%; padding:3%; " name="customer_form" id="customer_form">   

                 <div id="msg"> </div>

                  <div class = "form-group">
                     <label for="Customer Email">Enter Email</label>
                     <input type ="email" name="email" id="email" value="<?php echo $email ;?>" class="form-control" placeholder="Enter Customer Email">
                  </div>
  
                  <div class = "form-group">
                     <label for="password">Enter Passwoed</label>
                     <input type ="password" name="password" id="password" value="<?php echo $admin_pass ;?>" class="form-control" placeholder="Enter password">
                  </div>

                  <div class = "form-group">
                     <label for="Customer Username">Enter Username</label>
                     <input type ="text" name="Username" id="Username" value="<?php echo $admin_username;?>" class="form-control" placeholder="Enter Customer Username">
                  </div>

                  <div class = "form-group">
                     <label for="Frist name">Enter Frist Name</label>
                     <input type ="text" name="frist_name" id="frist_name" value="<?php echo  $frist_name ;?>"  class="form-control" placeholder="Enter Frist name">
                  </div>

                  <div class = "form-group">
                     <label for="Last name">Enter Last Name</label>
                     <input type ="text" name="last_name" id="last_name" value="<?php echo  $last_name ;?>" class="form-control" placeholder="Enter last name">
                  </div>

                  <div class = "form-group">
                     <label for="Admin Type">Admin Type</label>
                     <select name = "admin_type" name="admin_type" value="<?php echo  $admin_type ;?>" class="form-control" id="admin_type">
                        <option value ="1"> Super Admin </option>
                        <option value ="2"> Customer Admin </option>
                     </select>
                  </div>
         
                   <input type="hidden" name="id" id="id" value="<?php echo $_GET['edit'];?>">
        
                  <div class = "form-group">  
                     <input type ="submit" class="btn btn-block btn-success" placeholder="Update" name ="submit" id="submit">
                  </div>
        
             </form>
           </div>
         </div>

          <canvas class="my-4" id="myChart" width="900" height="380"></canvas>

         
          <div class="table-responsive">
           
          </div>
        </main>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>

    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
      feather.replace()
    </script>

    <!-- Graphs -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/chart.js@2.7.1/dist/Chart.min.js"></script> -->

      <!-- datatable plugin -->

       <script src="https://code.jquery.com/jquery-3.7.0.js">  </script>
       <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js">  </script>

       <script> new DataTable('#example');</script>

          
       <!-- <script>
          $(document).ready(function(){
          $("#submit").click(function(){
              var email=$("#email").val();
              var Username=$("#Username").val();
              var password=$("#password").val();
              var frist_name=$("#frist_name").val();
              var last_name=$("#last_name").val();
              var admin_type=$("#admin_type").val();
              var data = $("#customer_form").serialize();

                $.ajax({
                     
                    type:"POST",
                    url:"Customer_add.php",
                    data:data,
                    success:function(data){
                       // $("#msg").html(data);
                       alert(data);
                    }
 
                });
          });
          });
          </script> -->

   
  </body>
</html>

<?php

include ('connection/db.php');


    if(isset($_POST['submit'])){

        $id=$_POST['id'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $Username=$_POST['Username'];
        $frist_name=$_POST['frist_name'];
        $last_name=$_POST['last_name'];
        $admin_type=$_POST['admin_type'];


      $quer=mysqli_query($conn,"UPDATE admin_login SET admin_email='$email', 
                                                    admin_pass='$password', 
                                                    admin_username='$Username' , 
                                                    frist_name ='$frist_name', 
                                                    last_name = '$last_name' , 
                                                    admin_type='$admin_type'
                                                    WHERE id='$id'");

        if($query){
            echo"<script> alert('Record has been successfull Update !!!')</script>";
        }
        else{
            echo"<script> alert('Some error Updated !!!')</script>";
        }

    }


   

?>

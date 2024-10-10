<?php

include ('connection/db.php');
include('include/header.php');
include('include/sidebar.php');

$id=$_GET['edit'];
$query=mysqli_query($conn,"SELECT * FROM company WHERE company_id='$id'");
while($row=mysqli_fetch_array($query)){
     $company          =$row['company'];
     $des              =$row['des'];
     $admin              =$row['admin'];
     
}

?>
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="admin_dashboard.php">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="Create_company.php">Company</a></li>
                    <li class="breadcrumb-item"><a href="#">Update Company</a></li>
                   
                </ol>
                </nav>
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
          <h1 class="h2">Update Company</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">
                
              </div>
              <!-- <a class="btn btn-primary" href="add_customers.php"> Add Customers  </a> -->
            </div>
          </div>
          
          <div>
              <div style="width: 60%; background-color: #ecf0f1; margin-left:20%;">
                 <form action="" method="POST" style ="margin:3%; padding:3%; " name="company_edit_form" id="company_edit_form">   

                 <div id="msg"> </div>

                  <div class = "form-group">
                     <label for="company">Enter Company Name  </label>
                     <input type ="text" name="company" id="company" value="<?php echo $company;?>" class="form-control" placeholder="Enter Company Name  ">
                  </div>
  
                  <div class = "form-group">
                     <label for="Description">Enter Description</label>
                     <textarea name="des" id="des"  class="form-control" cols="30" rows="10" > <?php echo $des;?>  </textarea>
                
               </div>

                   <div class = "form-group">
                     <label for="Select_Admin">Select Admin</label>
                     <select name="admin" id="admin" class="form-control">
                       
                     <?php
                      include 'connection/db.php';

                      $sql =mysqli_query($conn,"SELECT * FROM admin_login WHERE admin_type='2'"); 

                       while($row=mysqli_fetch_array($sql)){ ?>
                        <option value="<?php echo $row ['admin_email']; ?>" > <?php echo $row ['admin_email']; ?> </option>

                       <?php

                       }
                     
                     ?>
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

   

   
  </body>
</html>

<?php

include ('connection/db.php');


    if(isset($_POST['submit'])){

        $id=$_POST['id'];
        $Company=$_POST['company'];
        $des=$_POST['des'];
        $admin=$_POST['admin'];


      $quer=mysqli_query($conn,"UPDATE company SET Company='$Company',des='$des', admin='$admin' WHERE company_id='$id'");
      
        if($query){
            echo"<script> alert('Record has been successfull Update !!!')</script>";
            
        }
        else{
            echo"<script> alert('Some error Updated !!!')</script>";
        }

    }


   

?>

<?php




?>

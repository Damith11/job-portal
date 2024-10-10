<?php

include ('connection/db.php');
include('include/header.php');
include('include/sidebar.php');

$id=$_GET['edit'];
$query=mysqli_query($conn,"SELECT * FROM  job_category WHERE id='$id'");
while($row=mysqli_fetch_array($query)){
     $category         =$row['category'];
     $des              =$row['des'];
   
     
}

?>
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="admin_dashboard.php">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="category.php">Category</a></li>
                    <li class="breadcrumb-item"><a href="#">Update Category</a></li>
                   
                </ol>
                </nav>
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
          <h1 class="h2">Update Category</h1>
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
                     <label for="category">Enter Category Name  </label>
                     <input type ="text" name="category" id="category" value="<?php echo $category;?>" class="form-control" placeholder="Enter Category Name  ">
                  </div>
  
                  <div class = "form-group">
                     <label for="Description">Enter Description</label>
                     <textarea name="des" id="des"  class="form-control" cols="30" rows="10" > <?php echo $des;?>  </textarea>
                
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
        $category=$_POST['category'];
        $des=$_POST['des'];
        


      $quer=mysqli_query($conn,"UPDATE  job_category SET category='$category',des='$des' WHERE id='$id'");
     
        if($query){
            echo"<script> alert('Record has been successfull Update !!!')</script>";
            //  header('location:category.php');
            //  include('include/category.php');
            
        }
        else{
            echo"<script> alert('Some error Updated !!!')</script>";
        }

    }


   

?>

<?php




?>

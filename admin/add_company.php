<?php

include('include/header.php');
include('include/sidebar.php');


?>

<?php

include 'connection/db.php';

   $query =mysqli_query($conn,"SELECT * FROM admin_login WHERE admin_type='2'");  

?>


        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="admin_dashboard.php">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="Create_company.php">Company</a></li>
                    <li class="breadcrumb-item"><a href="#">Add Company</a></li>
                   
                </ol>
                </nav>
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
          <h1 class="h2">Add Company</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">
                
              </div>
              <!-- <a class="btn btn-primary" href="add_customers.php"> Add Customers  </a> -->
            </div>
          </div>
          
          <div>
              <div style="width: 60%; background-color: #ecf0f1; margin-left:20%;">
                 <form action="" method="POST" style ="margin:3%; padding:3%; " name="company_form" id="company_form">   

                 <div id="msg"> </div>

                  <div class = "form-group">
                     <label for="Company Name">Company Name</label>
                     <input type ="text" name="Company" id="Company" class="form-control" placeholder="Enter Company Name">
                  </div>

                   <div class = "form-group">
                     <label for="Description">Description</label>
                     <textarea name="Description" id="Description" class="form-control" cols="30" rows="10"></textarea>
                  </div>

                  
                  <div class = "form-group">
                     <label for="Select_Admin">Select Admin</label>
                     <select name="admin" id="admin" class="form-control">
                       
                     <?php
                      
                       while($row=mysqli_fetch_array($query)){ ?>
                        <option value="<?php echo $row ['admin_email']; ?>" > <?php echo $row ['admin_email']; ?> </option>

                       <?php

                       }
                     
                     ?>
                      </select>
                  </div>
        
        
                  <div class = "form-group">  
                     <input type ="submit" class="btn btn-block btn-success" placeholder="Save" name ="submit" id="submit">
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

          
       <script>
          $(document).ready(function(){
          $("#submit").click(function(){
              var Company=$("#Company").val();
              var Description=$("#Description").val();


              if(Company == ''){
                alert("please Enter Company Name !!!");
                return false;
              } 

              if(Description == ''){
                alert("please Enter Description !!!");
                return false;
              }

              

              var data = $("#company_form").serialize();

                $.ajax({
                     
                    type:"POST",
                    url:"Company_add.php",
                    data:data,
                    success:function(data){
                       // $("#msg").html(data);
                       alert(data);
                    }
 
                });
          });
          });
          </script>

   
  </body>
</html>
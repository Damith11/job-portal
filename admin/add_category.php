<?php

include('include/header.php');
include('include/sidebar.php');


?>



        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="admin_dashboard.php">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="Category.php">Category</a></li>
                    <li class="breadcrumb-item"><a href="#">Add Category</a></li>
                   
                </ol>
                </nav>
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
          <h1 class="h2">Add Category</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">
                
              </div>
              <!-- <a class="btn btn-primary" href="add_customers.php"> Add Customers  </a> -->
            </div>
          </div>
          
          <div>
              <div style="width: 60%; background-color: #ecf0f1; margin-left:20%;">
                 <form action="category_add.php" method="POST" style ="margin:3%; padding:3%; " name="category_form" id="category_form">   

                 <div id="msg"> </div>

                  <div class = "form-group">
                     <label for="Category Name">Category Name</label>
                     <input type ="text" name="category" id="category" class="form-control" placeholder="Enter category Name">
                  </div>

                   <div class = "form-group">
                     <label for="Description">Description</label>
                     <textarea name="Description" id="Description" class="form-control" cols="30" rows="10"></textarea>
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
              var category=$("#category").val();
              var Description=$("#Description").val();


              if(category == ''){
                alert("please Enter Company Name !!!");
                return false;
              } 

              if(Description == ''){
                alert("please Enter Description !!!");
                return false;
              }

              

              var data = $("#category_form").serialize();

                $.ajax({
                     
                    type:"POST",
                    url:"category_add.php",
                    data:data,
                    success:function(data){
                       // $("#msg").html(data);
                      //  alert(data);
                    }
 
                });
          });
          });
          </script>

   
  </body>
</html>
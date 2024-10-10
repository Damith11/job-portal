<?php

include('include/header.php');
include('include/sidebar.php');


?>
<?php

$query=mysqli_query($conn,"SELECT * FROM  job_category");


?>


        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="admin_dashboard.php">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="Job_create.php">All Job List</a></li>
                    <li class="breadcrumb-item"><a href="#">Add Job</a></li>
                   
                </ol>
                </nav>
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
          <h1 class="h2">Add Job</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">
                
              </div>
              <!-- <a class="btn btn-primary" href="add_customers.php"> Add Customers  </a> -->
            </div>
          </div>
          
          <div>
              <div style="width: 60%; background-color: #ecf0f1; margin-left:20%;">
                 <form action="" method="POST" style ="margin:3%; padding:3%; " name="Add_Job_form" id="Add_Job_form">   

                 <div id="msg"> </div>

                  <div class = "form-group">
                     <label for="Job Title">Job Title</label>
                     <input type ="text" name="Job_Title" id="Job_Title" class="form-control" placeholder="Enter Job Title">
                  </div>

                   <div class = "form-group">
                     <label for="Description">Description</label>
                     <textarea name="Description" id="Description" class="form-control" cols="30" rows="10"></textarea>
                  </div>
                  
                  <div class = "form-group">
                     <label for="Keyword">Enter Keyword</label>
                     <input type ="text" name="keyword" id="keyword" class="form-control" placeholder="Enter Keyword">
                  </div>

                  <div class = "form-group">
                          <label for="category">Select Category</label>

                          <select name = "category"   class="form-control" id="category">

                          <?php
                          while($row=mysqli_fetch_array($query)){
                            ?>
                            <option value ="<?php echo $row['id'] ?>"> <?php echo $row['category'];?> </option>
                            <?php
                          }
                          ?>
                            
                          </select>
                        </div>


                      <div class = "form-group">
                        <label for="country">Country</label>
                            <select name ="country"   class="form-control" id="country">
                                <option value =""> Select Country</option>
                                <option value ="Sri lankan"> Sri lankan</option>
                                <!-- <option value ="japan"> japan</option> -->
                              
                            </select>
                      </div>

                  <div class = "form-group">
                     <label for="">State</label>  
                          <select name ="state"   class="form-control" id="state">
                              <option value =""> Select State </option>
                              <option value ="Eastern Province"> Eastern Province </option>
                              <option value ="North Central Province">North Central Province </option>
                              <option value ="North Western Province"> North Western Province </option>
                              <option value ="Northern Province"> Northern Province  </option>
                              <option value ="Sabaragamuwa Province"> Sabaragamuwa Province  </option>
                              <option value ="Southern Province">Southern Province   </option>
                              <option value ="Uva Province">Uva Province   </option>
                              <option value ="Western Province"> Western Province </option>
                              <option value ="Central Province"> Central Province  </option>
                          </select>
                  </div>

                  <div class = "form-group">
                     <label for="">City</label>
                        <select name ="city"  class="form-control" id="city">
                            <option value =""> Select City </option>
                            <option value ="Anuradhapura">Anuradhapura </option>
                            <option value ="Kandy">	Kandy </option>
                            <option value ="Kurunegala"> Kurunegala </option>
                            <option value ="Colombo"> Colombo</option>
                            <option value ="Trincomalee">Trincomalee </option>
                            <option value ="Kegalle">Kegalle </option>
                            <option value ="Gampaha">Gampaha </option>
                            <option value ="Homagama">Homagama </option>
                            <option value ="Negombo"> Negombo</option>
                            <option value ="Matara"> Matara</option>
                            <option value ="Kalutata">Kalutata </option>
                            <option value ="Dehiwela">Dehiwela </option>
                              
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
              var Job_Title=$("#Job_Title").val();
              var Description=$("#Description").val();
              var keyword=$("#keyword").val();
              var category=$("#category").val();
              var country=$("#country").val();
              var state=$("#state").val();
              var city=$("#city").val();
             
             

              if(Job_Title == ''){
                alert("please Enter Job Title !!!");
                return false;
              } 

              if(Description == ''){
                alert("please Enter Description !!!");
                return false;
              }
            //   if(countryID == ''){
            //     alert("please Select Country !!!");
            //     return false;
            //   } 

            //   if(stateId == ''){
            //     alert("please Selectr State !!!");
            //     return false;
            //   } 

            //   if(cityId == ''){
            //     alert("please Select City !!!");
            //     return false;
            //   } 
              

              var data = $("#Add_Job_form").serialize();

                $.ajax({
                     
                    type:"POST",
                    url:"add_new_job.php",
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
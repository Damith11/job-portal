<?php

include('include/header.php');
include('include/sidebar.php');
include'connection/db.php';

?>



        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="admin_dashboard.php">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="apply_jobs.php">Applied Job</a></li>
                    <li class="breadcrumb-item"><a href="view_applied_jobs.php">Viwe Applied Jobs</a></li>
                    <li class="breadcrumb-item"><a href="#">Send Email</a></li>
                   
                </ol>
                </nav>
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
          <h1 class="h2">Send Email</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">
                
              </div>
            
            </div>
          </div>
          
         
              <div style="width:60%;  margin-left:10%;">
                 <form action="phpmailer.php" method="POST" style ="margin-left:5%; padding:5%; border:1px solid gray;  " 
                 name="send_email_form" id="send_email_form">   

                  <?php
                  
                  include 'connection/db.php' ;
                
                  $id=$_GET['id'];
                 
                  $sql="SELECT * FROM job_apply 
                
                  LEFT JOIN all_jobs ON job_apply.id_job = all_jobs.job_id WHERE id='$id' 
                  
                  ";
                  
                  $query=mysqli_query($conn,$sql);
                  // var_dump($sql);
                 while($row=mysqli_fetch_array($query)){      
                  
                  ?>

                 <h1>
                  <?php echo strtoupper($row['frist_name']); ?> <?php echo strtoupper($row['last_name']);?>
                 </h1>
                  <hr>
                     <input type="hidden" id="id" name="id" value="<?php echo $id; ?>">
                  <div class = "form-group">
                     <label for="">To</label>
                     <input type ="email" name="to" id="to" class="form-control" placeholder="To....." value="<?php echo $row['job_seeker'];?>">
                  </div>

                  <div class = "form-group">
                     <label for="">From</label>
                     <input type ="email" name="from" id="from" class="form-control" placeholder="From....">
                  </div>

                   <div class = "form-group">
                     <label for="">Body</label>
                     <textarea name="body" id="body" class="form-control" cols="30" rows="10" >Dear <?php echo strtoupper($row['frist_name']) ;?> <?php echo strtoupper($row['last_name']) ;?></textarea>
                  </div>
                  
                     <?php 
                        } 
                            ?>

                  

        
                  <div class = "form-group">  
                     <input type ="submit" class="btn btn-block btn-success" value="send"  name ="submit" id="submit">
                  </div>
                        
             </form>

           
           
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
        //   $(document).ready(function(){
        //   $("#submit").click(function(){
        //       var Job_Title=$("#Job_Title").val();
        //       var Description=$("#Description").val();
        //       var keyword=$("#keyword").val();
        //       var category=$("#category").val();
        //       var country=$("#country").val();
        //       var state=$("#state").val();
        //       var city=$("#city").val();
             
             

        //       if(Job_Title == ''){
        //         alert("please Enter Job Title !!!");
        //         return false;
        //       } 

        //       if(Description == ''){
        //         alert("please Enter Description !!!");
        //         return false;
        //       }
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
              

        //       var data = $("#Add_Job_form").serialize();

        //         $.ajax({
                     
        //             type:"POST",
        //             url:"add_new_job.php",
        //             data:data,
        //             success:function(data){
        //                // $("#msg").html(data);
        //                alert(data);
        //             }
 
        //         });
        //   });
        //   });
          </script>

   
  </body>
</html>
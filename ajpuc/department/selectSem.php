<?php include("header.php");
      include('sidebar.php');
   
      extract($_REQUEST); 
      
        $dbname1= $_SESSION["student_db"];
      $branch=$_SESSION["student_db"];
      
      ?>
      
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
     <h1>
        Student Information By Sem and Marks
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
       
      </ol>
       
        <div class="content">
	   <div class="container-fluid">
           <?php if(isset($asuccess)){ ?>
   <div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Approved Successfully.</strong>
</div>
   <?php } ?>
   <?php if(isset($deasucc)){ ?>
   <div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Deactivated Successfully.</strong>
</div>
   <?php } ?>
            <?php if(isset($updsucc)){ ?>
   <div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Updated successfully.</strong>
</div>
   <?php } ?>
   <?php if(isset($upderr)){ ?>
   <div class="alert alert-warning alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Already Approved.</strong>
</div>
   <?php } ?>
           <?php if(isset($success)){ ?>
   <div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Deleted successfully.</strong>
</div>
   <?php } ?>
   <?php if(isset($error)){ ?>
   <div class="alert alert-danger alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Approval Unsuccessful.</strong>
</div>
   <?php } ?>
               
   <br/><br/>
   <div class="panel panel-info">
               <div class="panel-heading">Student Information  </div>
               <div class="panel-body">
                   <form class="form-horizontal" role="form" method="post" action="listia.php" enctype="multipart/form-data">
                       
                 
                  <div class="form-group">
                        <div class="col-md-4 col-sm-4 col-sx-12">
                           <label for="sem" class="control-label">Subject </label><span id="sp">:</span> 
                        </div>
                        <div class="col-md-2 col-sm-2 col-sx-2">
                            <select class="form-control" name="subject" required>
                                <option value="1"> Biology </option>
                                 <option value="2"> Chemistry</option>
                                <option value="3"> Physics</option>
                                <option value="4">Mathematics</option>
                                <!-- <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option> -->
                            </select>
                        </div>
                     </div>
           
                     <div class="form-group">
                      <div class="col-md-4 col-sm-4 col-sx-12">
                           <label for="sem" class="control-label">Test </label><span id="sp">:</span> 
                        </div>
                          <div class="col-md-2 col-sm-2 col-sx-2">
                   
                            <select name="yestane">
                                <option value="1">Unit_test1</option>
                                <option value="2">Midterm</option>
                                <option value="3">Unit_test2</option>
                                <option value="4">Preparatory_1</option>
                                <option value="4">Preparatory_2</option>
                                <option value="4">Annual Exam </option>

                            </select>
                        </div>
                    </div>    
                  
                      <div class="col-sm-4">
                         
                     </div>
                     <div class="col-md-1 col-sm-3 col-sx-12">
                        <input id="submit" name="submit" type="submit" value="Search" class="btn btn-success">
                     </div>
                    
                  </form>
               </div>
            </div>
          <center>  <table border=1  width="30%">
            <tr>               <thead>
                                   <th style="text-align:center">Student_ID</th>
                                   <th style="text-align:center">Test_ID</th>
                                   <th style="text-align:center">Obtained_Marks</th>
                                   <th style="text-align:center">Status</th>
                                   </tr>
                                   </thead>
       <?php    
         $sqlsub= "SELECT Student_ID,Test_ID,Obtained_Marks, Status from marks"; //where 
      // Marks_ID='$Marks_ID' order by ";
                                  $resultsub = $con->query($sqlsub);
                                   $s1=mysqli_num_rows($resultsub);
                                   
                                 echo "<script>alert('my value: $s1');</script>";
                                   while($rowsub = $resultsub->fetch_assoc())
                                   { ?>
                                   <tr>
                                   <td align ="center"> <?=$rowsub['Student_ID'];?></td>   
                                   <td align ="center"> <?=$rowsub['Test_ID'];?></td>  
                                   <td align ="center"> <?=$rowsub['Obtained_Marks'];?></td>  
                                   <td align ="center"> <?=$rowsub['Status'];?></td>   
                                  </tr>
                                  <?php }
                                   
                                   ?>
                                   </table>
                                  </center>
                                   
                                    
         </div>
      </div>
   </section>
            <!-- /.content -->
         </div>
         <!-- /.content-wrapper -->
      


<?php include('footer.php');?>
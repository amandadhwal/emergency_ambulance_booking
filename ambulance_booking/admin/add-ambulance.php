<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['eahpaid']==0)) {
  header('location:logout.php');
  } else{
    if(isset($_POST['submit']))
  {
    $ambulancetype = $_POST['ambulancetype'];
    $ambregnum = $_POST['ambregnum'];
    $dname = $_POST['dname'];
    $dconnum = $_POST['dconnum'];
    $ret=mysqli_query($con, "select AmbRegNum from tblambulance where AmbRegNum='$ambregnum'");
    $result=mysqli_fetch_array($ret);
    if($result>0){

echo "<script>alert('This ambulance already registered');</script>";
    }
    else{
     
    $query=mysqli_query($con, "insert into tblambulance(AmbulanceType,AmbRegNum,DriverName,DriverContactNumber) value('$ambulancetype','$ambregnum','$dname','$dconnum')");
    if ($query) {
   
    echo "<script>alert('Ambulance detail added successfully.');</script>";
echo "<script type='text/javascript'> document.location = 'add-ambulance.php'; </script>";
  }
  else
    {

      echo "<script>alert('Something Went Wrong. Please try again.');</script>";
    }
}
  
}
  ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Colorful Boxes</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <!-- Include Header -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <?php include_once('includes/header.php'); ?>
            </div>
        </div>
        <div class="row">
            <!-- Sidebar Section -->
            <div class="col-md-2">
                <?php include_once('includes/sidebar.php'); ?>
            </div>

            <!-- Main Content Section -->
            <div class="col-md-10">
                <div class="panel panel-default">
                    <div class="panel-heading">
                    Add Ambulance
                    </div>
                    <div class="form">
                                

   
                                <form class="cmxform form-horizontal " method="post" action="">
                                    <div class="form-group ">
                                        <label for="adminname" class="control-label col-lg-3">Type of Ambulance</label>
                                        <div class="col-lg-6">
                                            
                                            <select name="ambulancetype" id="ambulancetype" class=" form-control">
                <option value="">Select Type of Ambulance</option>
                <option value="1">Basic Life Support (BLS) Ambulances</option>
                <option value="2"> Advanced Life Support (ALS) Ambulances</option>
                <option value="3">Non-Emergency Patient Transport Ambulances</option>
                <option value="4">Boat Ambulance</option>
                
               
              </select>
                                        </div>

                                    </div>
                                     <div class="form-group ">
                                        <label for="adminname" class="control-label col-lg-3">Ambulance Reg No.</label>
                                        <div class="col-lg-6">
                                            <input class=" form-control" id="ambregnum" name="ambregnum" type="text" required="true" value="">
                                            
                                        </div>
                                        
                                    </div>
                                     <div class="form-group ">
                                        <label for="adminname" class="control-label col-lg-3">Driver Name</label>
                                        <div class="col-lg-6">
                                            <input class=" form-control" id="dname" name="dname" type="text" required="true" value="">
                                            
                                        </div>
                                        
                                    </div>
                                     <div class="form-group ">
                                        <label for="adminname" class="control-label col-lg-3">Driver Contact Number</label>
                                        <div class="col-lg-6">
                                            <input class=" form-control" id="dconnum" name="dconnum" type="text" required="true" value="" maxlength="10" pattern="[0-9]+">
                                            
                                        </div>
                                        
                                    </div>
                                   
                                    <div class="form-group">
                                        <div class="col-lg-offset-3 col-lg-6">
                                          <p style="text-align: center;"> <button class="btn btn-primary" type="submit" name="submit">Add</button></p>
                                           
                                        </div>
                                    </div>

                                </form>
                            </div>
              
              
            
      </div>
    </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>

<?php }  ?>

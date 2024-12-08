<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['eahpaid']==0)) {
  header('location:logout.php');
  } else{
    if(isset($_POST['submit']))
  {
    $dname=$_POST['dname'];
    $dconnum=$_POST['dconnum'];
     $eid=$_GET['editid'];
    $query=mysqli_query($con, "update tblambulance set DriverName ='$dname', DriverContactNumber = '$dconnum' where ID=$eid");
    if ($query) {
   
    echo "<script>alert('Ambulance details has been updated.');</script>";
echo "<script type='text/javascript'> document.location = 'manage-ambulance.php'; </script>";
  }
  else
    {
      echo "<script>alert('Something went wrong. Please try again.');</script>";
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
            <section class="wrapper">
		        <div class="form-w3layouts">
            <!-- page start-->
            
          
            <div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Update Ambulance
                        </header>
                        <div class="panel-body">
                            <div class="form">
                                 
   
                                <form class="cmxform form-horizontal " method="post" action="">
                                    <?php
 $cid=$_GET['editid'];
$ret=mysqli_query($con,"select * from tblambulance where ID='$cid'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
                                    <div class="form-group ">
                                        <label for="adminname" class="control-label col-lg-3">Type of Ambulance</label>
                                        <div class="col-lg-6">
                                            
                                             <?php   $atype=$row['AmbulanceType'];  
                 if($atype=="1"){ ?>
                  <p>Basic Life Support (BLS) Ambulances</p>
                <?php } elseif($atype=="2"){ ?>
                  <p>Advanced Life Support (ALS) Ambulances</p>
                <?php } elseif($atype=="3"){ ?>
                   <p>Non-Emergency Patient Transport Ambulances</p>
                   <?php } elseif($atype=="4"){ ?>
                     <p>Boat Ambulance</p>
                     <?php } ?>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="adminname" class="control-label col-lg-3">Ambulance Reg No.</label>
                                        <div class="col-lg-6">
                                            <input class=" form-control" id="ambregnum" name="ambregnum" type="text" readonly="true" value="<?php  echo $row['AmbRegNum'];?>">
                                            
                                        </div>
                                        
                                    </div>
                                    <div class="form-group ">
                                        <label for="adminname" class="control-label col-lg-3">Driver Name</label>
                                        <div class="col-lg-6">
                                            <input class=" form-control" id="dname" name="dname" type="text" required="true" value="<?php  echo $row['DriverName'];?>">
                                            
                                        </div>
                                        
                                    </div>
                                     <div class="form-group ">
                                        <label for="adminname" class="control-label col-lg-3">Driver Contact Number</label>
                                        <div class="col-lg-6">
                                            <input class=" form-control" id="dconnum" name="dconnum" type="text" required="true" value="<?php  echo $row['DriverContactNumber'];?>" maxlength="10" pattern="[0-9]+">
                                            
                                        </div>
                                        
                                    </div>
                                    <?php } ?>
                                   
                                    <div class="form-group">
                                        <div class="col-lg-offset-3 col-lg-6">
                                          <p style="text-align: center;"> <button class="btn btn-primary" type="submit" name="submit">Update</button></p>
                                           
                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>

                    </section>
                </div>
            </div>
            <!-- page end-->
        </div>

</section>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
<?php }  ?>


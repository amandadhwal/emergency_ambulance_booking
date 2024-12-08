<?php  
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['eahpaid']==0)) {
  header('location:logout.php');
  } else{
if(isset($_GET['del']))
{
  $rid=$_GET['del'];
  $query=mysqli_query($con,"delete from tblambulance  where ID='$rid'");
  echo "<script>alert('Data Deleted');</script>";
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
                    Manage Ambulance
                    </div>
                    <div>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                <th data-breakpoints="xs">S.NO</th>
                                <th>Type of Ambulance</th>
                                <th>Ambulance Reg No.</th>
                                <th>Name of Driver</th>
                                    <th>Phone Number of Driver</th>
                                <th>Creation Date</th>
                                <th data-breakpoints="xs">Action</th>
                                
                                
                                </tr>
                            </thead>
                    <?php
            $ret=mysqli_query($con,"select * from  tblambulance");
            $cnt=1;
            while ($row=mysqli_fetch_array($ret)) {

            ?>
                        <tbody>
                            <tr>
                            <td><?php echo $cnt;?></td>
                            <?php   $atype=$row['AmbulanceType'];  
                        if($atype=="1"){ ?>
                            <td>Basic Life Support (BLS) Ambulances</td>
                        <?php } elseif($atype=="2"){ ?>
                            <td>Advanced Life Support (ALS) Ambulances</td>
                        <?php } elseif($atype=="3"){ ?>
                            <td>Non-Emergency Patient Transport Ambulances</td>
                            <?php } elseif($atype=="4"){ ?>
                            <td>Boat Ambulance</td>
                            <?php } ?>
                        
                            <td><?php  echo $row['AmbRegNum'];?></td>
                            <td><?php  echo $row['DriverName'];?></td>
                            <td><?php  echo $row['DriverContactNumber'];?></td>
                            <td><?php  echo $row['CreationDate'];?></td>
                            
                            <td><a href="edit-ambulance.php?editid=<?php echo $row['ID'];?>" class="btn btn-primary">Edit</a> 
                            <a href="manage-ambulance.php?del=<?php echo $row['ID'];?>" class="btn btn-danger">Delete</a>
                        </tr>
                        <?php 
        $cnt=$cnt+1;
        }?>
        </tbody>
              </table>
              
              
            
      </div>
    </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>

<?php }  ?>

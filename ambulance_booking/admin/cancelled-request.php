<?php  
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['eahpaid']==0)) {
  header('location:logout.php');
  } else{

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
                    Rejected Requests
                    </div>
                    <div>
                        <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th data-breakpoints="xs">S.NO</th>
                                <th>Booking Number</th>
                                <th>Patient Name</th>
                                <th>Relative Contact Number</th>
                                <th>Hiring Date/Time</th>
                                <th>Request Date</th>
                                <th>Status</th>
                                <th data-breakpoints="xs">Action</th>
                            </tr>
                        </thead>
                    <?php
            $ret=mysqli_query($con,"select * from  tblambulancehiring  where tblambulancehiring.Status='Rejected'");
            $cnt=1;
            $count=mysqli_num_rows($ret);
            if($count>0){
            while ($row=mysqli_fetch_array($ret)) {

            ?>
                        <tbody>
          <tr data-expanded="true">
            <td><?php echo $cnt;?></td>
              <td><?php  echo $row['BookingNumber'];?></td>
              <td><?php  echo $row['PatientName'];?></td>
                  <td><?php  echo $row['RelativeConNum'];?></td>
                  <td><?php  echo $row['HiringDate'];?> : <?php  echo $row['HiringTime'];?></td>
                  <td><?php  echo $row['BookingDate'];?></td>

                                   <td> <?php   $pstatus=$row['Status'];  
                 if($pstatus==""){ ?>
<span class="badge text-bg-secondary">New</span>
 <?php } elseif($pstatus=="Assigned"){ ?>
<span class="badge text-bg-info">Assigned</span>
 <?php } elseif($pstatus=="On the way"){ ?>
<span class="badge text-bg-info">On the Way</span>
 <?php } elseif($pstatus=="Pickup"){ ?>
<span class="badge text-bg-warning">Patient Pick</span>
 <?php } elseif($pstatus=="Reached"){ ?>
<span class="badge text-bg-success">Patient Reached Hospital</span>
 <?php } elseif($pstatus=="Rejected"){ ?>
<span class="badge text-bg-danger">Rejected</span>

<?php } ?>
</td>
                  <td><a href="booking-details.php?id=<?php echo $row['ID'];?>&&bookingnum=<?php echo $row['BookingNumber'];?>" class="btn btn-primary">View</a></td>
                </tr>
                <?php 
$cnt=$cnt+1;
} } else {?>
<tr>
  <th colspan="8" style="color:red">No Record Found</th>
</tr>
<?php } ?>
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

<?php  } ?>

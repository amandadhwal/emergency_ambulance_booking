<?php  
session_start();
//error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['eahpaid']==0)) {
  header('location:logout.php');
  } else{

 if(isset($_POST['submit']))
{
    
    $bookingnum = $_GET['bookingnum'];
    $remark = $_POST['remark']; 
    $status = $_POST['status'];
 $ambregno2=$_POST['ambregno'];

if($ambregno2!=''):
     $ambulanceregnum = $_POST['ambregno'];
       else:
   $ambulanceregnum = $_POST['ambulanceregnum'];
       endif; 
//        echo $ambulanceregnum;
// exit();
    $updateQuery1 = mysqli_query($con, "UPDATE tblambulance SET status='$status' WHERE AmbRegNum='$ambulanceregnum'");
   $updateQuery2= mysqli_query($con, "UPDATE tblambulancehiring SET Status='$status', Remark='$remark', AmbulanceRegNo='$ambulanceregnum' WHERE BookingNumber='$bookingnum'");
   $insertQuery = mysqli_query($con, "INSERT INTO tbltrackinghistory(BookingNumber, AmbulanceRegNum, Remark, Status) VALUES ('$bookingnum', '$ambulanceregnum', '$remark', '$status')");

    if ($updateQuery1 && $updateQuery2 && $insertQuery) {
        echo '<script>alert("Request Status Has been updated.")</script>';
        echo "<script type='text/javascript'> document.location ='all-amublance-request.php'; </script>";
    } else {
        echo '<script>alert("Something Went Wrong. Please try again.")</script>';
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
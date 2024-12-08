<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['eahpaid']==0)) {
  header('location:logout.php');
  } 
     ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
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
                <div class="row mt-4">
                    <!-- Box 1 -->
                    <div class="col-md-4">
                        <div class="box bg-primary text-white p-4">
                        <?php 
                            $sql = mysqli_query($con, "SELECT * FROM tblambulance");

                            $res = mysqli_num_rows($sql);
                        ?>
                            <a href="manage-ambulance.php" style="color: white; text-decoration: none;"><h4>Total Ambulance</h4></a>
                            <h3><?php echo $res ?></h3>
                            <a href="manage-ambulance.php" style="color: white; text-decoration: none;"><p>View details</p></a>
                        </div>
                    </div>
                    <!-- Box 2 -->
                    <div class="col-md-4">
                        <div class="box bg-success text-white p-4">
                        <?php 
                            $sql = mysqli_query($con, "SELECT * FROM tblambulancehiring");

                            $res = mysqli_num_rows($sql);
                        ?>
                            <a href="all-amublance-request.php" style="color: white; text-decoration: none;"><h4>Total Requests</h4></a>
                            <h3><?php echo $res ?></h3>
                            <a href="all-amublance-request.php" style="color: white; text-decoration: none;"><p>View details</p></a>
                        </div>
                    </div>
                    <!-- Box 3 -->
                    <div class="col-md-4">
                        <div class="box bg-danger text-white p-4">
                        <?php 
                            $sql = mysqli_query($con, "SELECT * FROM tblambulancehiring where status is null");

                            $res = mysqli_num_rows($sql);
                        ?>
                            <a href="new-ambulance-request.php" style="color: white; text-decoration: none;"><h4>New Requests</h4></a>
                            <h3><?php echo $res ?></h3>
                            <a href="new-ambulance-request.php" style="color: white; text-decoration: none;"><p>View details</p></a>
                        </div>
                    </div>
                </div>

                <div class="row mt-4">
                    <!-- Box 4 -->
                    <div class="col-md-4">
                        <div class="box bg-warning text-dark p-4">
                        <?php 
                            $sql = mysqli_query($con, "SELECT * FROM tblambulancehiring where status='Assigned'");

                            $res = mysqli_num_rows($sql);
                        ?>
                            <a href="assign-request.php" style="color: white; text-decoration: none;"><h4>Assigned Ambulance</h4></a>
                            <h3><?php echo $res ?></h3>
                            <a href="assign-request.php" style="color: white; text-decoration: none;"><p>View details</p></a>
                        </div>
                    </div>
                    <!-- Box 5 -->
                    <div class="col-md-4">
                        <div class="box bg-info text-white p-4">
                        <?php 
                            $sql = mysqli_query($con, "SELECT * FROM tblambulancehiring where status='On the way'");

                            $res = mysqli_num_rows($sql);
                        ?>
                            <a href="on-the-way-request.php" style="color: white; text-decoration: none;"><h4>On the way Ambulance</h4></a>
                            <h3><?php echo $res ?></h3>
                            <a href="on-the-way-request.php" style="color: white; text-decoration: none;"><p>View details</p></a>
                        </div>
                    </div>
                    <!-- Box 6 -->
                    <div class="col-md-4">
                        <div class="box bg-secondary text-white p-4">
                        <?php 
                            $sql = mysqli_query($con, "SELECT * FROM tblambulancehiring where status='Rejected'");

                            $res = mysqli_num_rows($sql);
                        ?>
                            <a href="cancelled-request.php" style="color: white; text-decoration: none;"><h4>Rejected Requests</h4></a>
                            <h3><?php echo $res ?></h3>
                            <a href="cancelled-request.php" style="color: white; text-decoration: none;"><p>View details</p></a>
                        </div>
                    </div>
                </div>
                </div>
                
                    
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>



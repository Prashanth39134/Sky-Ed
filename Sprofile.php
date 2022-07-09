<?php
require 'dbcon.php';
session_start();
?>
<?php

if($_SESSION['email'])
{

}
else{
  header("Location: login.html");
}?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Student Profile</title>
</head>
<body>

    <div class="container mt-5">

      <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Student View Details
                            <a href="Dashboard.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <?php
                        if($_SESSION['email'])
                        {
                          $userID = $_SESSION['email'];
                            $query = "SELECT * FROM student WHERE email = '$userID' ";
                            $query_run = mysqli_query($con, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                $student = mysqli_fetch_array($query_run);
                                ?>

                                <div class="mb-3">
                                    <label>Student Full Name</label>
                                    <p class="form-control">
                                        <?=$student['FirstName'];?>
                                        <?=$student['LastName'];?>
                                    </p>
                                </div>
                                <div class="mb-3">
                                    <label>Date Of Birth</label>
                                    <p class="form-control">
                                        <?=$student['DateOfBirth'];?>
                                    </p>
                                </div>

                                <div class="mb-3">
                                    <label>Gender</label>
                                    <p class="form-control">
                                        <?=$student['Gender'];?>
                                    </p>
                                </div>

                                <div class="mb-3">
                                    <label>Email</label>
                                    <p class="form-control">
                                        <?=$student['Email'];?>
                                    </p>
                                </div>

                                <div class="mb-3">
                                    <label>Phone Number</label>
                                    <p class="form-control">
                                        <?=$student['Phone'];?>
                                    </p>
                                </div>
                                <a href="Seditprofile.php" class="btn btn-success btn-sm">Edit</a>


                                <?php
                            }
                            else
                            {
                                unset($_SESSION['email']);
                                echo "Session expired Due to change in 'E-mail', Please ";
                                echo "<a href='login.html'>Login hear.</a>";

                          }
                        }
                        ?>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

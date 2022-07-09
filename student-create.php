<?php
session_start();
?>
<?php

if($_SESSION['email'])
{

}
else{
  header("Location: tlogin.html");
}?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Student Create</title>
</head>
<body>

    <div class="container mt-5">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Student Add
                            <a href="student.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="code.php" method="POST">

                            <div class="mb-3">
                                <label>FirstName</label>
                                <input type="text" name="FirstName" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label>LastName</label>
                                <input type="text" name="LastName" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label>Date Of Birth</label>
                                <input type="date" name="DateOfBirth" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label for="Gender">Gender</label>
              									<select class="form-control" id="Gender" name="Gender">
                								<option value="Male">Male</option>
                								<option value="Female">Female</option>
                								<option value="Others">Others</option>
              									</select>
                            </div>

                            <div class="mb-3">
                            		<label >Phone</label>
                            		<input class="form-control" name="Phone" pattern="[6-9]{1}[0-9]{9}" title=" must number starts with either 6 7 8 9 and rest of the values is number and it’s up to nine-digits[0-9]" required>
                            </div>

                            <div class="mb-3">
                                <label>Email</label>
                                <input type="email" name="Email" class="form-control">
                            </div>

                            <div class="mb-3">
                                <button type="submit" name="save_student" class="btn btn-primary">Save Student</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>



Step 2: Create a file dbcon.php for the  Database Connection in PHP MySQL.

<?php

$con = mysqli_connect("localhost","root","","mystore");

if(!$con){
    die('Connection Failed'. mysqli_connect_error());
}

?>

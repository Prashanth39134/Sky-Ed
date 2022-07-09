<?php
session_start();
require 'dbcon.php';
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

    <title>Edit Student Profile </title>
</head>
<body>

    <div class="container mt-5">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Student Edit
                            <a href="Sprofile.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <?php
                        if($_SESSION['email'])
                        {
                          $userID = $_SESSION['email'];
                            $query = "SELECT * FROM student WHERE email ='$userID' ";
                            $query_run = mysqli_query($con, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                $student = mysqli_fetch_array($query_run);
                                ?>
                                <form action="Scode.php" method="POST">
                                    <input type="hidden" name="student_id" value="<?= $student['id']; ?>">

                                    <div class="mb-3">
                                        <label>First Name</label>
                                        <input type="text" name="FirstName" value="<?=$student['FirstName'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Last Name</label>
                                        <input type="text" name="LastName" value="<?=$student['LastName'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>DateOfBirth</label>
                                        <input type="date" name="DateOfBirth" value="<?=$student['DateOfBirth'];?>" class="form-control">
                                    </div>

                                    <div class="mb-3">
                    									<label for="Gender">Gender</label>
                    									<select class="form-control"  name="Gender">
                      								<option value="Male">Male</option>
                      								<option value="Female">Female</option>
                      								<option value="Others">Others</option>
                    									</select>
                    									</div>

                                    <div class="mb-3">
                                        <label>Phone</label>
                                        <input type="tel" name="Phone" value="<?=$student['Phone'];?>" class="form-control" pattern="[6-9]{1}[0-9]{9}" title=" must number starts with either 6 7 8 9 and rest of the values is number and it’s up to nine-digits[0-9]" required >
                                    </div>
                                    <div class="mb-3">
                                        <label>Student Email</label>
                                        <input type="text" name="Email" value="<?=$student['Email'];?>" class="form-control" pattern="[^@\s]+@[^@\s]+\.[^@\s]+" title="Invalid email address" >
                                    </div>

                                    <div class="mb-3">
                                        <label>Password</label>
                                        <input id="password" type="password" name="Password" value="<?=$student['Password'];?>" class="form-control" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"  title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required >
                      									<input type="checkbox" onclick="myFunction()"> Show Password
                                    </div>
                                    <div class="mb-3">
                                        <button type="submit" name="update_student" class="btn btn-primary">
                                            Update Student
                                        </button>
                                    </div>

                                </form>
                                <?php
                            }
                            else
                            {
                                echo "<h4>No Such Id Found</h4>";
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
  	function myFunction() {
    var x = document.getElementById("password");
    if (x.type === "password") {
      x.type = "text";
    } else {
      x.type = "password";
    }
  }
  	</script>
</body>
</html>

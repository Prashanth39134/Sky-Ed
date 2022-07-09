<?php
  $FirstName = $_POST['FirstName'];
  $LastName = $_POST['LastName'];
  $DateOfBirth = $_POST['DateOfBirth'];
  $Gender = $_POST['Gender'];
  $Phone = $_POST['Phone'];
  $Email = $_POST['Email'];
  $Password = $_POST['Password'];

$servername = "localhost";
$username = "root";
$passwordb = "";
$dbname = "mystore";

// Create connection
$conn = new mysqli($servername, $username, $passwordb, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
    $sql_u = "SELECT * FROM teacher WHERE Email='$Email'";
  	$sql_e = "SELECT * FROM teacher WHERE Phone='$Phone'";
  	$res_u = mysqli_query($conn, $sql_u);
  	$res_e = mysqli_query($conn, $sql_e);

  	if (mysqli_num_rows($res_u) > 0) {
  	  echo  "Sorry... Email already taken...   ";
      echo "<a href='tregister.html'>Register hear.</a>";
  	}else if(mysqli_num_rows($res_e) > 0){
  	  echo "Sorry... Phone number already Exist..  ";
      echo "<a href='tregister.html'>Register hear.</a>";
  	}else{
           $query = "INSERT INTO teacher (FirstName,LastName,DateOfBirth,Gender,Phone,Email,Password)
           VALUES ('$FirstName','$LastName','$DateOfBirth','$Gender','$Phone','$Email','$Password')";
           $results = mysqli_query($conn, $query);
            header("location: tlogin.html");
           exit();
  	}


?>

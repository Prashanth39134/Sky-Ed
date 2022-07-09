
<?php
session_start();
require 'dbcon.php';
?>

<?php
if(isset($_POST['update_teacher']))
{

    $userID = $_SESSION['email'];
    $FirstName = mysqli_real_escape_string($con, $_POST['FirstName']);
    $LastName = mysqli_real_escape_string($con, $_POST['LastName']);
    $DateOfBirth = mysqli_real_escape_string($con, $_POST['DateOfBirth']);
    $Gender = mysqli_real_escape_string($con, $_POST['Gender']);
    $Phone = mysqli_real_escape_string($con, $_POST['Phone']);
    $Email = mysqli_real_escape_string($con, $_POST['Email']);
    $Password = mysqli_real_escape_string($con, $_POST['Password']);

    $query = "UPDATE teacher SET FirstName='$FirstName', LastName='$LastName', DateOfBirth='$DateOfBirth',Gender='$Gender',Phone='$Phone', Email='$Email', Password='$Password' WHERE email='$userID' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Teacher Updated Successfully";
        header("Location: tProfile.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Student Not Updated";
        header("Location: tProfile.php");
        exit(0);
    }

}
?>

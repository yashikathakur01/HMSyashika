<?php
include("admin/connect.php");

if(isset($_POST['submit'])){
$name = $_POST['name'];
$email = $_POST['email'];
$feedback = $_POST['feedback'];
$desc = $_POST['description'];
$q="insert into user_feedback (name,email,feedback,description) values('$name','$email','$feedback','$desc')";

    if (mysqli_query($conn, $q)) {
        echo "<script>alert('Give feedback successfully');</script>";
        header("refresh:1;feedbackhtml.php");
    } 
    else {
        echo "Error: " . $q . "<br>" . mysqli_error($conn);

        mysqli_close($conn);
} 
}
?>
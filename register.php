<?php
include("admin/connect.php");

if(isset($_POST["submit"])){
    $name = $_POST['name'];
    $dob = $_POST['dob'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $aadhaar = $_POST['aadhaar'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];

    $duplicate = mysqli_query($conn, "SELECT * FROM registration WHERE aadhaar = '$aadhaar'");

    if(mysqli_num_rows($duplicate) > 0){
        echo "<script> alert('Aadhaar number already exists'); </script>";
    }
    else{
        if($password == $cpassword){
            $query = "INSERT INTO `registration`( `name`, `dob`,`email`, `phone`, `aadhaar`, `password`, `cpassword`) VALUES ('$name','$dob','$email','$phone','$aadhaar','$password','$cpassword')";
            mysqli_query($conn,$query);
            echo "<center> <br><br><br><br><h3> Registration Successful </h3> </center>";
            header('refresh:2;userhtml.php');
        }
    }
}
?>

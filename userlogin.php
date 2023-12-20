<?php
include("admin/connect.php");
    if(isset($_POST['submit'])) 
    {  
        session_start();
    $aadhaar = $_POST['aadhaar'];
    $password = $_POST['password'];
    $Select = "SELECT * FROM registration WHERE aadhaar = '$aadhaar' AND password = '$password' ";
    $result = mysqli_query($conn, $Select);

        if (mysqli_num_rows($result) == 1)
        {
            $_SESSION['user']=$aadhaar;
        echo"<script>alert('Login Successfully');</script> ";
        header('refresh:2; index.php');    
        }
    else 
        {
        echo "<script> alert('Invalid username & Password'); </script>";
        // header('refresh:2; userpannel.php');    

    } 
    }
?>
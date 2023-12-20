
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<?php
    include("connect.php");
    $aadhaar = $_GET['aadhaar'];
    $q = "delete from registration WHERE aadhaar = '$aadhaar' ";
    mysqli_query($conn,$q);
    ?>
    <br><br><br><br><br>
    <div class="alert alert-success" role="alert" style="text-align:center">
    User Removed Successfully !!
    </div>
    <?php
    header('refresh:2;userview.php');
?>
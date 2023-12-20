<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<?php
include("connect.php");
$Email = $_GET['email'];
$q = "delete from user_feedback WHERE email = '$Email' ";
mysqli_query($conn,$q);
?>
<br><br><br><br><br>
<div class="alert alert-success" role="alert" style="text-align:center">
 Feedback Removed Successfully !!
</div>
<?php
header('refresh:2;viewfeedback.php');
?>
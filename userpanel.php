<?php
session_start();
include("admin/connect.php");
        if(isset($_SESSION['user'])){
        $userr=$_SESSION['user'];
// include("userpanelheader.php");        
?>
<div class="container">
	<div class="container">
		<div class="row">
			
			<div class="col-12" style="background-color:;height:400px;">
				<br>
				<h2>New User</h2>
				<hr>
	<?php
		if(isset($_SESSION['user'])){
		$user=$_SESSION['user'];
		$q ="select * from registration where aadhaar='$user'";
		$query =mysqli_query($conn,$q);
		$res =mysqli_fetch_array($query);		
		}
?>
<?php
        }
else{
?>
    <h2>Without Login you can't see user Dashboard</h2>
<?php

}        
        ?> 

<?php
session_start();
include("admin/connect.php");
        if(isset($_SESSION['user'])){
        $userr=$_SESSION['user'];
?>

<div class="container">
   <div class="container">
    <div class="row">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

        <nav class="navbar navbar-expand-lg navbar-success bg-light ">
			<div class="container-fluid ">
			<a class="navbar-brand p-2" href="index.php">HOTEL MANAGEMENT SYSTEM</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarText">
				<ul class="navbar-nav me-auto mb-2 px-2 mb-lg-2">
				<h4><br> Hii 
				<?php
			        if(isset($_SESSION['user'])){
						$userr=$_SESSION['user'];
					
					$qu = "SELECT name FROM registration WHERE aadhaar = '$userr'";
					$query = mysqli_query($conn, $qu);
					$res = mysqli_fetch_array($query);
					echo $res['name'];
				}
				?>
				<br>
			</h4>
				</ul>
				<span class="navbar-text">
				<a class="nav-link " href="userlogoutcode.php">Logout</a>
				</span>
			</div>
			</div>
        </nav>	

        <div class="col-6" style="background-color:;height:400px;">
        <br>
        <h2>Feedback</h2>
        <hr>
        
        <?php
        if(isset($_SESSION['user'])){
        $user=$_SESSION['user'];
        $q ="select * from registration where aadhaar='$user'";
        $query =mysqli_query($conn,$q);
        $res =mysqli_fetch_array($query);
        
        }
?>
<form action="feedback.php" method="post">
        <h3>How do you rate your overall expricence? </h3>
        <br>
        <label for="name">User Name </label>
        <input type="text" name="name" value="<?php echo $res['name']; ?>" class="form-control">   
        <br>
        <label for="name">Email or Contact </label>
        <input type="text"name="email" value="<?php echo $res['phone']; ?>" class="form-control">  
        <br>
        <label for="name">Feedback </label>
        <select name="feedback" id="" class="form-control">
        <option value="Good">Good</option>
        <option value="Average">Average</option>
        <option value="Bad">Bad</option></option>       
        </select>
        <br>
        <label for="name">Description </label>
        <textarea class="form-control" name="description" rows="" cols=""></textarea>   
        <br>
        <input type="submit" value="Add" name="submit">
    </form>
    </div>
    <br><br>
</div>
</div> 
</div>  
<?php
        }
else{
?>
    <h2>Without Login u can't see user Dashboard</h2>
<?php

}        
        ?> 
<br><br><br><br><br><br><br>


































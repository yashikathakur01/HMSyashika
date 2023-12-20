<?php
	require_once 'connect.php';
	if(ISSET($_POST['edit_account'])){
		$name = $_POST['name'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		
		// prepare and bind
		$stmt = $conn->prepare("UPDATE admin SET name=?, username=?, password=? WHERE admin_id=?");
		$stmt->bind_param("sssi", $name, $username, $password, $_REQUEST['admin_id']);

		// set parameters and execute
		$name = $_POST['name'];
		$username = $_POST['username'];
		$password = $_POST['password'];
			if ($stmt->execute() === TRUE) {
				echo "Record updated successfully";
			} else {
				echo "Error updating record: " . $conn->error;
			}

			$stmt->close();
			$conn->close();
			
			header("location:account.php");
			exit;
	}	
?>
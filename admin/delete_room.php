<?php
	require_once 'connect.php';
	$sql = "DELETE FROM room WHERE room_id='$_REQUEST[room_id]'";

    if ($conn->query($sql) === TRUE) 
	{
	echo "Room deleted successfully";
    } 
	else {
        echo "Error deleting record: " . $conn->error;
    }
	$conn->close();
	header("location:room.php");
?>
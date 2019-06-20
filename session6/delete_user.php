<?php 
	include 'connect.php';
	$id = $_GET['id'];
	$sql = "DELETE FROM users WHERE id = $id";
	if (mysqli_query($connect, $sql) === TRUE) {
    header("Location: list_user.php");
  }
?>
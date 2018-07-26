<?php 
	include('DBConnect.php');

	$query="DELETE FROM `products` WHERE product_id='".$_GET['poll']."'";
	  if (!mysqli_query($conn, $query)) {
	     $last_error = mysqli_error($conn);
	     return false;
	  }
	  else {
	       mysqli_query($conn, $query);
	       header('Location: admin.php');
	  } 
?>
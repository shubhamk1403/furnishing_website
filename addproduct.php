<?php 

	include('DBConnect.php');

	/* Get data from Client side using $_POST array */
	$product_name    = $_POST['product_name'];
	$product_description   = $_POST['product_description'];
	$product_type    = $_POST['product_type'];

	$final_file="";

	if(isset($_POST['product_name']))
	{    
	 $file      = $_FILES['fileToUpload']['name'];
	 $file_loc  = $_FILES['fileToUpload']['tmp_name'];
	 $file_size = $_FILES['fileToUpload']['size'];
	 $file_type = $_FILES['fileToUpload']['type'];
	 $folder="products/";
	 
	 // new file size in KB
	 $new_size = $file_size/1024;  
	 // new file size in KB
	 
	 // make file name in lower case
	 $new_file_name = $file;
	 // make file name in lower case
	 
	 $final_file=str_replace(' ','-',$new_file_name);
	 
	 // echo "$file_loc $folder $final_file $file_size";

	 if(move_uploaded_file($file_loc, $folder.$final_file ))
	 {
	 ?>
	   <script>
	  alert('successfully uploaded');
	    </script>
	    <?php
	 }
	 else
	 {
	 	?>
	    <script>
	  alert('Error while uploading file/Select smaller file');
	        </script>
	   <?php
	 }
	}

	$fileToUpload="products/".$final_file;

	// echo "$product_name,$product_description,$product_type,$fileToUpload";
	   $query = "SELECT COUNT(*) FROM products";

	   $rs = mysqli_query($conn, $query);
	   $row = $rs->fetch_row();
	   $product_id=$row[0]+1;

	   $sql = "INSERT INTO `products`(`type`, `name`, `specification`, `image`, `product_id`) VALUES (?,?,?,?,?)";
	   $stmt   = $conn->prepare($sql);
	   $stmt->bind_param('sssss', $product_type, $product_name, $product_description, $fileToUpload, $product_id);
	   if($stmt->execute()){
	     header('Location: admin.php');
	   }
	   else{
	   	 die('bind_param() failed: ' . htmlspecialchars($stmt->error));
	}
	$conn->close();
?>
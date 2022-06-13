<?php 
	
	require_once "connectDB.php";
	$target = "assets/images/".basename($_FILES['pImage']['name']);
  echo"$target";
  // Get all the submitted data from the form
  $image = $_FILES['pImage']['name'];


 	$sql="UPDATE products SET pCatID=:pCatID, pName=:pName, pDesc=:pDesc, pImage=:pImage WHERE pID = :x";
	$stmt = $pdo->prepare($sql);
	$stmt -> execute(array(
        ':x' => $_GET['id'],
        ':pCatID' => $_POST['pCatID'],
		':pName' => $_POST['pName'],
		':pDesc' => $_POST['pDesc'],
		':pImage' => $image
	));
 	if (move_uploaded_file($_FILES['pImage']['tmp_name'], $target)) {
		$msg = "Image uploaded successfully";
	}else{
		$msg = "There was a problem uploading image";
	}
echo'<script> alert("New Product added"); </script>';

header("Location :viewAllProducts.php");
?>





<?php 
	require_once "connectDB.php";

 	$x = $_GET['id'];

 	// $sql="DELETE FROM student WHERE id=$x";set pArchive= 'yes'
 	$sql="DELETE FROM products WHERE pID=$x";
 	  
	$stmt = $pdo->prepare($sql);
	$stmt -> execute(array(':x' => $_GET['id']));

	echo '<script type="text/javascript">'; 
        echo 'alert("Product Deleted Successfully!!");'; 
        echo 'window.location.href = "viewAllProducts.php";';
        echo '</script>';

	// header("Location : viewAllProducts.php");

?>




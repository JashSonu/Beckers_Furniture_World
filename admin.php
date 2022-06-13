<?php

$em = $_POST['email'];
$password = $_POST['password'];

if($em=="admin@meubilar.com" && $password=="admin@123")
{
    header("Location: addCategory.php");
}
else
{
    $msg = "Invalid email or password";
//    echo '<script> alert("Invalid email or password")</script>';        
    header("Location: index.php");
}
   

?>  <h4><?php echo $msg; ?></h4>

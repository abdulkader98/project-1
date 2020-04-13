<?php
$email = $_GET['email'];

$conn = mysqli_connect('localhost','root','','LoginSystem');
$sql = "DELETE FROM users WHERE email = $email";

if(mysqli_query($conn,$sql)){
	header("Location: doctor.php");

}else{
	echo "No Deleted";
}


?>
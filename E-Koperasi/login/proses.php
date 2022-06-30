<?php
session_start();

include "config/config.php";
// Dikirim dari form
if ($_SERVER["REQUEST_METHOD"] == "POST"){
	$username=$_POST['username'];
	$password=$_POST['password'];
	$query=mysqli_query($conn, "SELECT * FROM admin WHERE username='$username' AND password='$password'");
	$jumlah=mysqli_num_rows($query);
	$a=mysqli_fetch_array($query);


	if($a > 0){
		
		header("location:../admin/tampilan/index.php");
		
	}else{
		$_SESSION["login_failed"] = "Username dan Password yang anda masukan salah";

		header("location:index.php");
	}
}
?>


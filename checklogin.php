<?php session_start();
if(isset($_POST["txtuname"])){ // Input from login page
	include("connect/connect.php"); // Connect
	$Username = $_POST["txtuname"]; // Input Username
	$Password = $_POST["txtpword"]; // Input Password
	
	$sql = "SELECT * FROM member WHERE mb_uname = '".$Username."' AND '".$Password."'";
	$result = mysqli_query($con, $sql);
}
if(mysqli_num_rows($result)==1){
	$row = mysqli_fetch_array($result);
	$_SESSION["mb_id"] = $row["mb_id"];
	$_SESSION["mb_uname"] = $row["mb_uname"];
	$_SESSION["mb_address"] = $row["mb_address"];
	$_SESSION["mb_tel"] = $row["mb_tel"];
	$_SESSION["mb_mail"] = $row["mb_mail"];
	$_SESSION["mb_status"] = $row["mb_status"];
}
if($_SESSION["md_status"]=="ADMIN"){ // If Member Status is ADMIN, Jump to the admin.php page.
	header("Location: admin.php");
}
if($_SESSION["md_status"]=="USER"){ // If Member Status is ADMIN, Jump to the admin.php page.
	header("Location: user.php");
}
else{ // If Username or Password is incorrect, Back to login.php again
	echo "<script>";
	echo "alert('Username หรือ Password')";
	echo "window.history.back()";
	echo "</script>";
	
	header("Location: login.html");
}
?>
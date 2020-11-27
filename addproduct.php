<?php
include("connect/connect.php");
date_default_timezone_set("Asia/Bangkok");
$date1= date("Ymd_His");
$numrand = (mt_rand());
$p_name = $_POST["txtpname"];
$p_detail = $_POST["txtpdetail"];
$p_price = $_POST["txtpprice"];
$c_id = $_POST["slctype"];
$p_img = (isset($_POST["imgp"])? $_POST["imgp"]:"");

$upload = $_FILES["imgp"];
if($upload <>""){
	$path = "p-img/";
	$type = strrchr($_FILES["imgp"]["name"],".");
	$newname = "imgp".$numrand.$date1.$type;
	$path_copy = $path.$newname;
	$path_link = "imgp".$newname;
	
	move_uploaded_file($_FILES["imgp"]["tmp_name"], $path_copy);
}
$sql = "INSERT INTO product(p_name, p_detail, p_price, c-id, p_img) VALUES('$p_name', '$p_detail', '$p_price', '$c_id', '$p_img')";
$result = mysqli_query($con, $sql);

if($result){
	echo"<script type='text/javascript'>";
	echo "alert('Add Succesfuly');";
	echo "window.location = 'admin.php';";
	echo "</script>";
}
else{
	echo"<script type='text/javascript'>";
	echo "alert('Error back to upload again');";
	echo "window.location = 'addproduct.php';";
	echo "</script>";
}
?>
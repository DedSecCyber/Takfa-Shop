<?php include("connect/connect.php");
$strSQL = "SELECT * FROM member WHERE mb_uname = '".trim($_POST['txtusern'])."'";
$objQuery = mysqli_query($con,$strSQL);
$objResult = mysqli_fetch_array($objQuery, MYSQLI_ASSOC);

if($objResult){
	echo "ไม่สามารถใช้ ชื่อผู้ใช้ นี้ได้";
}else{
	$strSQL = "INSERT INTO member (mb_uname,mb_pword, mb_name,mb_address,mb_tel,mb_mail) VALUES ('".$_POST['txtusern']."','".$_POST["txtpassw"]."','".$_POST["txtaddress"]."','".$_POST["txttel"]."','".$_POST["txtmail"]."')";
	$objQuery = mysqli_query($con, $strSQL);
	echo "สมัครเสร็จสิ้น! <br>";
	echo "<br><a href='login.html'>กลับไปที่หน้าแรก</a>";
}
mysqli_close($con);
?>
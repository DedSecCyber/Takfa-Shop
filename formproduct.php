<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>สินค้า</title>
<link href="css/bootstrap-4.4.1.css" rel="stylesheet" type="text/css">
<?php include("connect/connect.php");
$perpage = 5;
if(isset($_GET["page"])){
	$page = $_GET["page"];
}
else{
	$page = 1;
	
	$start = ($page - 1) * $perpage;
	$sql3 = "SELECT * FROM product LIMIT {$start}, {$perpage}";
	$query = mysqli_query($con, $sql3);
}
?>
</head>

<body background="images/background.jpg">
<table width="1010" border="1" align="center">
  <tbody>
    <tr>
      <td>
		<div class="container">
		  <table align="center" width="1010" height="300">
			<tbody>
			  <tr>
				<td><img src="images/banner.png" width="1010" height="300" alt=""/></td>
			  </tr>
			</tbody>
		  </table>
		  <ul class="nav nav-tabs">
			<li class="nav-item"> <a class="nav-link active" href="#">หน้าแรก</a> </li>
			<li class="nav-item"> <a class="nav-link" href="#">สินค้า</a> </li>
			<li class="nav-item"> <a class="nav-link" href="#">ติดต่อเรา</a> </li>
			<li><a href="login.html">
			  <button type="button" class="btn btn-primary">เข้าสู่ระบบ</button>
			</a></li>
		  </ul>
		  <h1>สินค้า</h1>
		  <h2>ตัวอย่างสินค้า</h2>
		  <table align="center" width="600" border="1" cellpadding="10" cellspacing="3">
		    <tbody>
		      <tr>
		        <td width="91" align="center" bgcolor="#007BFF"><strong>ภาพ</strong></td>
		        <td width="200" align="center" bgcolor="#007BFF"><strong>ชื่อสินค้า</strong></td>
		        <td width="44" align="center" bgcolor="#007BFF"><strong>ราคา</strong></td>
		        <td width="100" align="center" bgcolor="#007BFF"><strong>รายละเอียดสินค้า</strong></td>
		        <td width="100" align="center" bgcolor="#007BFF"><strong>ลบ</strong></td>
	          </tr>
			  <tr>
				  <?php
				  $sql = "SELECT * FROM product ORDER BY p_id";
				  $result = mysqli_query($con, $sql);
				  while($row = mysqli_fetch_array($result)){
					  echo "<tr>";
					  echo "<td aling='center'> <img src='../p-img/".$row["p_img"]."' width='80></td>'";
					  echo "<td align='left'>".$row["p_name"]."</td>";
					  echo "<td align='center'".number_format($row["p_price"], 2)."</td>";
					  echo "<td align='center'><a href='formdetail.phpp_id=$row[p_id]'>คลิกฒ</a></td>";
					  echo "<td align='center'><a href='deletedb.php?p_id=$row[0]' onclick=\"retrun confirm('Do you to delete this record? !!!')\">ลบ</a></td>";
					  echo "</tr>";
				  }
				  ?>
			</table>
				</tr>
	        </tbody>
	      </table>
       	
		  <table align="center" width="1010" height="200">
			  <tbody>
				  <tr>
					  <td align="center" valign="middle">©Takfa Shop&nbsp;</td>
				  </tr>
			  </tbody>
			</table>
		</div>

		</td>
    </tr>
  </tbody>
</table>
</body>
</html>
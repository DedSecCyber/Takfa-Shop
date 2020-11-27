<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Admin Panal</title>
</head>

<body>
	<table width="210" border="0" cellpadding="0" cellspacing="5">
		<tr>
			<td colspan="2"><div align="center">
				<?php session_start(); echo "ยินดีต้อนรับคุณ ".$_SESSION["md_uname"];?>
				</div>				
			</td>
		</tr>
		<tr>
			<td width="80"><div align="right">รหัส : </div></td>
			<td><?php echo ($_SESSION["mb_id"]);?></td>
		</tr>
		<tr>
			<td><div align="right">ชื่อจริง : </div></td>
			<td><?php echo ($_SESSION["mb_name"]);?></td>
		</tr>
		<tr>
			<td><div align="right">เบอร์โทร : </div></td>
			<td><?php echo ($_SESSION["mb_tel"]);?></td>
		</tr>
		<tr>
			<td><div align="right">Email : </div></td>
			<td><?php echo ($_SESSION["mb_mail"]);?></td>
		</tr>
		<tr>
			<td colspan="2"><div align="center"></div></td>
		</tr>
	</table>
</body>
</html>
<?php
	session_start();

	if($_SESSION['id'] == "")
	{
		echo "กรุณากรอกเข้าสู่ระบบ!";
		exit();
	}

	if($_SESSION['status'] != "EMPLOYEE")
	{
		echo "หน้านี้สำหรับ ผู้ดูแลระบบ เท่านั้น!";
		exit();
	}	
	require_once('conn.php');
	$sql = "SELECT * FROM Register WHERE id = '".$_SESSION['id']."' ";
	$query = mysqli_query($conn,$sql);
	$result = mysqli_fetch_array($query,MYSQLI_ASSOC);
?>


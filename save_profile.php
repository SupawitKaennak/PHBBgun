<?php
	session_start();
	if($_SESSION['id'] == "")
	{
		echo "กรุณากรอกเข้าสู่ระบบ!";
		exit();
	}

	require_once('conn.php');
	$sql = "SELECT * FROM Register WHERE id = '".$_SESSION['id']."' ";
	$query = mysqli_query($conn,$sql);
	$result = mysqli_fetch_array($query,MYSQLI_ASSOC);
	
	$sql = "UPDATE Register SET 
	password = '".$_POST["password"]."',
	name = '".$_POST["name"]."',  
	last_name = '".$_POST["last_name"]."', 
	username = '".$_POST["username"]."', 
	email = '".$_POST["email"]."' 
	WHERE id = '".$_SESSION["id"]."' ";

	$query = mysqli_query($conn,$sql);
	
	echo "บันทึกข้อมูลผู้ใช้สำเร็จ!";		
	
	if($result["status"] == "EMPLOYEE")
			{
				header("location:https://waraporn.cmtc.ac.th/student/student64/u64301280018/PHBBgun/Management_product.php");
			}
			else
			{
				header("location:https://waraporn.cmtc.ac.th/student/student64/u64301280018/PHBBgun/Management_product.php");
			}
	
	mysqli_close($conn);
?>

<?php
	session_start();
	require_once('conn.php'); // เรียกใช้ไฟล์ชื่อ conn.php
	
	$sql = "SELECT * FROM Register WHERE username = '".mysqli_real_escape_string($conn,$_POST['username'])."' and password = '".mysqli_real_escape_string($conn,$_POST['password'])."'";

	$query = mysqli_query($conn,$sql);
	$result = mysqli_fetch_array($query);

	if(!$result)
	{
			echo "ชื่อผู้ใช้ หรือ รหัสผ่าน ผิดพลาด!";
			echo "<meta http-equiv=\"Refresh\" content=\"1; URL=https://waraporn.cmtc.ac.th/student/student64/u64301280018/PHBBgun/Login-Signup.html\">";
	}
	else
	{
			$_SESSION["id"] = $result["id"];
			$_SESSION["status"] = $result["status"];

			session_write_close();
			
			if($result["status"] == "EMPLOYEE")
			{
				header("location:https://waraporn.cmtc.ac.th/student/student64/u64301280018/PHBBgun/Management_product.php");
			}
			else
			{
				header("location:https://waraporn.cmtc.ac.th/student/student64/u64301280018/PHBBgun/Management_product.php");
			}
	}
	mysqli_close($conn);
?>

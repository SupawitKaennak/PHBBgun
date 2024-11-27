<?php
	// คำสั่ง เรียกใช้ไฟล์ conn.php สำหรับเชื่อมต่อฐานข้อมูล
	require_once('conn.php');

	// คำสั่ง เช็คการเชื่อมต่อ
	if (!$conn) {
  		die("ไม่สามารถเชื่อมต่อฐานข้อมูลได้ " . mysqli_connect_error());
	}

	// คำสั่ง เพิ่มข้อมูลไปยังฐานข้อมูล /ชื่อคอลัมน์ในตาราง /ค่าที่ใส่ในตาราง
	$sql = "INSERT INTO Register (name, last_name, email, username, password)VALUES('".$_POST["name"]."','".$_POST["last_name"]."',
		'".$_POST["email"]."','".$_POST["username"]."','".$_POST["password"]."')";

	// คำสั่ง ให้ sql ทำงาน
	if (mysqli_query($conn, $sql)) {
  		echo "บันทึกข้อมูลสำเร็จ...";
  		echo "<meta http-equiv=\"Refresh\" content=\"1; URL=https://waraporn.cmtc.ac.th/student/student64/u64301280018/PHBBgun/Login-Signup.html\">";
	}

	// ยกเลิกการเชื่อมต่อฐานข้อมูล
	mysqli_close($conn);
?> 

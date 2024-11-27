<?php
	// คำสั่ง เรียกใช้ไฟล์ conn.php สำหรับเชื่อมต่อฐานข้อมูล
	require_once('conn.php');

	// คำสั่ง เช็คการเชื่อมต่อ
	if (!$conn) {
  		die("ไม่สามารถเชื่อมต่อฐานข้อมูลได้ " . mysqli_connect_error());
	}

	// คำสั่ง เพิ่มข้อมูลไปยังฐานข้อมูล /ชื่อคอลัมน์ในตาราง /ค่าที่ใส่ในตาราง
	$sql = "INSERT INTO customer (namecutomer, address, road, tumbol, Amphur, province)VALUES('".$_POST["namecutomer"]."','".$_POST["address"]."','".$_POST["road"]."','".$_POST["tumbol"]."','".$_POST["Amphur"]."','".$_POST["province"]."')";

	// คำสั่ง ให้ sql ทำงาน
	if (mysqli_query($conn, $sql)) {
  		echo "บันทึกข้อมูลสำเร็จ...";
  		echo "<meta http-equiv=\"Refresh\" content=\"1; URL=https://waraporn.cmtc.ac.th/student/student64/u64301280018/PHBBgun/64301280018/testlogin/login.php\">";
	}

	// ยกเลิกการเชื่อมต่อฐานข้อมูล
	mysqli_close($conn);
?> 

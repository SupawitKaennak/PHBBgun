<html>

  <head>
    <title>ทดสอบ เข้าสู่ระบบ</title>
  </head>

  <body>
    <!-- หน้าฟอร์ม สำหรับกรอกข้อมูลผู้ใช้ -->
    <a href="https://waraporn.cmtc.ac.th/student/student64/u64301280018/PHBBgun/testregister/testregister.php">สมัครสมาชิก</a><br><br>

    <form name="form1" method="post" action="check_login.php">
      เข้าสู่ระบบ...<br>
      <table border="1" style="width: 300px">
        <tbody>
          <tr>
            <td> &nbsp;ชื่อผู้ใช้ :</td>
            <td>
              <input name="txtUsername" type="text" id="txtUsername">
            </td>
          </tr>
          <tr>
            <td> &nbsp;รหัสผ่าน :</td>
            <td><input name="txtPassword" type="password" id="txtPassword">
            </td>
          </tr>
        </tbody>
      </table>
      <br>
      <input type="submit" name="Submit" value="เข้าสู่ระบบ">
      <input type="reset" name="Submit2" value="ลบข้อมูล">
    </form>
  </body>
</html>
<!DOCTYPE html>

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
?>

<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>ลงทะเบียน/เข้าสู่ระบบ</title>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'><link rel="stylesheet" href="css/Loginstyle.css">

</head>
<body>         
<!-- partial:index.partial.html -->
<div class="logmod">
  <div class="logmod__wrapper">  
    <div class="logmod__container">
      <ul class="logmod__tabs">
        <li data-tabtar="lgm-1"></li>       
      </ul>
      <div class="logmod__tab-wrapper">
      <div class="logmod__tab lgm-1">
        <div class="logmod__heading">
          <span class="logmod__heading-subtitle"><h2><strong>ตั้งค่าบัญชี</strong></h2></span>
        </div>
        <div class="logmod__form">
          <form accept-charset="utf-8" method="post" action="save_profile.php" class="simform">

            <div class="sminputs">
              <div class="input full">
                <td width="125"> &nbsp;ลำดับ<a style="color:red;">(ไม่สามารถเปลี่ยนได้)</a> :</td>
                <td width="180"><?php echo $result["id"];?></td>                
              </div>
            </div>

            <div class="sminputs">
              <div class="input full">
                <td> &nbsp;ชื่อผู้ใช้ :</td>
                <td><?php echo $result["username"];?></td>
                <input class="string optional" maxlength="255" placeholder="ชื่อผู้ใช้ที่ต้องการเปลี่ยน" id="username"  name="username" type="text" size="50" required/>
              </div>
            </div>

            <div class="sminputs">
              <div class="input full">
                <td> &nbsp;รหัสผ่าน : ****</td>          
                <input class="string optional" maxlength="255" <?php echo $result["password"];?> placeholder="รหัสที่ต้องการเปลี่ยน"  id="password"  name="password" type="password" required/>
                  <span class="hide-password">Show</span>
              </div>
            </div>

            <div class="sminputs">
              <div class="input full">
                <td>&nbsp;ชื่อ :</td>
                <td><?php echo $result["name"];?></td>
                <input class="string optional" maxlength="255" placeholder="ชื่อจริงที่ต้องการเปลี่ยน" id="name"  name="name" type="text" required/>
              </div>
            </div>

            <div class="sminputs">
              <div class="input full">
                <td>&nbsp;นามสกุล :</td>
                <td><?php echo $result["last_name"];?></td>
        
                <input class="string optional" maxlength="255" placeholder="นามสกุลที่ต้องการเปลี่ยน" id="last_name"  name="last_name" type="text" size="50" required/>
                    
              </div>              
            </div>
            <div class="sminputs">
              <div class="input full">
                <td>&nbsp;อีเมล :</td>
                <td><?php echo $result["email"];?></td>
        
                <input class="string optional" maxlength="255" placeholder="อีเมลที่ต้องการเปลี่ยน" id="email"  name="email" type="text" size="50" required/>
                    
              </div>              
            </div>
             <div class="sminputs">
              <div class="input full">
                <td> &nbsp;สถานะ<a style="color:red;">(ไม่สามารถเปลี่ยนได้)</a> :</td>
                 <td><?php echo $result["status"];?></td>
           
              </div>              
            </div>
            <div class="simform__actions">
              <input class="sumbit" name="commit" type="submit" value="บันทึก" /> 
              <span class="simform__actions-sidetext"><a class="special" role="link" href="https://waraporn.cmtc.ac.th/student/student64/u64301280018/PHBBgun/Management_product.php"><h3>กลับสู่หน้าหลัก</h3></a></span>          
            </div> 
          </form>
        </div>        
                       
              <div class="connect__icon"> </div>
              <div class="connect__context"></div>
         
          </form>
        </div>      
          </div>         

<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script><script  src="css/Loginscript.js"></script>

</body>
</html>

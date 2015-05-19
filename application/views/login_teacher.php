<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset="UTF-8" /> 
    <?php echo css_asset('bootstrap.min.css');?>
    <!-- Custom CSS -->
    
    <?php echo css_asset('sb-admin.css');?>
    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <?php echo css_asset('font-awesome.min.css');?>
    <title>
        เข้าระบบสำหรับอาจารย์
    </title>
   
    <?php echo css_asset('login.css');?>
</head>
<body>
    
      <div class="col-lg-12">
          <h1 class="page-header"></h1></div>
    <?php echo validation_errors(); ?>
   <?php echo form_open('teacher/login_system'); ?>
   <h1>เข้าระบบสำหรับอาจารย์</h1>
  <div class="inset">
  <p>
      <label for="username">ชื่อผู้ใช้</label></p>
  <div class="controls">
      <div class="input-icon left">
         <input type="text" name="username" id="username"> 
      </div>
  </div>
    
  
  <p>
    <label for="password">รหัสผ่าน</label></p>
  <div class="controls">
    <input type="password" name="password" id="password">
  </div>
  
    </div>
  <p class="p-container">
    <span>Forgot password ?</span>
    <input type="submit" name="submit" id="submit" value="เข้าระบบ">
  </p>
 
    <?php echo form_close();?>
  <div class="col-lg-12">
      <h1 class="page-header"></h1></div>
    <?php echo js_asset('jquery.js');?>
    <!-- Bootstrap Core JavaScript -->
    <?php echo js_asset('bootstrap.min.js');?>
   
</body>
</html>
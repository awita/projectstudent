<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset="UTF-8" /> 
    <?php echo css_asset('bootstrap.min.css');?>
    <!-- Custom CSS -->
    
    <?php echo css_asset('sb-admin.css');?>
    <!-- Custom Fonts -->
    <?php echo css_asset('font-awesome.min.css');?>
    <title>
        เข้าระบบสำหรับนักศึกษา
    </title>
   
    <?php echo css_asset('login.css');?>
</head>
<body>
    
    <div class="col-lg-12">
        <h1 class="page-header"></h1>
    
    <?php echo form_open('student/login_system');?>
  <h1>เข้าระบบสำหรับนักศึกษา</h1>
  <div class="inset">
  <p>
    <label for="id_st">รหัสนักศึกษา</label>
  <div class="controls">
      <div class="input-icon left">
         <input type="text" name="id_st" id="id_st"> 
      </div>
  </div>
    
  </p>
  <p>
    <label for="password">รหัสผ่าน</label>
  <div class="controls">
    <input type="password" name="pass" id="pass">
  </div>
  </p>
    </div>
  <p class="p-container">
    <span>Forgot password ?</span>
    <input type="submit" name="submit" id="submit" value="เข้าระบบ">
  </p>
 
    <?php echo form_close();?>
  </div>
  <div class="col-lg-12">
      <h1 class="page-header"></h1></div>
    <?php echo js_asset('jquery.js');?>
    <!-- Bootstrap Core JavaScript -->
    <?php echo js_asset('bootstrap.min.js');?>
   
</body>
</html>
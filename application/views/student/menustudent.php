<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset="UTF-8" /> 
    <title>
        เข้าระบบสำหรับนักศึกษา
    </title>
   
    <?php echo css_asset('backgr.css');?>
</head>
<body>
                <!-- Page Heading -->
                <div class="row " >
                    <div class="col-md-6 col-md-offset-3">
                        <h1 class="page-header">
                            ระบบจัดการข้อมูลการฝึกประสบการณ์วิชาชีพ
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> เมนูหลัก
                            </li>
                        </ol>
                    </div>
                </div>
              
            <!-- /.row -->
       <div class="col-lg-12 " >
        <div class="row">
                    <div class="col-md-3 col-md-offset-3">
                        <a href="<?php echo base_url('index.php/student/datastudent')?>">
                        <div class="panel panel-primary aligncenter">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-pencil fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-left">
                                        <div><h4>ข้อมูลส่วนตัวนักศึกษา</h4></div>
                                    </div>
                                </div>
                            </div>        
                                <div class="panel-footer">
                                    <span class="pull-left"></span>
                                </div>       
                        </div>
                            </a>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <a href="<?php echo base_url('index.php/student/showdetail')?>">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-file-text fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-left">
                                        <div><h4>เลือกสถานประกอบการณ์</h4></div>
                                    </div>
                                </div>
                            </div>
                                <div class="panel-footer">
                                </div>                            
                        </div>
                        </a>
                    </div>
        </div>
            <div class="row">
                    <div class="col-md-3 col-md-offset-3">
                        <a href="<?php echo base_url('index.php/establishment/addformes')?>">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-google fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-left">
                                        <div><h4>ขอเพิ่มสถานประกอบการณ์ใหม่</h4></div>
                                    </div>
                                </div>
                            </div>                            
                                <div class="panel-footer">
                                </div>                            
                        </div>
                            </a>
                    </div>            
                    <div class="col-lg-3 col-md-6">
                        <a href="#">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-file-text fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-left">
                                        <div><h4>เพิ่มสถานที่ตั้งผ่าน Google map</h4></div>
                                    </div>
                                </div>
                            </div>                            
                                <div class="panel-footer">
                                    <div class="clearfix"></div>
                                </div>                            
                        </div>
                        </a>
                    </div>
                </div>
      
      <div class="row">
                    <div class="col-md-3 col-md-offset-3"  >
                        <a href="#">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-file-text  fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-left">
                                        <div><h4>กำหนดการส่งเอกสาร</h4></div>
                                    </div>
                                </div>
                            </div>                          
                                <div class="panel-footer">
                                    <span class="pull-left"></span>
                                </div>                           
                        </div>
                             </a>
                    </div>            
                    <div class="col-lg-3 col-md-6"  >
                        <a href="#">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-file-o fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-left">
                                        <div><h4>ตารางนิเทศนักศึกษา</h4></div>
                                    </div>
                                </div>
                            </div>                           
                                <div class="panel-footer">
                                    <span class="pull-left"></span>
                                </div>                          
                        </div>
                             </a>
                    </div>                        
      </div>
        <div class="row">
                    <div class="col-md-3 col-md-offset-3"  >
                        <a href="#">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-file-text  fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-left">
                                        <div><h4>รายงานการประเมิน</h4></div>
                                    </div>
                                </div>
                            </div>                           
                                <div class="panel-footer">
                                    <span class="pull-left"></span>
                                </div>                           
                        </div>
                             </a>
                    </div>            
                    <div class="col-lg-3 col-md-6"  >
                        <a href="#">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-file-o fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-left">
                                        <div><h4>คะแนนการฝึกงาน</h4></div>
                                    </div>
                                </div>
                            </div>               
                                <div class="panel-footer">
                                    <span class="pull-left"></span>
                                </div>
                        </div>
                             </a>
                    </div>                   
            </div>
        </div>
     <h1 class="page-header"> </h1>
  <div class="col-lg-12">
      <h1 class="page-header"></h1>
  
  
  </div>
    <?php echo js_asset('jquery.js');?>
    <!-- Bootstrap Core JavaScript -->
    <?php echo js_asset('bootstrap.min.js');?>
   
</body>
</html>
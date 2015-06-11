<!DOCTYPE html>
<html lang='en'>
    <head>
        <meta charset="UTF-8" /> 
        <?php echo css_asset('bootstrap.min.css'); ?>
        <!-- Custom Fonts -->
        <?php echo css_asset('font-awesome.min.css'); ?>
        <?php echo css_asset('backgr.css'); ?>
    </head>
    <body>
        <div class="container-fluid">
            <!-- Page Heading -->
            <div class="row " >
                <div class="col-md-8 col-md-offset-2">
                    <h1 class="page-header">
                        ระบบจัดการข้อมูลการฝึกประสบการณ์วิชาชีพ
                    </h1>
                    <ol class="breadcrumb">
                        <li>
                            <i class="fa fa-dashboard"></i>  <a href="<?php echo base_url('index.php/student/menu'); ?> ">หน้าหลัก</a>
                        </li>
                        <li class="active">
                            <i class="fa fa-angellist"></i> เมนูเอกสาร
                        </li>
                        
                    </ol>
                </div>
            </div>
            <!-- /.row -->

            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">ข้อมูลรายละเอียดนักศึกษา</h3>
                        </div>                      
                        <div class="panel-body"> 
                            <div class="box-body no-padding">
                                <table class="table table-striped">
                                    <tbody>
                                        <tr>
                                            <th style="width: 20%">ลำดับ</th>
                                            <th>เอกสาร</th>
                                            <th >สถานะการส่งเอกสาร</th>
                                            
                                        </tr>
                                        <tr>
                                            <td>เอกสารหมายเลข 1</td>
                                            <td><a href="<?php echo base_url('index.php/document/document_num1');?>">แบบแจ้งรายละเอียดที่พัก</a></td>
                                            
                                            <td>
                                                <span class="badge bg-red">55%</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>เอกสารหมายเลข 2</td>
                                            <td><a href="">แบบแจ้งแผนปฏิบัตงานการฝึกประสบการณ์วิชาชีพ</a></td>
                                            
                                            <td>
                                                <span class="badge bg-yellow">70%</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>เอกสารหมายเลข 3</td>
                                            <td>แบบแจ้งโครงร่างรายงานการปฏิบัติงาน</td>
                                            <td>
                                                <span class="badge bg-red">55%</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>เอกสารหมายเลข 4</td>
                                            <td>แบบแจ้งยืนยันสส่งรายงานการปฏิบัติงาน</td>
                                            <td>
                                                <span class="badge bg-red">55%</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>เอกสารหมายเลข 5</td>
                                            <td>แบบแจ้งรายละเอียดเกี่ยวกับการปฏิบัติงาน</td>
                                            <td>
                                                <span class="badge bg-red">55%</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>เอกสารหมายเลข 6</td>
                                            <td>แบบแจ้งรายละเอียดงาน ตำแหน่ง พนักงานที่ปรึกษา </td>
                                            <td>
                                                <span class="badge bg-red">55%</span>
                                            </td>
                                        </tr>
                                        
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>



            <h1 class="page-header"> </h1>
            <div class="col-lg-12">
                <h1 class="page-header"></h1>


            </div>
        </div>
        <?php echo js_asset('jquery.js'); ?>
        <!-- Bootstrap Core JavaScript -->
        <?php echo js_asset('bootstrap.min.js'); ?>

    </body>
</html>
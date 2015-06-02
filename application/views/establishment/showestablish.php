<!DOCTYPE html>
<html lang='en'>
    <head>
        <meta charset="UTF-8" /> 
        <?php echo css_asset('bootstrap.min.css'); ?>
        <!-- Custom CSS -->

        <?php echo css_asset('sb-admin.css'); ?>
        <!-- Custom Fonts -->
        <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <?php echo css_asset('font-awesome.min.css'); ?>
        <title>
            เข้าระบบสำหรับนักศึกษา
        </title>

        <?php echo css_asset('backgr.css'); ?>
    </head>
    <body>
        <!-- Page Heading -->
        <div class="row " >
            <div class="col-md-6 col-md-offset-3">
                <h1 class="page-header">
                    ระบบจัดการข้อมูล <small>การฝึกประสบการณ์วิชาชีพ</small>
                </h1>
                <ol class="breadcrumb">
                    <li class="active">
                        <i class="fa fa-dashboard"></i> Dashboard
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
                    <?php
                    $establish = $establish[0];
                    $id_es = $establish['id_es'];
                    $name_es = $establish['name_es'];
                    $address_es = $establish['address_es'];
                    $tell_es = $establish['tell_es'];
                    $email = $establish['email'];
                    $website = $establish['website'];
                    $peple = $establish['peple'];
                    ?>     

                    <div class="panel-body"> 
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th colspan="2">ข้อมูลสถานประกอบการณ์</th>
                                </tr>
                                <tr>
                                    <th width = "30%">ข้อมูล</th>
                                    <th>รายละเอียดนักศึกษา</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>ชื่อสถานประกอบการณ์ : </td>
                                    <td><?php echo $name_es ?></td>
                                </tr>
                                <tr>
                                    <td>ที่อยู่ :</td>
                                    <td><?php echo $address_es ?></td>
                                </tr>
                                <tr>
                                    <td>เบอร์โทร :</td>
                                    <td><?php echo $tell_es ?></td>
                                </tr>
                                <tr>
                                    <td>เว็บไซต์ :</td>
                                    <td><?php echo $website ?></td>
                                </tr>
                                <tr>
                                    <td>จำนวนบุคลากร :</td>
                                    <td><?php echo $peple ?></td>
                                </tr>
                            </tbody>
                        </table>

                        <div class="col-md-3 col-md-offset-6">
                            <form action="<?php echo base_url('index.php/establishment/update'); ?>">
                                <button type="submit" name="submit"id="submit">แก้ไขข้อมูล</button>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>



        <h1 class="page-header"> </h1>
        <div class="col-lg-12">
            <h1 class="page-header"></h1>


        </div>

        <?php echo js_asset('jquery.js'); ?>
        <!-- Bootstrap Core JavaScript -->
        <?php echo js_asset('bootstrap.min.js'); ?>

    </body>
</html>

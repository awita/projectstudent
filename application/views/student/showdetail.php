<!DOCTYPE html>
<html lang='en'>
    <head>
        <meta charset="UTF-8" /> 
        <?php echo css_asset('bootstrap.min.css'); ?>
        <!-- Custom Fonts -->
        <?php echo css_asset('font-awesome.min.css'); ?>
        
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
                            <i class="fa fa-table"></i> ข้อมูลนักศึกษา
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
                        $student = $student_es['0'];
                        $id_st = $student['id_st'];
                        $name_st = $student['name_st'];
                        $lastname_st = $student['lastname_st'];
                        $tell_st = $student['tell_st'];
                        $email = $user['email'];
                        $major = $student['major'];
                        $term = $student['term'];
                        $year = $user['year'];
                        $name_pr = $student['name_pr'];
                        $relation = $student['relation'];
                        $tell_pr = $student['tell_pr'];
                        $gender = $student['gender'];
                        
                        ?>     
                        <div class="panel-body"> 
                            <table class="table table-bordered">
                                <thead >
                                    <tr>
                                        <th colspan="2" class="bg-info">ข้อมูลทั่วไปของนักศึกษา</th>
                                    </tr>
                                    <tr >
                                        <th width = "30%">ข้อมูล</th>
                                        <th>รายละเอียดนักศึกษา</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td>ภาคเรียนที่ : </td>
                                        <td><?php echo $term ?></td>
                                    </tr>
                                    <tr>
                                        <td>ปีการศึกษา :</td>
                                        <td><?php echo $year ?></td>
                                    </tr>
                                    <tr>
                                        <td>รหัสนักศึกษา :</td>
                                        <td><?php echo $id_st ?></td>
                                    </tr>
                                    <tr>
                                        <td>เพศ :</td>
                                        <td><?php echo $gender ?></td>
                                    </tr>
                                    <tr>
                                        <td>ชื่อนักศึกษา :</td>
                                        <td><?php echo $name_st ?></td>                                             
                                    </tr>
                                    <tr>
                                        <td>นามสกุล :</td>
                                        <td><?php echo $lastname_st ?></td>
                                    </tr>
                                    <tr>
                                        <td>สาขาวิชา :</td>
                                        <td><?php echo $major ?></td>
                                    </tr>
                                    <tr>
                                        <td>เบอร์โทรศัพท์ :</td>
                                        <td><?php echo $tell_st ?></td>
                                    </tr>
                                    <tr>
                                        <td>E-mail :</td>
                                        <td><?php echo $email ?></td>
                                    </tr>
                                </tbody>
                                <thead class="bg-info">
                                    <tr>
                                        <th colspan="2">ชื่อที่อยู่ผู้ที่สามารถติดต่อได้ในกรณีฉุกเฉิน</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>ชื่อ :</td>
                                        <td><?php echo $name_pr ?></td>
                                    </tr>
                                    <tr>
                                        <td>เกี่ยวข้องเป็น :</td>
                                        <td><?php echo $relation ?></td>
                                    </tr>
                                    <tr>
                                        <td>เบอร์โทรศัพท์ :</td>
                                        <td><?php echo $tell_pr ?></td>
                                </tbody>
                            </table>
                            <?php echo form_open(''); ?>
                            <div class="col-md-4 col-md-offset-4 ">
                                <input type="submit" name="edit" value="แก้ไขข้อมูล"/>

                            </div>
                            <?php echo form_close(); ?>
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
<!DOCTYPE html>
<html lang='en'>
    <head>
        <meta charset="UTF-8" /> 
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
                    $website = $student['website'];
                    $tell_es = $student['tell_es'];
                    $name_es = $student['name_es'];
                    $address_es = $student['address_es'];
                    ?>     
                    <div class="panel-body"> 
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th colspan="2">ข้อมูลทั่วไปของนักศึกษา</th>
                                </tr>
                                <tr>
                                    <th width = "30%">ข้อมูล</th>
                                    <th>รายละเอียดนักศึกษา</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>ภาคเรียนที่ : </td>
                                    <td><input class="form-control" name="term" id="term" value="<?php echo $term ?>"></td>
                                </tr>
                                <tr>
                                    <td>ปีการศึกษา :</td>
                                    <td><input class="form-control" name="year" id="year" value="<?php echo $year ?>"</td>
                                </tr>
                                <tr>
                                    <td>รหัสนักศึกษา :</td>
                                    <td><input class="form-control" name="id_st" id="id_st" value="<?php echo $id_st ?>"</td>
                                </tr>
                                <tr>
                                    <td>เพศ :</td>
                                    <td><input class="form-control" name="gender" id="gender" value="<?php echo $gender ?>"</td>
                                </tr>
                                <tr>
                                    <td>ชื่อนักศึกษา :</td>
                                    <td><input class="form-control" name="name_st" id="name_st" value="<?php echo $name_st ?>"</td>                                             
                                </tr>
                                <tr>
                                    <td>นามสกุล :</td>
                                    <td><input class="form-control" name="lastname" id="lastname" value="<?php echo $lastname_st ?>"</td>
                                </tr>
                                <tr>
                                    <td>สาขาวิชา :</td>
                                    <td><input class="form-control" name="major" id="major" value="<?php echo $major ?>"</td>
                                </tr>
                                <tr>
                                    <td>เบอร์โทรศัพท์ :</td>
                                    <td><input class="form-control" name="tell_st" id="tell_st" value="<?php echo $tell_st ?>"</td>
                                </tr>
                                <tr>
                                    <td>E-mail :</td>
                                    <td><input class="form-control" name="email" id="email" value="<?php echo $email ?>"</td>
                                </tr>
                            </tbody>
                            <thead
                                <tr>
                                    <th colspan="2">ชื่อที่อยู่ผู้ที่สามารถติดต่อได้ในกรณีฉุกเฉิน</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>ชื่อ :</td>
                                    <td><input class="form-control" name="name_pr" id="name_pr" value="<?php echo $name_pr ?>"</td>
                                </tr>
                                <tr>
                                    <td>เกี่ยวข้องเป็น :</td>
                                    <td><input class="form-control" name="relation" id="relation" value="<?php echo $relation ?>"</td>
                                </tr>
                                <tr>
                                    <td>เบอร์โทรศัพท์ :</td>
                                    <td><input class="form-control" name="tell_pr" id="tell_pr" value="<?php echo $tell_pr ?>"</td>
                                </tr>
                            </tbody>
                            <thead>
                                <tr>
                                    <th colspan="2">ข้อมูลสถานประกอบการณ์</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>ชื่อสถานประกอบการณ์ :</td>
                                    <td><?php echo $name_es ?></td>
                                </tr>
                                <tr>
                                    <td>ที่อยู่สถานประกอบการณ์ :</td>
                                    <td><?php echo $address_es ?></td>
                                </tr>
                                <tr>
                                    <td>เว็บไซต์:</td>
                                    <td><?php echo $website ?></td>
                                </tr>
                                <tr>
                                    <td>เบอร์โทรศัพท์:</td>
                                    <td><?php echo $tell_es ?></td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <button type="submit" name="save" id="save">บันทึกข้อมูล</button>
                                        <button type="reset" name="cencle" id="cencle">ยกเลิก</button>
                                    </td>
                                </tr>
                            </tbody>
                                
                        </table>
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
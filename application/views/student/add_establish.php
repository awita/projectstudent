
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>SB Admin - Bootstrap Admin Template</title>

        <!-- Bootstrap Core CSS -->

        <?php echo css_asset('bootstrap.min.css'); ?>
        <!-- Custom CSS -->

        <?php echo css_asset('sb-admin.css'); ?>
        <!-- Custom Fonts -->

        <?php echo css_asset('font-awesome.min.css'); ?>

        <?php echo js_asset('jquery-1.10.2.js'); ?>




    </head>

    <body>

     
            <div id="page-wrapper">

                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <h1 class="page-header">
                                แสดงข้อมูลรายละเอียดนักศึกษา
                            </h1>
                            <ol class="breadcrumb">
                                <li>
                                    <i class="fa fa-dashboard"></i>  <a href="">หน้าหลัก</a>
                                </li>
                                <li class="active">
                                    <i class="fa fa-table"></i> เพิ่มสถานประกอบการณ์
                                </li>
                            </ol>
                        </div>
                    </div>
                <?php
                    $student = $student[0];
                    $id_st = $student['id_st'];
                    $name_st = $student['name_st'];
                    $lastname_st = $student['lastname_st'];
                    $tell_st = $student['tell_st'];
                    $email = $student['email'];
                    $major = $student['major'];
                    $term = $student['term'];
                    $year = $student['year'];
                    $name_pr = $student['name_pr'];
                    $relation = $student['relation'];
                    $tell_pr = $student['tell_pr'];
                    ?>
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title" align='center'>เพิ่มสถานประกอบการณ์</h3>
                                </div>
                                <div class="panel-body"> 
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th width = "30%">ข้อมูล</th>
                                                <th>รายละเอียดนักศึกษา</th>
                                            </tr>
                                        </thead>
                                        <tr>
                                            <td>ชื่อนักศึกษา</td>
                                            <td><?php echo $name_st ?></td>
                                        </tr>
                                         <tr>
                                            <td>นามสกุล</td>
                                            <td><?php echo $lastname_st ?></td>
                                        </tr>
                                         <tr>
                                            <td>รหัสนักศึกษา</td>
                                            <td><?php echo $id_st ?></td>
                                        </tr>
                                        <tr>
                                            <td>สาขาวิชา</td>
                                            <td><?php echo $major ?></td>
                                        </tr>
                                         <tr>
                                            <td>ปีการศึกษา</td>
                                            <td><?php echo $year ?></td>
                                        </tr>
                                        <tr>
                                            <td>เบอร์โทรศัพท์นักศึกษา</td>
                                            <td><?php echo $tell_st ?></td>
                                        </tr>
                                         <tr>
                                            <td>e-mail</td>
                                            <td><?php echo $email ?></td>
                                        </tr>
                                         <tr>
                                            <td>ชื่อผู้ปกครอง</td>
                                            <td><?php echo $name_pr ?></td>
                                        </tr>
                                         <tr>
                                            <td>ความสัมพันธ์</td>
                                            <td><?php echo $relation ?></td>
                                        </tr>
                                         <tr>
                                            <td>เบอร์โทรศัพท์</td>
                                            <td><?php echo $tell_pr ?></td>
                                        </tr>
                                        <tr>
                                            <td>กรุณาเลือกสถานประกอบการณ์</td>
                                           
                                           <?php   //print_r( $establish);?>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td id='select_est'>
                                                เลือกสถานประกอบการณ์ที่มีอยู่แล้ว 
                                                <select name="estabishlist" id="estabishlist"  class="form-control" onchange="showmodal()">
                                            <option>เลือกสถานประกอบการณ์</option>
                                            <option value="-1">เพิ่มสถานประกอบการณ์ใหม่</option>
                                            <?php foreach ($establish as $mykey => $myvalue){                                                                      
                                            ?>
                                            <option value="<?php echo $mykey?>"><?php echo $myvalue ?></option>
                                            <?php }?>                                                                                      
                                                </select>  
                                                <p id='newest'></p>
                                            </td>                                                                                  
                                        </tr>
                                    </table>
                                    <div class="col-md-2 col-md-offset-5">
                                        <button class="btn btn-lg btn-default" type="submit" name="submit">บันทึกข้อมูล</button>                                       
                                    </div>                                    
                                </div>
                            </div>
                        </div>
                    </div>                   
                </div>
            </div>

        <!-- jQuery -->

        <?php echo js_asset('jquery.js'); ?>
        <!-- Bootstrap Core JavaScript -->


        <?php echo js_asset('bootstrap.min.js'); ?>
    </body>

</html>

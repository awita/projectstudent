<!DOCTYPE html>
<html>

    <body class="skin-blue sidebar-mini">
        <div class="wrapper">

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        <small>รายชื่อนักศึกษา</small>
                        สาขาวิทยาการคอมพิวเตอร์
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="<?php echo base_url('index.php/student/home'); ?>"><i class="fa fa-dashboard"></i> หน้าหลัก</a></li>
                        <li><a href="#">ข้อมูลศึกษา</a></li>
                        <li class="active">วิทยาการคอมพิวเตอร์</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-lg-12">
                            <!-- /.box -->

                            <div class="box">

                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover table-striped">
                                        <?php
                                        echo"                        
                        <td align='center'>รหัสนักศึกษา</td>
                        <td align='center'>ชื่อ</td>
                        <td align='center'>นามสกุล</td>
                        <td align='center'>สาขาวิชา</td> 
                        <td aling='center'>ชื่อสถานประกอบการณ์</td>
                       
                    </tr>";

                                        foreach ($student as $row) {
                                            $id_st = $row['id_st'];
                                            $name_st = $row['name_st'];
                                            $lastname_st = $row['lastname_st'];
                                            $major = $row['major'];
                                            $name_es = $row['name_es'];


                                            echo "<tr>
                        <td>$id_st</td>
                        <td>$name_st</td>
                        <td>$lastname_st</td>
                        <td>$major</td> 
                        <td>$name_es</td>
                       
             </tr>";
                                        }
                                        ?>
                                        </tbody>
                                    </table>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </section><!-- /.content -->
            </div><!-- /.content-wrapper -->


            <div class='control-sidebar-bg'></div>
        </div><!-- ./wrapper -->

    </body>
</html>

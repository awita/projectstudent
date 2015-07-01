<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">

    </head>

    <body>


        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <h1 class="page-header">
                            ข้อมูลนักศึกษา
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <?php echo anchor('student/home', 'หน้าหลัก'); ?> 
                            </li>
                            <li class="active">
                                <i class="fa fa-table"></i> แสดงข้อมูลนักศึกษา
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">ข้อมูลนักศึกษาทั้งหมด</h3>
                            </div>
                            <div class="panel-body"> 
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover table-striped">
                                        <?php
                                        echo"                        
                        <td align='center'>รหัสนักศึกษา</td>
                        <td align='center'>ชื่อ</td>
                        <td align='center'>นามสกุล</td>
                        <td align='center'>เบอร์โทร</td>
                        <td align='center'>E-mail</td>
                        <td align='center'>สาขาวิชา</td> 
                        <td align='center'>ภาคเรียน</td>
                        <td align='center'>ปีการศึกษา</td>
                        <td align='center'>แก้ไข</td>
                        <td align='center'>ลบ</td>
                    </tr>";

                                        foreach ($query as $row) {
                                            $id_st = $row['id_st'];
                                            $name_st = $row['name_st'];
                                            $lastname_st = $row['lastname_st'];
                                            $tell_st = $row['tell_st'];
                                            $email = $row['email'];
                                            $major = $row['major'];
                                            $term = $row['term'];
                                            $year = $row['year'];

                                            $link = anchor('teacher/detailstudent/' . $id_st, "$name_st");
                                            $update = anchor('student/formupdate/' . $id_st, '<button  class="btn btn-primary "><i class="fa fa-edit></i></button>');

                                            $attributs = "onclick= \"return confirm('คุณต้องการลบข้อมูลหรือไม่ ?')\" ";
                                            $delete = anchor('student/delete/' . $id_st, '<button  class="btn btn-danger "><i class="fa fa-trash"></i></button>', $attributs);

                                            echo "<tr>
                        <td>$id_st</td>
                        <td>$link</td>
                        <td>$lastname_st</td>
                        <td>$tell_st</td> 
                        <td>$email</td> 
                        <td>$major</td> 
                        <td>$term</td> 
                        <td>$year</td> 
                        <td>$update</td>
                        <td>$delete</td>
                                </tr>";
                                            echo"</tabe>";
                                        }
                                        ?>
                                        </tbody>
                                    </table>
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

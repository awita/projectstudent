<!DOCTYPE html>
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
        <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <?php echo css_asset('font-awesome.min.css'); ?>
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

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
                             <div class="table-responsive ">
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

                                        $link = anchor('student/showdetail/' . $id_st, "$name_st");
                                        $update = anchor('student/formupdate/' . $id_st,'<button  class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>');

                                        $attributs = "onclick= \"return confirm('คุณต้องการลบข้อมูลหรือไม่ ?')\" ";
                                        $delete = anchor('student/delete/' . $id_st, '<button  class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i></button>', $attributs);

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
                <!-- /.container-fluid -->

            </div>
            <!-- /#page-wrapper -->


            <!-- jQuery -->

            <?php echo js_asset('jquery.js'); ?>
            <!-- Bootstrap Core JavaScript -->

            <?php echo js_asset('bootstrap.min.js'); ?>
    </body>

</html>

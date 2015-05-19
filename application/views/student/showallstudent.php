<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin - Bootstrap Admin Template</title>

    <!-- Bootstrap Core CSS -->
  
    <?php echo css_asset('bootstrap.min.css');?>
    <!-- Custom CSS -->
    
    <?php echo css_asset('sb-admin.css');?>
    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <?php echo css_asset('font-awesome.min.css');?>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
    <!-- /#wrapper -->
    <div id="wrapper">
        <div id="page-wrapper">
            <div class="container-fluid">
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            ข้อมูลนักศึกษา
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <?php echo anchor('student/home','หน้าหลัก');?> 
                            </li>
                            <li class="active">
                                <i class="fa fa-table"></i> แสดงข้อมูลนักศึกษา
                            </li>
                        </ol>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-lg-12">
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
       
        foreach ($student as $row){ 
                $id_st = $row['id_st'];
                $name_st = $row['name_st'];
                $lastname_st = $row['lastname_st'];
                $major = $row['major'];
                $name_es=$row['name_es'];
        
                
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
                        </div>
                    </div>
                </div>
            </div>
            </div>
    </div>
            <!-- /.container-fluid -->



    <!-- jQuery -->
   
    <?php echo js_asset('jquery.js');?>
    <!-- Bootstrap Core JavaScript -->
   
    <?php echo js_asset('bootstrap.min.js');?>
</body>

</html>

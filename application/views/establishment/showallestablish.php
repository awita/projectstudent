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

    <div id="wrapper">


        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            สถานประกอบการณ์
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i> <?php echo anchor('student/home','หน้าหลัก');?> 
                            </li>
                            <li class="active">
                                <i class="fa fa-table"></i> แสดงข้อมูลสถานประกอบการณ์
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-12">
                        <h2>ข้อมูลสถานประกอบการณ์</h2>
                        <div class="table-responsive">
                            
                           <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped">
    <?php
        echo"
                    <tr bgcolor='#0CF'>
                        
                        <td align='center'>ลำดับที่</td>
                        <td align='center'>ชื่อ</td>
                        <td align='center'>สถานที่ตั้ง</td>
                    
                        <td align='center'>เบอร์โทรศัพท์</td> 
                        <td align='center'>E-mail</td>
                       
       
                    </tr>";
       
        foreach ($establish as $row){ 
                $id_es = $row['id_es'];
                $name_es = $row['name_es'];
                $address_es = $row['address_es'];
         
                $tell_es=$row['tell_es'];
                $email=$row['email'];
               
        echo "<tr>
                        <td>$id_es</td>
                        <td>$name_es</td>
                        <td>$address_es</td>
                    
                        <td>$tell_es</td> 
                        <td>$email</td> 
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
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
   
    <?php echo js_asset('jquery.js');?>
    <!-- Bootstrap Core JavaScript -->
   
    <?php echo js_asset('bootstrap.min.js');?>
</body>

</html>
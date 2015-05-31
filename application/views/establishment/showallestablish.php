<!DOCTYPE html>
<html>

    <body class="skin-blue sidebar-mini">
        <div class="wrapper">

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        <small>รายชื่อ</small>
                        สถานประกอบการณ์
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="#">Tables</a></li>
                        <li class="active">Data tables</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="box">

                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover table-striped">
                                        <?php
                                        echo"
                    <tr bgcolor='#0CF'>
                        
                        <td align='center'>ที่</td>
                        <td align='center'>ชื่อ</td>
                        <td align='center'>สถานที่ตั้ง</td>
                    
                        <td align='center'>เบอร์โทรศัพท์</td> 
                        <td align='center'>E-mail</td>
                       
       
                    </tr>";

                                        foreach ($establish as $row) {
                                            $id_es = $row['id_es'];
                                            $name_es = $row['name_es'];
                                            $address_es = $row['address_es'];

                                            $tell_es = $row['tell_es'];
                                            $email = $row['email'];

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
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </section><!-- /.content -->
            </div><!-- /.content-wrapper -->


            <div class='control-sidebar-bg'></div>
        </div><!-- ./wrapper -->

    </body>
</html>

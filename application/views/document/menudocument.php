<html lang='en'>
    <head>
        <meta charset="UTF-8" /> 

        <!-- Custom Fonts -->
        <?php echo css_asset('font-awesome.min.css'); ?>
        <?php echo js_asset('jquery-1.10.2.js'); ?>
        <title>
            เข้าระบบสำหรับนักศึกษา
        </title>

    </head>
    <body>
        <div class="col-lg-12">
            <h1 class="page-header"></h1>

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
                                <i class="fa fa-angellist"></i> เมนูเอกสาร
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
                            <div class="panel-body"> 
                                <div class="box-body no-padding">
                                    <table class="table table-striped">
                                        <tbody>
                                            <tr>
                                                <th style="width: 20%">ลำดับ</th>
                                                <th>เอกสาร</th>
                                                <th >ส่งเอกสาร</th>
                                                <th>สถานะ</th>

                                            </tr>
                                            <tr>
                                                <td>เอกสารหมายเลข 1</td>
                                                <td><a href="<?php echo base_url('index.php/document/document_num1'); ?>">แบบแจ้งรายละเอียดที่พัก</a></td>

                                                <td>
                                                    <span class="badge bg-info">ดูเอกสาร</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>เอกสารหมายเลข 2</td>
                                                <td><a href="">แบบแจ้งแผนปฏิบัตงานการฝึกประสบการณ์วิชาชีพ</a></td>

                                                <td >
                                                    <a href="#" class="badge bg-blue" onclick="showmodal()"id="upload" > อัปโหลด</a>

                                                </td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>เอกสารหมายเลข 3</td>
                                                <td>แบบแจ้งโครงร่างรายงานการปฏิบัติงาน</td>
                                                <td>
                                                    <span class="badge bg-blue">อัปโหลด</span>
                                                </td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>เอกสารหมายเลข 4</td>
                                                <td>แบบแจ้งยืนยันส่งรายงานการปฏิบัติงาน</td>
                                                <td>
                                                    <span class="badge bg-info">ดูเอกสาร</span>
                                                </td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>เอกสารหมายเลข 5</td>
                                                <td>แบบแจ้งรายละเอียดเกี่ยวกับการปฏิบัติงาน</td>
                                                <td>
                                                    <span class="badge bg-blue">อัปโหลด</span>
                                                </td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>เอกสารหมายเลข 6</td>
                                                <td>แบบแจ้งรายละเอียดงาน ตำแหน่ง พนักงานที่ปรึกษา </td>
                                                <td>
                                                    <span class="badge bg-blue">อัปโหลด</span>
                                                </td>
                                                <td></td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
        <div class="col-lg-12">
            <h1 class="page-header"></h1></div>


        <!-- Modal -->

        <div class="modal fade" id="myModal"  role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">อัปโหลดเอกสารหมายเลข 2</h4>
                    </div>
                    <div class="modal-body">
                        <form action="" method="POST" enctype="multipart/form-data" >
                            
                            <center>เลือกเอกสารเพื่ออัปโหลด :<br />
                                <input type="file" name="uploadfile" multiple="multiple"  />
                                <input type="submit" name="submit" value="Upload" class="btn btn-success" />
                            </center>



                        </form>


                    </div>
                    <div class="modal-footer">

                    </div>
                </div>
            </div>
        </div>  

      
        <!-- Bootstrap Core JavaScript -->

        <script>

            function showmodal() {
                $("#upload").click(function() {
                    //alert("Handler");
                    $('#myModal').modal('show');
                });

            }

        </script>
        <?php echo js_asset('jquery.js'); ?>
        <!-- Bootstrap Core JavaScript -->
        <?php echo js_asset('bootstrap.min.js'); ?>
    </body>
</html>











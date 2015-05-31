
<!DOCTYPE html>
<html lang='en'>
    <head>
        <meta charset="UTF-8" /> 
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
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h1 class="page-header">
                            แสดงการเลือกสถานประกอบการณ์
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

                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title" align='center'>เลือกสถานประกอบการณ์</h3>
                            </div>
                            <div class="panel-body"> 
                                <table class="table ">

                                    <tr>
                                        <td width = "30%" colspan="2">กรุณาเลือกสถานประกอบการณ์</td>
                                        <td width="60%">

                                            <input class="form-control" type="text" id="name_es" name="name_es"/>

                                            <input class="form-control" type="text" id="id_es" name="id_es"/>
                                        </td>  
                                        <td> <button class="btn btn-lg btn-default" type="submit" name="submit">บันทึกข้อมูล</button> </td>
                                    </tr>

                                </table>

                                <table class="table table-bordered ">
                                    <thead>
                                        <tr>
                                            <th colspan="2" background>รายละเอียดสถานประกอบการณ์</th>
                                        </tr>
                                        <tr>
                                            <th width="40%">ข้อมูล</th>
                                            <th>รายละเอียด</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>ชื่อสถานประกอบการณ์</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>ที่อยู่</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>เว็บไซต์ </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>E-mail</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>เบอร์โทรศัพท์</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>จำนวนบุคลากร</td>
                                            <td> </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>                   
            </div>

        </div>
        <div class="col-lg-12">
            <h1 class="page-header"></h1></div>
            
            <?php echo js_asset('jquery-ui.js'); ?>
            <?php echo css_asset('jquery-ui.css'); ?>
            <!-- Bootstrap Core JavaScript -->
            <?php echo js_asset('bootstrap.min.js'); ?>
        <script>


            $("#name_es").autocomplete({
                source: "<?php echo base_url('index.php/establishment/getname/?') ?>",
                minLength: 0,
                select: function(event, ui) {
                    //  console.log(ui.item);
                    //  alert(ui.item.name);
                    getDetail(ui.item.id);
                }
            });

            function getDetail(id) {
                $.post("<?php echo base_url('index.php/eatablishment/getDetail/id') ?>", function(data) {
                    $(".result").html(data);
                });

            }


        </script>

        <?php echo js_asset('jquery.js'); ?>
        <!-- Bootstrap Core JavaScript -->
        <?php echo js_asset('bootstrap.min.js'); ?>


    </body>

</html>

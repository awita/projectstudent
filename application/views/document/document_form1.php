<html lang='en'>
    <head>
        <meta charset="UTF-8" /> 

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
                                <i class="fa fa-dashboard"></i>  <a href="<?php echo base_url('index.php/student/menu'); ?> ">หน้าหลัก</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-table"></i><a href="<?php echo base_url('index.php/document/menudocument');?>"> เมนูเอกสาร</a> 
                            </li>
                            <li>
                                <i class="fa-angle-down"></i>แบบแจ้งรายละเอียดที่พัก
                            </li>
                        </ol>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title" align='center'>แบบแจ้งรายละเอียดที่พัก สถานประกอบการระหว่างการฝึกประสบการณ์วิชาชีพ</h3>
                            </div>
                            <div class="panel-body"> 
                                <?php echo form_open('document/adddocument'); ?>
                                <table class="table" id="tabledetail">
                                    <tr>
                                        <td colspan="5">(ผู้ให้ข้อมูล : นักศึกษา)</td>
                                    </tr>
                                    <tr>
                                        <th colspan="5"><b>เรียน  ประธานหลักสูตร</b></th>
                                    </tr>
                                    <tbody>
                                        <?php
                                        $userdata = $userdata[0];
                                        $id_st = $userdata['id_st'];
                                        $name_st = $userdata['name_st'];
                                        $lastname_st = $userdata['lastname_st'];
                                        $major = $userdata['major'];
                                        $name_es = $userdata['name_es'];
                                        $address_es = $userdata['address_es'];
                                        ?>
                                        <tr>
                                            <td colspan="3">ชื่อ - นามสกุล : 
                                                <input  style="width:75%" type="text" disabled="" placeholder="<?php echo $name_st ?>">
                                            </td>
                                            <td colspan="2">เลขรหัสประจำนักศึกษา :
                                                <input  style="width:50%" type="text" disabled="" placeholder="<?php echo $id_st ?>">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="3">หลักสูตร : 
                                                <input  style="width:75%" type="text" disabled="" placeholder="<?php echo $major ?>">
                                            </td>
                                            <td colspan="2">ภาควิชา : 
                                                <input  style="width:65%" type="text" disabled="" placeholder="<?php echo 'คณิตศาสตร์และคอมพิวเตอร์'; ?>">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="5">ชื่อสถานประกอบการ(ไทย หรือ อังกฤษ) : 
                                                <input  style="width:50%" type="text" disabled="" placeholder="<?php echo $name_es ?>">
                                            </td>

                                        </tr>
                                        <tr>
                                            <td colspan="2">ที่อยู่สถานประกอบการ :</td>
                                            <td colspan="3">
                                                <textarea style="width:70%" name="address_es" id="address_es" disabled=""> <?php echo $address_es ?></textarea></td>
                                        </tr>
                                        <tr>
                                            <td colspan="5">ขอแจ้งรายละเอียดเกี่ยวกับที่พักระหว่างการฝึกประสบการณ์ดังนี้</td>
                                        </tr>

                                        <tr>
                                            <td width="3%"></td>
                                            <td >เลขที่ : 
                                                <input   style="width:50%" type="text" name="number">
                                            </td>
                                            <td >ถนน : 
                                                <input   style="width:75%" type="text" >
                                            </td>
                                            <td>ซอย : 
                                                <input   style="width:75%" type="text" >
                                            </td>
                                            <td>ตำบล : 
                                                <input  style="width:75%" type="text" >
                                            </td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td >อำเภอ : 
                                                <input  style="width:50%" type="text" >
                                            </td>
                                            <td colspan="2" align="center">จังหวัด :
                                                <input  style="width:50%" type="text" >
                                            </td>
                                            <td>รหัสไปรษณีย์ :
                                                <input  style="width:50%" type="text" >
                                            </td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td colspan="2">โทรศัพท์ :
                                                <input  style="width:50%" type="text" >
                                            </td>
                                            <td colspan="2">โทรสาร : 
                                                <input  style="width:75%" type="text" >
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="5">ชื่อที่อยู่ ผู้ที่สามารถติดต่อได้ในกรณ์ฉุกเฉิน</td>
                                        </tr>
                                        <tr>
                                            <td width="3%"></td>
                                            <td >เลขที่ : <input style="width:50%"  type="text" name="number"></td>
                                            <td >ถนน : <input style="width:75%" type="text" name="rote"></td>
                                            <td>ซอย : <input style="width:75%" type="text" name="rote"></td>
                                            <td>ตำบล : <input step="width:50%" type="text" name="rodd"</td>
                                        </tr>
                                        <tr>
                                            <td ></td>
                                            <td >อำเภอ : 
                                                <input style="width:60%" type="text" name="number">
                                            </td>
                                            <td colspan="2" align="center">จังหวัด : 
                                                <input style="width:75%" type="text" name="number">
                                            </td>
                                            <td>รหัสไปรษณีย์ : 
                                                <input style="width:60%" type="text" name="number">
                                            </td>

                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td colspan="2">โทรศัพท์ :
                                                <input style="width:75%" type="text" name="number">
                                            </td>
                                            <td colspan="2">โทรสาร : 
                                                <input style="width:75%" type="text" name="number">
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                                <table>
                                    <thead>
                                    <th>
                                    <u>แผนที่แสดงตำแหน่งที่พักอาศัย</u>
                                    </th>
                                    </thead>
                                </table>

                                <center><input type="submit" name="submit" value="บันทึกข้อมูล">
                                    <input type="reset" name="reset" value="ยกเลิก">
                                </center>
                                <?php echo form_close(); ?>

                            </div>
                        </div>
                    </div>
                </div>                   
            </div>

        </div>
        <div class="col-lg-12">
            <h1 class="page-header"></h1></div>
            <?php echo js_asset('jquery.js'); ?>
        <!-- Bootstrap Core JavaScript -->
        <?php echo js_asset('bootstrap.min.js'); ?>
    </body>
</html>
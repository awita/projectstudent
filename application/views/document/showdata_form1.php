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
                                <i class="fa fa-table"></i><a href="<?php echo base_url('index.php/document/menudocument'); ?>"> เมนูเอกสาร</a> 
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
                                <?php echo form_open('document/adddocument_num1'); ?>
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
                                        $number=$userdata['number'];
                                        $road=$userdata['road'];
                                        $alley=$userdata['alley'];
                                        $district=$userdata['district'];
                                        $county=$userdata['county'];
                                        $city=$userdata['city'];
                                        $postcode=$userdata['postcode'];
                                        $phone=$userdata['phone'];
                                        $fax=$userdata['fax'];
                                        $number_contact=$userdata['number_contact'];
                                        $road_contact=$userdata['road_contact'];
                                        $alley_contact=$userdata['alley_contact'];
                                        $district_contact=$userdata['district_contact'];
                                        $county_contact=$userdata['county_contact'];
                                        $city_contact=$userdata['city_contact'];
                                        $postcode_contact=$userdata['postcode_contact'];
                                        $phone_contact=$userdata['phone_contact'];
                                        $fax_contact=$userdata['fax_contact'];
                                      
                                        ?>
                                        <tr>
                                            <td colspan="3" >ชื่อ - นามสกุล : <?php echo $name_st?> &nbsp;&nbsp;&nbsp;<?php echo $lastname_st?></td>
                                            <td colspan="2" width="3%">เลขรหัสประจำนักศึกษา : <?php echo $id_st ?></td>
                                        </tr>
                                        <tr>
                                            <td colspan="3"  >หลักสูตร : <?php echo $major ?>
                                            </td>
                                            <td colspan="2">ภาควิชา : <?php echo 'คณิตศาสตร์และคอมพิวเตอร์'; ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="5">ชื่อสถานประกอบการ(ไทย หรือ อังกฤษ) : <?php echo $name_es ?>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td colspan="2">ที่อยู่สถานประกอบการ :</td>
                                            <td colspan="3">    <?php echo $address_es ?></td>
                                        </tr>
                                        <tr>
                                            <td colspan="5"><b>ขอแจ้งรายละเอียดเกี่ยวกับที่พักระหว่างการฝึกประสบการณ์ดังนี้</b></td>
                                        </tr>

                                        <tr>
                                            <td width="1%"></td>
                                            <td >เลขที่ : <?php echo $number ?>
                                               
                                            </td>
                                            <td >ถนน : <?php echo $road ?>
                                                
                                            </td>
                                            <td>ซอย : <?php echo $alley ?> 
                                                
                                            </td>
                                            <td>ตำบล : <?php echo $district ?>
                                                
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="1%"></td>
                                            <td >อำเภอ : <?php echo $county ?>
                                                
                                            </td>
                                            <td colspan="2" align="center">จังหวัด : <?php echo $city ?>
                                                
                                            </td>
                                            <td>รหัสไปรษณีย์ : <?php echo $postcode ?>
                                               
                                            </td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td colspan="2">โทรศัพท์ : <?php echo $phone ?>
                                                
                                            </td>
                                            <td colspan="2">โทรสาร : <?php echo $fax ?>
                                                
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="5"><b>ชื่อที่อยู่ ผู้ที่สามารถติดต่อได้ในกรณ์ฉุกเฉิน :</b> </td>
                                        </tr>
                                        <tr>
                                            <td width="1%"></td>
                                            <td width="3%">เลขที่ : <?php echo $number_contact ?> </td>
                                            <td width="3%">ถนน : <?php echo $road_contact ?></td>
                                            <td width="3%">ซอย : <?php echo $alley_contact?></td>
                                            <td width="3%">ตำบล : <?php echo $district_contact ?></td>
                                        </tr>
                                        <tr>
                                            <td ></td>
                                            <td width="3%">อำเภอ : <?php echo $county_contact ?>
                                                
                                            </td>
                                            <td colspan="2" align="center">จังหวัด : <?php echo $city ?>
                                                
                                            </td>
                                            <td width="3%">รหัสไปรษณีย์ : <?php echo $postcode_contact ?>
                                                
                                            </td>

                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td colspan="2">โทรศัพท์ : <?php echo $phone_contact ?>
                                                
                                            </td>
                                            <td colspan="2">โทรสาร : <?php echo $fax_contact ?>
                                                
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
                                    <tbody>
                                        <tr class="panel-body">
                                   
                                        </tr>
                                    </tbody>
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
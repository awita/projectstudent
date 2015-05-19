<html>
    <head><title>เพิ่มข้อมูลสถานประกอบการณ์</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
    <body>
           
    <center><h1>เพิ่มข้อมูลสถานประกอบการณ์</h1></center>
         <form id="form1" name="form1" method="post" action="<?php echo base_url() . 'index.php/establishment/addestablishment' ?>">
        <table bonder="1" align="center">
           
            <tr>
                <td>ชื่อ:</td>
                <td><input type="text" name="name_es" id="name_es"/></td>
            </tr>
            <tr>
                <td>ที่อยู่ :</td>
                <td><textarea name="address_es" id="address_es"></textarea></td>
            </tr>
            <tr>
                <td>ตำแหน่งงานที่ได้รับมอบหมาย :</td>
                <td><input type="text" name="position" id="position"/></td>
            </tr>
            <tr>
                <td>จำนวนบุคลากร :</td>
                <td><input type="text" name="peple" id="peple"/></td>
            </tr>
            <tr>
                <td>เบอร์โทรศัพท์:</td>
                <td><input type="text" name="tell_es" id="tell_es"/></td>
            </tr>
            <tr>
                <td>E-mail :</td>
                <td><input type="text" name="email" id="email"/></td>
            </tr>
            <tr>
                <td>เว็บไซต์ :</td>
                <td><input type="text" name="website" id="website"/></td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="submit" name="submit" value="บันทึก">
                    <input type="reset" name="reset" value="ยกเลิก"></td>
                
            </tr>
            
            
        </table>
     
    </body>
  </html>
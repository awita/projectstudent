<html>
    <head><title>แก้ไขข้อมูลสถานประกอบการณ์</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
    <body>
      
    <center><h1>แก้ไขข้อมูลสถานประกอบการณ์</h1></center>
        
         <form id="form1" name="form1" method="post" action="<?php echo base_url() . 'index.php/establishment/update' ?>">
            <?php  
              //print_r($data)
             //$row = ->row_array();
               /*$id_es = $row['id_es'];
                $name_es = $row['name_es'];
                $address_es = $row['address'];
                $position = $row['position'];
                $peple = $row['peple'];
                $tell_es = $row['tell_es'];
                $email = $row['email'];  */
                ?>
             
             <table bonder="1" align="center">
            <tr>
                <td>ลำดับที่</td>
                <td> </td>
            </tr>
           
            <tr>
                <td>ชื่อ:</td>
                <td><input type="text" name="name_es" id="name_es" value=""/></td>
            </tr>
            <tr>
                <td>ที่อยู่ :</td>
                <td><textarea name="address_es" id="address_es" value=""></textarea></td>
            </tr>
            <tr>
                <td>ตำแหน่งงานที่ได้รับมอบหมาย :</td>
                <td><input type="text" name="position" id="position" value=""/></td>
            </tr>
            <tr>
                <td>จำนวนบุคลากร :</td>
                <td><input type="text" name="peple" id="peple" value=""/></td>
            </tr>
            <tr>
                <td>เบอร์โทรศัพท์:</td>
                <td><input type="text" name="tell_es" id="tell_es" value=""/></td>
            </tr>
            <tr>
                <td>E-mail :</td>
                <td><input type="text" name="email" id="email" value=""</td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="submit" name="submit" value="บันทึก">
                    <input type="reset" name="reset" value="ยกเลิก"></td>
                
            </tr>
            
         
        </table>
         </form>
    </body>
  </html>
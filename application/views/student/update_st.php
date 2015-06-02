<html>
    <head><title>แก้ไขข้อมูล</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
    <h3><center>แก้ไขข้อมูล</center></h3>

    
    <form id="form1" name="form1" method="post" action="<?php echo base_url().'index.php/student/update'?>">
  <table width="438" border="0" align="center">
    <tr>
        <td colspan="4" align="center"><b>แก้ไขข้อมูลนักศึกษา</b></td>
    </tr>
    <tr>
        <td colspan="4" align="enter">&nbsp;</td>
    </tr>
    <tr>
        <td colspan="2">ภาคเรียนที่ : <select name="term" id="term" value="<?php echo $student->term; ?>">
        <option <?php if ($student->term=="1"){echo"selected";}?>>1</option>
        <option <?php if ($student->term=="2"){echo"selected";}?>>2</option>
        <option <?php if ($student->term=="3"){echo"selected";}?>>3</option>
      </select></td>
         
      <td align="right"colspan="2" >ปีการศึกษา : <select name="year" id="year" value="<?php echo $student->year; ?>">
            <option value=" ">Year</option>
                <?PHP for($i=0; $i<=50; $i++) {?>
            <option value="1"><?PHP echo date("Y")-$i+543?></option>
                <?PHP }?>
        </select></td>
    </tr>
    <tr>
        <td colspan="2">สาขาวิชา :</td>
      <td>
          <select name="major" id="major" value="<?php echo $student->major; ?>">
           
            <option <?php if ($student->major=="วิทยาการคอมพิวเตอร์"){echo"selected";}?>>วิทยาการคอมพิวเตอร์</option>
            <option <?php if ($student->major=="เทคโนโลยีสารสนเทศ"){echo"selected";}?>>เทคโนโลยีสารสนเทศ</option>
          </select></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
        <td colspan="2">รหัสนักศึกษา :</td>
        <td colspan="2"><input type="text" name="id_st" id="id_st" value="<?php echo $student->id_st; ?>"/></td>
    </tr>
    <tr>
        <td colspan="2">เพศ :</td>
      <td><input type="radio" name="gender" id="ชาย" value="<?php echo $student->gender; ?>" />ชาย
      <input type="radio" name="gender" id="หญิง" value="<?php echo $student->gender; ?>" />หญิง</td>
      
    </tr>
    <tr>
        <td colspan="2">ชื่อนักศึกษา :</td>
        <td ><input type="text" name="name_st" id="name_st" value="<?php echo $student->name_st; ?>" /></td>
    </tr>
    <tr>
        <td colspan="2">นามสกุล :</td>
        <td ><input type="text" name="lastname_st" id="lastname_st" value="<?php echo $student->lastname_st; ?>" /></td>
    </tr>
    <tr>
        <td  colspan="2">เบอร์โทร : </td>
        <td><input type="text" name="tell_st" id="tell_st" value="<?php echo $student->tell_st; ?>" /></td>
    </tr>
    <tr>
        <td colspan="2">อีเมล์ :</td>
        <td><input type="text" name="email" id="email" value="<?php echo $student->email; ?>" /> </td>
    </tr>
    <tr>
        <td colspan="2">ชื่อผู้ปกครอง/ผู้เกี่ยวข้อง: </td>
        <td><input type="text" name="name_pr" id="name_pr" value="name_pr"> </td>
    </tr>
    <tr>
        <td colspan="2">ความสัมพันธ์ : </td>
        <td><input type="text" name="relation" id="relation" value="<?php echo $student->relation; ?>"></td>
    
    </tr>
    <tr>
        <td colspan="2">เบอร์โทร : </td>
        <td><input type="text" name="tell_pr" id="tell_pr" value="<?php echo $student->tell_pr; ?>"></td>
    </tr>
    <tr>
        <td colspan="2">รหัสผ่าน : </td>
        <td><input type="password" name="pass" id="pass" value="<?php echo $student->pass; ?>" /></td>
    </tr>
    <tr>
    <br><br>
    </tr>
    <tr>
        
      <td colspan="3" align="center"><input type="submit" name="Submit" id="Submit" value="บันทึกข้อมูล">
      <input type="reset" name="reset" id="reset" value="ยกเลิก"></td>
      <td>&nbsp;</td>
    </tr>
  </table>
    </form>
</html>

<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <?php echo form_open('establishment/adddata');?>
        <table>
            <thead>
                <tr>
                    <th>กรอกข้อมูล</th>
                </tr>
            </thead>
             
            <tbody>
                <tr>
                    <td>ชื่อ :</td>
                    <td><input type="text" name="name" id="name"></td>
                </tr>
                <tr>
                    <td>นามสกุล :</td>
                    <td><input type="text" name="lastname" id="lastname"></td>
                </tr>
                <tr>
                    <td><button type="submit" name="submit" id="save">บันทึกข้อมูล</button></td>
                </tr>
            </tbody>
        </table>
        <?php echo form_close();?>
        
        <hr>
        <h2>data show</h2>
       <?php 
       
       echo "name:".$name."<br>";
       echo "lastname:".$lastname ;
       ?>
        
        
    </body>
</html>
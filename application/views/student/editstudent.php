<div class="col-md-8  col-lg-offset-2" >
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title"><center>แก้ไขข้อมูลนักศึกษา</center></h3>
        </div>
        <div class="panel-body"> <?php echo form_open('student/addstudent'); ?>
            <div class="form-group">
                <label>ภาคเรียนที่ :</label>
                <select name="term" id="term" class="form-control">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                </select>
            </div>
            <div class="form-group">
                <label>ปีการศึกษา :</label> 
                <select name="year" id="year" class="form-control" >
                    <option value=" ">Year</option>
                    <?PHP for ($i = 0; $i <= 50; $i++) { ?>
                        <option value="<?PHP echo date("Y") - $i + 543 ?>"><?PHP echo date("Y") - $i + 543 ?></option>
                    <?PHP } ?>
                </select>
            </div>

            <div class="form-group">
                <label>สาขาวิชา :</label>
                <select name="major" id="major"  class="form-control">
                    <option>เลือกสาขาวิชา</option>
                    <option>วิทยาการคอมพิวเตอร์</option>
                    <option>เทคโนโลยีสารสนเทศ</option>
                </select>
            </div>
            <div class="form-group">
                <label>เพศ :</label>
                <select name="gender" id="gender"  class="form-control">
                    <option>กรุณาเลือกเพศ</option>
                    <option>ชาย</option>
                    <option>หญิง</option>

                </select>
            </div>
            <div class="form-group">
                <label>รหัสนักศึกษา :</label>
                <input class="form-control" name="id_st" id="id_st">
            </div>
            <div class="form-group">
                <label>ชื่อนักศึกษา :</label>
                <input class="form-control" placeholder="Enter your name"  name="name_st" id="name_st">
            </div>
            <div class="form-group">
                <label>นามสกุล :</label>
                <input class="form-control" placeholder="Enter your lastname" name="lastname_st" id="lastname_st">
            </div>
            <div class="form-group">
                <label>เบอร์โทรศัพท์ :</label>
                <input class="form-control" placeholder="Enter your tell" name="tell_st" id="tell_st">
            </div>
            <div class="form-group">
                <label>E-mail :</label>
                <input class="form-control" placeholder="email@example.com" name="email" id="email">
            </div>
            <div class="form-group">
                <label>ชื่อผู้ปกครอง/ผู้เกี่ยวข้อง :</label>
                <input class="form-control" placeholder="Enter your name parent"name="name_pr" >
            </div>
            <div class="form-group">
                <label>ความสัมพันธ์ : </label>
                <input class="form-control" placeholder="Enter your text"name="relation" >
            </div>
            <div class="form-group">
                <label>เบอร์โทรศัพท์ : </label>
                <input class="form-control" placeholder="Enter your tell"name="tell_pr" >
            </div>
            <div class="form-group">
                <label>รหัสผู้ใช้งาน : </label>
                <input class="form-control" type="password" placeholder="Enter your password"name="pass" >
            </div>
            <div  text-center>
                <div class="panel-body">
                    <button type="submit" class="btn btn-default">บันทึกข้อมูล</button>
                    <button type="reset" class="btn btn-default">ยกเลิก</button>
                </div>                                       
            </div>                     
        </div>
        <?php echo form_close(); ?>  </div>
</div>
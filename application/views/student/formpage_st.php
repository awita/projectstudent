<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>SB Admin - Bootstrap Admin Template</title>

        <!-- Bootstrap Core CSS -->

        <?php echo css_asset('bootstrap.min.css'); ?>
        <!-- Custom CSS -->

        <?php echo css_asset('sb-admin.css'); ?>
        <!-- Custom Fonts -->

        <?php echo css_asset('font-awesome.min.css'); ?>
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>
    <body>

        <div id="wrapper">
            <div id="page-wrapper">

                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">
                                ลงทะเบียนนักศึกษาฝึกประสบการณ์วิชาชีพ
                            </h1>
                            <ol class="breadcrumb">
                                <li>
                                    <i class="fa fa-dashboard"></i>  <a href="home">หน้าหลัก</a>
                                </li>
                                <li class="active">
                                    <i class="fa fa-edit"></i> แบบลงทะเบียน
                                </li>
                            </ol>
                        </div>
                    </div>
                    <!-- /.row -->

                    <div class="row">
                        <div class="col-md-8  col-lg-offset-2" >
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><center>ลงทะเบียนนักศึกษา</center></h3>
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
                                    <div  text-center">
                                          <div class="panel-body">
                                            <button type="submit" class="btn btn-default">บันทึกข้อมูล</button>
                                            <button type="reset" class="btn btn-default">ยกเลิก</button>
                                        </div>                                       
                                    </div>                     
                                </div>
                                <?php echo form_close(); ?>  </div>
                        </div>                            
                        <!-- /.row -->
                    </div>
                    <!-- /.container-fluid -->
                </div>
                <!-- /#page-wrapper -->
            </div>

            <!-- jQuery -->
            <script src="js/jquery.js"></script>

            <!-- Bootstrap Core JavaScript -->
            <script src="js/bootstrap.min.js"></script>

    </body>

</html>

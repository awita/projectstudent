
<body>   
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-md-8 col-md-offset-2" >
                        <h1 class="page-header">
                           ขอเพิ่มสถานประกอบการณ์ใหม่
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="home">หน้าหลัก</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-edit"></i> เพิ่มสถานประกอบการณ์ใหม่
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-md-8  col-lg-offset-2" >
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><center>เพิ่มสถานประกอบการณ์ใหม่</center></h3>
                            </div>
                <div class="panel-body"> <?php echo form_open('establishment/addestablishment');?>
                           <div class="panel panel-default">
                           
                            <div class="panel-body"> 
                            <div class="form-group">
                                <label>ชื่อสถานประกอบการณ์ :</label>
                                <input class="form-control"  placeholder=" establishment name "name="name_es" id="name_es">
                            </div>
                            <div class="form-group">
                                <label>ที่อยู่ :</label>
                                <input class="form-control" placeholder="address "  name="address_es" id="address_es">
                            </div>
                            <div class="form-group">
                                <label>เว็บไซต์ :</label>
                                <input class="form-control" placeholder="website" name="website" id="website">
                            </div>
                            
                            <div class="form-group">
                                <label>E-mail :</label>
                                <input class="form-control" placeholder="email@example.com" name="email" id="email">
                            </div>
                            <div class="form-group">
                                <label>เบอร์โทร :</label>
                                <input class="form-control" placeholder="telephone"name="tell_es" >
                            </div>
                            <div class="form-group">
                               <label>จำนวนบุคลากร : </label>
                                <input class="form-control" placeholder="number peple"name="peple" >
                            </div>
                            
                            <div  text-center">
                            <div class="panel-body">
                                <button type="submit" class="btn btn-default">บันทึกข้อมูล</button>
                                <button type="reset" class="btn btn-default">ยกเลิก</button>
                            </div>                                       
                            </div>
                            </div>
                           </div>
                                                 
                </div>
                    <?php echo form_close();?>  </div>
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

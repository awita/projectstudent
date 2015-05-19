
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

        <?php echo js_asset('jquery-1.10.2.js'); ?>
        <style>
            .ui-menu-item{
                background-color: #ffffff;
            }
        </style>

    </head>

    <body>


        <div id="page-wrapper">

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
                <?php
                $student = $student[0];
                $id_st = $student['id_st'];
                $name_st = $student['name_st'];
                $lastname_st = $student['lastname_st'];
                $tell_st = $student['tell_st'];
                $email = $student['email'];
                $major = $student['major'];
                $term = $student['term'];
                $year = $student['year'];
                $name_pr = $student['name_pr'];
                $relation = $student['relation'];
                $tell_pr = $student['tell_pr'];
                ?>
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


                                        </td>  
                                        <td> <button class="btn btn-lg btn-default" type="submit" name="submit">บันทึกข้อมูล</button> </td>
                                    </tr>

                                </table>
                                <div class="col-md-2 col-md-offset-5">

                                </div>                                    
                            </div>
                        </div>
                    </div>
                </div>                   
            </div>
        </div>
        <?php echo js_asset('jquery.js'); ?>
        <?php echo js_asset('jquery-ui.js'); ?>
        <?php echo css_asset('jquery-ui.css'); ?>
        <!-- Bootstrap Core JavaScript -->
        <?php echo js_asset('bootstrap.min.js'); ?>
        <!-- jQuery -->
        <script>
            $(function() {
                var availableTags 

                $.post("<?php echo base_url('index.php/establishment/getname');?>", function(data) {
                    //alert("Data Loaded: " + data);
                    var res = data.split(",");
                    availableTags=res;
                     $("#name_es").autocomplete({
                    source: res
                });
                }); 
            });
            
            <script>
             
            
         
        </script>
        </script>


    </body>

</html>

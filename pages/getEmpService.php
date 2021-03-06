<?php
error_reporting(E_ALL ^ E_NOTICE);
include 'function.php';
$valores = new Valores();
extract($_REQUEST);


$days = cal_days_in_month(CAL_GREGORIAN, $mothService , $yearService);

var_dump($days);


?>

<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Admin Prisma</title>

        <!-- Bootstrap Core CSS -->
        <link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="../bower_components/bootstrap/dist/css/bootstrap.css" rel="stylesheet">

        <!-- MetisMenu CSS -->
        <link href="../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

        <!-- Timeline CSS -->
        <link href="../dist/css/timeline.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

        <!-- Morris Charts CSS -->
        <link href="../bower_components/morrisjs/morris.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>

    <body>

        <div id="wrapper">

            <!-- Navigation -->
            <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html">SB Admin v2.0</a>
                </div>
                <!-- /.navbar-header -->

                <ul class="nav navbar-top-links navbar-right">
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                            </li>
                            <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                            </li>
                            <li class="divider"></li>
                            <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                            </li>
                        </ul>
                        <!-- /.dropdown-user -->
                    </li>
                    <!-- /.dropdown -->
                </ul>
                <!-- /.navbar-top-links -->

                <div class="navbar-default sidebar" role="navigation">
                    <div class="sidebar-nav navbar-collapse">
                        <ul class="nav" id="side-menu">
                            <li class="sidebar-search">
                                <div class="input-group custom-search-form">
                                    <input type="text" class="form-control" placeholder="Search...">
                                    <span class="input-group-btn">
                                        <button class="btn btn-default" type="button">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </span>
                                </div>
                            </li>
                            <li>
                                <a href="index.php"><i class="fa fa-dashboard fa-fw"></i> Empleados</a>
                            </li>
                            <li>
                                <a href="addEmp.php"><i class="fa fa-bar-chart-o fa-fw"></i> Dar de alta empleado</a>
                            </li>

                            <li>
                                <a href="#"><i class="fa fa-wrench fa-fw"></i>Registra Empleados<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="panels-wells.php">Ingresa Turnos</a>
                                    </li>
                                    <li>
                                        <a href="#buttons.html">Consulta Registros</a>
                                    </li>
                                    <li>
                                        <a href="#notifications.html">Notifications</a>
                                    </li>
                                    <li>
                                        <a href="#typography.html">Typography</a>
                                    </li>
                                    <li>
                                        <a href="#icons.html"> Icons</a>
                                    </li>
                                    <li>
                                        <a href="#grid.html">Grid</a>
                                    </li>
                                </ul>
                                <!-- /.nav-second-level -->
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-sitemap fa-fw"></i> Multi-Level Dropdown<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="#">Second Level Item</a>
                                    </li>
                                    <li>
                                        <a href="#">Second Level Item</a>
                                    </li>
                                    <li>
                                        <a href="#">Third Level <span class="fa arrow"></span></a>
                                        <ul class="nav nav-third-level">
                                            <li>
                                                <a href="#">Third Level Item</a>
                                            </li>
                                            <li>
                                                <a href="#">Third Level Item</a>
                                            </li>
                                            <li>
                                                <a href="#">Third Level Item</a>
                                            </li>
                                            <li>
                                                <a href="#">Third Level Item</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#tables.html"><i class="fa fa-table fa-fw"></i> Tables</a>
                            </li>
                            <li>
                                <a href="#forms.html"><i class="fa fa-edit fa-fw"></i> Forms</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-files-o fa-fw"></i> Sample Pages<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="#blank.html">Blank Page</a>
                                    </li>
                                    <li>
                                        <a href="#login.html">Login Page</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div id="page-wrapper">
                <div class="row">
                    <div class="col-lg-8  ">
                        <h1 class="page-header ">Lista de empleados</h1>
                    </div>
                    <div class="col-lg-4">
                        <?php
                        $message = $_GET['edit'];
                        if ($message == 'si') {
                            echo '<div class="alert alert-success col-md-12" id="message-si">
                        <strong>Success!</strong> Indicates a successful or positive action.
                        </div';
                        } elseif ($message == 'no') {
                            echo '<div class="alert alert-danger col-md-12" id="message-no">
                            <strong>Danger!</strong> Indicates a dangerous or potentially negative action.
                            </div>';
                        }
                        ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                DataTables Advanced Tables
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                
                                <div class="dataTable_wrapper">
                                    <div class="col-md-offset-10 col-md-2">
                                    <button type="button" class="btn btn-success">Success</button>
                                    </div>
                                    <table width="100%" style="font-size: 10px;"class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Nombre del empleado</th>
                                                <?php if ($weekService == '1') {
                                                        for($i=1; $i < 16; $i++ ){
                                                        echo '<th>'.$i.'</th>';
     
                                                     }    
                                                    } ?>
                                                
                                                <?php if ($weekService == '2') {
                                                        for($i=16; $i < 31; $i++ ){
                                                        echo '<th>'.$i.'</th>';
     
                                                     }    
                                                    } ?>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php
                                            $valores->getEmpServ($idService, $weekService, $mothService, $yearService,$i)
                                            ?>
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>   
                        </div>
                    </div>
                </div>
            </div>
            <!-- /#wrapper -->

            <!-- jQuery -->
            <script src="../bower_components/jquery/dist/jquery.min.js"></script>

            <!-- Bootstrap Core JavaScript -->
            <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

            <!-- Metis Menu Plugin JavaScript -->
            <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>

            <!-- DataTables JavaScript -->
            <script src="../bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
            <script src="../bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>
            <script src="../bower_components/datatables-responsive/js/dataTables.responsive.js"></script>

            <!-- Custom Theme JavaScript -->
            <script src="../dist/js/sb-admin-2.js"></script>

            <!-- Page-Level Demo Scripts - Tables - Use for reference -->
            <script>
                $(document).ready(function () {
                    $('#dataTables-example').DataTable({
                        responsive: true
                    });
                });
            </script>
            <script>
                $(document).ready(function () {
                    $('#message-si').fadeOut(4000);
                });
            </script>
            <script>
                $(document).ready(function () {
                    $('#message-no').fadeOut(4000);
                });
            </script>
    </body>

</html>

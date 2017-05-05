<?php
error_reporting(E_ALL ^ E_NOTICE);
include 'function.php';
$valores = new Valores();
?>
<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>SB Admin 2 - Bootstrap Admin Theme</title>
        <link href="../dist/css/base.css" rel="stylesheet" type="text/css"/>
        <!-- Bootstrap Core CSS -->
        <link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

        <!-- MetisMenu CSS -->
        <link href="../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
        <script type="text/javascript">
            $(document).ready(function () {
                $("#marca").change(function () {
                    $.ajax({
                        url: "getMuni.php",
                        type: "POST",
                        data: "idmarca=" + $("#marca").val(),
                        success: function (opciones) {
                            $("#modelo").html(opciones);
                        }
                    })
                });
            });
        </script>

    </head>
    <style>
        .separetorTopInput {
            margin-top: 25px;
        }
    </style>


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
                    <a class="navbar-brand" href="index.php">International ESolutions</a>
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
                                <p>Internal ESolutions</p>
                            </li>
                            <li>
                                <a href="index.php"><i class="glyphicon glyphicon-user fa-fw"></i> Material</a>
                            </li>
                            <li>
                                <a href="addEmp.php"><i class="glyphicon glyphicon-upload fa-fw"></i> Nuevo MAterial</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <div id="page-wrapper">
                <br>
                <div class="row">
                    <?php
                    if ($_GET['succes'] == "ok") {
                        echo '<div class="alert alert-success fade in">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                            Se dio de alta la empresa con exito con éxito.
                                            </div>';
                    }elseif ($_GET['succes'] == "false") {
                        echo '<div class="alert alert-danger fade in">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                            Imposible guardar la empresa.
                                            </div>';
                    }
                    
                    ?> 
                    <div class="col-lg-12">
                        <h2 class="page-header">Dar de alta a Empresa</h2>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>

                <!-- /.row -->
                <form role="form" action="saveCompany.php" method="post" class="form-inline">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Datos generales
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        <!-- /.col-lg-6 (nested) -->
                                        <div class="col-lg-12">
                                            <div class="col-lg-2">
                                                <label>Nombre de la empresa: </label>
                                            </div>
                                            <div class="form-group col-lg-4">
                                                <input type="text" class="form-control" name="nameComp">
                                            </div>
                                            <div class="col-lg-2">
                                                <label>Telefono: </label>
                                            </div>
                                            <div class="form-group col-lg-4">
                                                <input type="tel" class="form-control" name="telComp" >
                                            </div>
                                        </div>
                                        <!-- /.col-lg-6 (nested) -->
                                    </div>
                                    <div class="row separetorTopInput">
                                        <!-- /.col-lg-6 (nested) -->
                                        <div class="col-lg-12">
                                            <div class="col-lg-2">
                                                <label>Correo: </label>
                                            </div>
                                            <div class="form-group col-lg-4">
                                                <input type="email" class="form-control" name="mailComp">
                                            </div>
                                            <div class="col-lg-2">
                                                <label>RFC: </label>
                                            </div>
                                            <div class="form-group col-lg-4">
                                                <input type="text" class="form-control" name="rfcComp">
                                            </div>
                                            
                                        </div>

                                        <!-- /.col-lg-6 (nested) -->

                                    </div>
                                    <div class="row separetorTopInput">
                                        <!-- /.col-lg-6 (nested) -->
                                        <div class="col-lg-12">
                                            <div class="col-lg-2">
                                                <label>Dirección: </label>
                                            </div>
                                            <div class="form-group col-lg-4">
                                                <input type="text" class="form-control" name="dirComp">
                                            </div>
                                            <div class="col-lg-2">
                                                <label>No. De Cuenta: </label>
                                            </div>
                                            <div class="form-group col-lg-4">
                                                <input type="number" class="form-control" name="cuentComp">
                                            </div>
                                            
                                        </div>

                                        <!-- /.col-lg-6 (nested) -->

                                    </div>
                                    
                                    <div class="row separetorTopInput">
                                        <!-- /.col-lg-6 (nested) -->
                                        <div class="col-lg-12">
                                            <div class="col-lg-2">
                                                <label>Banco: </label>
                                            </div>
                                            <div class="form-group col-lg-4">
                                                <input type="text" class="form-control" name="bancoComp">
                                            </div>
                                            <div class="col-lg-2">
                                                <label>Contacto: </label>
                                            </div>
                                            <div class="form-group col-lg-4">
                                                <input type="text" class="form-control" name="contactComp">
                                            </div>
                                            
                                        </div>

                                        <!-- /.col-lg-6 (nested) -->

                                    </div>
                                    <div class="col-md-12  m-md-t-2">
                                        <div class="col-md-1 col-md-offset-11">
                                            <input type="submit" class="btn btn-primary" value="Guardar">
                                        </div>
                                    </div>
                                    <!-- /.row (nested) -->
                                </div>
                                <!-- /.panel-body -->
                            </div>
                            <!-- /.panel -->
                        </div>
                        <!-- /.col-lg-12 -->

                    </div>
                </form>



                    <!-- /.row -->
            </div>
        </form>
        <!-- /#page-wrapper -->

    </div>
</div>
<!-- /#wrapper -->

<!-- jQuery -->
<script src="../bower_components/jquery/dist/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>

<!-- Custom Theme JavaScript -->
<script src="../dist/js/sb-admin-2.js"></script>



</body>

</html>



<?php
error_reporting(E_ALL ^ E_NOTICE);
include 'function.php';
$valores = new Valores();
extract($_REQUEST);

$count = count($idMat);

for($x=0;$x<=$count;$x++){
   echo  $idMat[$x];
}
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
        <link href="../dist/css/base.css" rel="stylesheet" type="text/css"/>
        <!-- MetisMenu CSS -->
        <link href="../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">
        <script src="../bower_components/bootstrap/dist/js/bootstrap.js" type="text/javascript"></script>
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
                    <a class="navbar-brand" href="index.html">International ESolutions</a>
                </div>
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
                    </li>
                </ul>
                <div class="navbar-default sidebar" role="navigation">
                    <div class="sidebar-nav navbar-collapse">
                        <ul class="nav" id="side-menu">
                            <li>
                                <a href="index.php"><i class="glyphicon glyphicon-user fa-fw"></i> Material</a>
                            </li>
                            <li>
                                <a href="addEmp.php"><i class="glyphicon glyphicon-upload fa-fw"></i> Nuevo Material</a>
                            </li>
                            <li>
                                <a href="addComp.php"><i class="glyphicon glyphicon-upload fa-fw"></i> Nuevo Empresa</a>
                            </li>
                            <li>
                                <a href="getAllCompanies.php"><i class="glyphicon glyphicon-upload fa-fw"></i> Empresas</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-8  ">
                    <h2 class="page-header ">Material para cotización</h2>
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
                            Material quirúrgico
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <form method="post" action="setValueMatCot.php">
                                <table width="100%" class="table table-striped table-bordered table-hover table2excel" id="dataTables-example">
                                    <thead>
                                        <tr class="">
                                            <th>CLAVE CCB</th>
                                            <th>DESCRIPCION</th>
                                            <th>MARCA</th>
                                            <th>EMPRESA</th>
                                            <th>PRESENTACION</th>
                                            <th>PRECIO</th>
                                            <th>AÑADIR</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php
                                        $valores->getMaterialAllCotiza();
                                        ?>
                                    </tbody>
                                </table>
                                <button>Export</button>
                                </form>
                            </div>
                        </div>   
                    </div>
                </div>
            </div>
        </div>
    </div>
        
      

    <script src="../bower_components/jquery/dist/jquery.min.js"></script>
            <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
            <!-- Metis Menu Plugin JavaScript -->
            <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>
            <!-- DataTables JavaScript -->
            <script src="../bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
            <script src="../bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>
            <script src="../bower_components/datatables-responsive/js/dataTables.responsive.js"></script>
            <!-- Custom Theme JavaScript -->
            <script src="../dist/js/sb-admin-2.js"></script>
            <script src="../dist/jquery.table2excel.min.js" type="text/javascript"></script>
            <script src="../dist/jquery.table2excel.js" type="text/javascript"></script>
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
<!--            <script>
			$(function() {
				$(".table2excel").table2excel({
					exclude: ".noExl",
					name: "Excel Document Name",
					filename: "myFileName",
					fileext: ".xls",
					exclude_img: true,
					exclude_links: true,
					exclude_inputs: true
				});
			});
		</script>-->
            <script>
                $("button").click(function(){
  $(".table2excel").table2excel({
    // exclude CSS class
    exclude: ".noExl",
    name: "Worksheet Name",
    filename: "SomeFile" //do not include extension
  }); 
});
            </script>
</body>

</html>





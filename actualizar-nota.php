<?php session_start();
if (!isset($_SESSION['id_usuario'])) {
    
    header('location:login.php');
    }
require('conexion.php');
if(isset($_SESSION['id_usuario'])){ 
    $id_usu=$_SESSION['id_usuario'];
    $registroe=mysqli_query($conexion,"SELECT * FROM usuario where id_tipo_usuario=2") or die ("Hay problemas en la consulta");	
	$registrop=mysqli_query($conexion,"SELECT * FROM Periodo ") or die ("Hay problemas en la consulta");
    $registrom=mysqli_query($conexion,"SELECT * FROM materia ") or die ("Hay problemas en la consulta");
    $registrog=mysqli_query($conexion,"SELECT * FROM grado ") or die ("Hay problemas en la consulta");
    $perfil="SELECT usuario.cod_usuario,usuario.nombre_usuario,tipo_usuario.nombre_tipo_usuario FROM usuario
 			  inner join tipo_usuario
 			  on tipo_usuario.id_tipo_usuario=usuario.id_tipo_usuario
              where usuario.id_usuario=".$id_usu;
    $estudiante=mysqli_query($conexion,$perfil) or die("problemas en la consulta".$perfil);
?>
<!DOCTYPE html>
<html>
<head>
<title>Sistema De Calificaciones</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/php; charset=utf-8" />
<meta name="keywords" content="Good Food Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.js"></script>
<link href='//fonts.googleapis.com/css?family=Damion' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Ubuntu+Condensed' rel='stylesheet' type='text/css'>
 <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">

</head>
<body>
<!--header-->
	<div class="header head-top">
		<div class="container">
			<nav class="navbar navbar-default">
				<div class="container-fluid">
		<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>				  
						<div class="navbar-brand navbar-right">
							<h1><a href="index.php">Actualizar Calificaciones</a></h1>
						</div>
					</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
					<div class=" collapse navbar-collapse navbar-left pull" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav "><br><br><br>
							<li ><a href="index_doc.php">Inicio <span class="sr-only">(current)</span></a></li>
							<li ><a href="registrar.php">Registrar Notas</a></li>
							<li class="active"><a href="actualizar.php">Actualizar Notas</a></li>
								<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Consultar Notas <span class="caret"></span></a>
									<ul class="dropdown-menu">
										<li><a href="consulta-estudiante.php">Consultar Por Estudiante</a></li>
										<li><a href="consulta-materia.php">Consultar Por Materia</a></li>
										<li><a href="consulta-grado.php">Consultar Por Grado</a></li>
									</ul>
								</li>
							
								
								<li class="dropdown ">
                    <a href="#" class="dropdown-toggle nav navbar-right" data-toggle="dropdown"><i class="fa fa-user"></i><?php echo " ".$_SESSION['nombre_usuario'];?><b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#" type="button" data-toggle="modal" data-target="#myModal"><i class="fa fa-fw fa-user"></i> Ver Perfil</a>
                        </li>
                        <li>
                        <!-- se daño el anterior por eso cambie el formulari -->
                            <a href="#" type="button" data-toggle="modal" data-target="#myModal2"><i class="fa fa-fw fa-gear"></i> Editar Pefil</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="cerrar.php"><i class="fa fa-fw fa-power-off"></i> Cerrar Sesión</a>
                        </li>								
						</ul>	<br>	<br>	<br>							  
						</ul>								  
					</div><!-- /.navbar-collapse -->
					</div><!-- /.container-fluid -->
					</nav>
			
		</div>
	</div>
<!--header-->
<?php } ?>
			<!--content-->
				<div class="content">
				<!--about-->
					<div class="about-section">
						<div class="container">
							<h2><span>Actualizar</span> Notas</h2>
								<div class="about-grids">
									<div class="col-md-3 about-grid1">
										<img src="images/g8.jpg" class="img-responsive" alt="/">
									</div>
									<div class="col-md-9 about-grid">
										<h5>Formulario</h5>
										<br>
												<?php
												$id_reporte = $_GET['id_reporte'];
												include("conexion.php");
              										$r=mysqli_query($conexion,"SELECT 
												    reporte.id_reporte, usuario.id_usuario, usuario.nombre_usuario, grado.nombre_grado, Periodo.Periodo_escolar, materia.nombre_materia,reporte.nota, reporte.descripcion, reporte.fecha
												    FROM reporte
												    INNER JOIN usuario
												    ON reporte.id_usuario=usuario.id_usuario
												    INNER JOIN grado
												    ON grado.id_grado=reporte.id_grado
												    INNER JOIN materia
												    ON materia.id_materia=reporte.id_materia
												    INNER JOIN Periodo
												    ON Periodo.id_periodo=reporte.id_periodo
												    where reporte.id_reporte=".$id_reporte)
												    or die ("Hay problemas en la consulta".$r);											
												?>

												<form>
													<div class="panel panel-success">
												        	<div class="row panel-heading">
															<div class="col-md-1">Id Reporte</div>
															<div class="col-md-1">Nombre Estudiante</div>
												            <div class="col-md-1">Grado</div>
												            <div class="col-md-1">Periodo</div>
												            <div class="col-md-1">Materia</div>
												            <div class="col-md-2">Nota</div>
												            <div class="col-md-2">Comentario</div>
												            <div class="col-md-2">Fecha</div>
												            <div class="col-md-1">Guardar</div>
												        	</div><br>
												        <?php while ($campoes=mysqli_fetch_array($r)) { ?>
												            <div class="row panel-body">
												            <div class="col-md-1"><?php echo $campoes['id_reporte'];?></div>
												            <div class="col-md-1"><?php echo $campoes['nombre_usuario'];?></div>
												            <div class="col-md-1"><?php echo $campoes['nombre_grado'];?></div>
												            <div class="col-md-1"><?php echo $campoes['Periodo_escolar'];?></div>
												            <div class="col-md-1"><?php echo $campoes['nombre_materia'];?></div>
												            <div class="col-md-2"><input type="" name="" required class="form-control" value="<?php echo $campoes['nota'];?>"/>
												            </div>
												            <div class="col-md-2"><input type="" name="" required class="form-control" value="<?php echo $campoes['descripcion'];?>"/>
												            </div>
												            <div class="col-md-2"><input type="" name="" required class="form-control" value="<?php echo $campoes['fecha'];?>"/>
												            </div>
												            <div class="col-md-1" align="center"><a href="#"><img src="images/save.png" width="25px" height="25px"></a></div>
												            </div>
												        <?php } ?>
												        </div>

												</form>
												        
									</div>
									<div class="clearfix"></div>
								</div>
						</div>
					</div>

						<!--footer-->
									<div class="content">
			
			
					
				<!--copy-->
					<div class="copy-section">
						<div class="container">
							<p>&copy; 2016 Good Food. All rights reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>
						</div>
					</div>
				<!--copy-->
		

		<!-- ver perfil-->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Mi Perfil</h4>
      </div>
        <div class="modal-body">

                <div class="container2">
                <div class="div-img" align="center">
                <img class="img" src="images/usuario.png" width="150px" height="200px" title="Usuario" alt="Usuario">
                </div>
                </div>


                <?php while ($est=mysqli_fetch_array($estudiante)) { ?>
                <div class="panel panel-info-m ">
                <div class="panel-heading">
                Información Personal
                </div>
                <div class="panel-body">
                Codigo Docente: <?php echo $est['cod_usuario']; ?>
                </div>
                <div class="panel-body">
                Nombres: <?php echo $est['nombre_usuario']; ?>
                </div>
                <div class="panel-body">
                Rol: <?php echo $est['nombre_tipo_usuario']; ?>
                </div>
                </div>
                <?php } ?>


	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">cerrar</button>
	      </div>
	    </div>

  </div>
</div>

<!-- editar perfil -->

<div id="myModal2" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Editar Perfil</h4>
      </div>
      <div class="modal-body">

        <div class="container">    
            <div class="col-md-6">
                <div class="panel panel-primary-m">
                    <div class="panel-heading"><b>Usuario</b></div>
                    <div class="panel-body">        
                <form method="POST" action="actualizar-perfil.php">                  
                <div align="center" class="form-add-trec">
                <!-- consulta -->
                <?php
                include ("conexion.php");
                $id_usu=$_SESSION['id_usuario'];
                $registrous=mysqli_query($conexion,"SELECT id_usuario, nombre_usuario, cod_usuario FROM usuario
                    WHERE id_usuario='$id_usu'") or die("Problemas en la consulta");
                while ($row=mysqli_fetch_array($registrous)){
                ?>
                <input type="hidden" name="id_usuario" value="<?php echo $row['id_usuario'];?>"/>
                     
                <div class="panel panel-info-m">
                  <div class="panel-heading">Nombres Usuario</div>
                  <div class="panel-body"><input type="text" name="nombre_usuario" required class="form-control" value="<?php echo $row['nombre_usuario'];?>"/></div>
                </div>
                <div class="panel panel-info-m">
                  <div class="panel-heading">Codigo Usuario</div>
                  <div class="panel-body"><input type="text" name="cod_usuario" required class="form-control" value="<?php echo $row['cod_usuario'];?>"/></div>
                </div>
                <div><input type="submit" value="Actualizar Datos" class="btn btn-primary"></div>

                <?php }?>
                </div>
                </form>

                    </div>
                </div>
            </div>        
        </div>
        </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>



</body>
</html>

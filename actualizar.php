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
							<li ><a href="index.php">Inicio <span class="sr-only">(current)</span></a></li>
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
                    <a href="#" class="dropdown-toggle nav navbar-right" data-toggle="dropdown"><i class="fa fa-user"></i>&nbsp Marlon Yela<b class="caret"></b></a>
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
							<h2><span>Our</span> restaurant</h2>
								<div class="about-grids">
									<div class="col-md-4 about-grid1">
										<img src="images/g8.jpg" class="img-responsive" alt="/">
									</div>
									<div class="col-md-8 about-grid">
										<h5>Donec euismod imperdiet feugiat. Vivamus non interdum eros. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Morbi tristique ut lacus et scelerisque.</h5>
										<p>Suspendisse potenti. Sed fermentum, libero eget euismod convallis, justo lectus egestas dui, eu tempor lectus risus a dolor. Suspendisse tempor quam purus, sit amet feugiat sapien molestie nec. Sed aliquam, justo ut pharetra dapibus, leo risus iaculis nulla, ut sagittis nunc diam lobortis metus. Nulla pulvinar odio vitae nisl dignissim, id rutrum lorem molestie. Maecenas euismod hendrerit risus, ut congue arcu tincidunt sed. Nullam at ipsum vel ante interdum lobortis. Etiam quis ultricies enim, in venenatis sapien. Phasellus interdum consectetur enim, venenatis eleifend urna sed nulla id magna placerat hendrerit.</p>
									</div>
									<div class="clearfix"></div>
								</div>
						</div>
					</div>
					<!--about-->
					<div class="cooking">
						<div class="container">
							<div class="cooking-grids">
								<div class="col-md-4 cook-grid">
									<div class="cook1">
										<h3>Our Mission </h3>
										<p>Fratione uptate mseesciun neque porroisqm estrem equia dolorer ntreterase geryiuyasa miertase.</p>
										<ul>
											<li><a href="#">Lorem ipsum dolor sit</a></li>
											<li><a href="#">Amet, consectetur</a></li>
											<li><a href="#">Nisi ex vel dictum dui</a></li>
											<li><a href="#">Lorem ipsum dolor sit</a></li>
											<li><a href="#">Praesent lacinia</a></li>
											<li><a href="#">Lorem ipsum dolor sit</a></li>
											<li><a href="#">Praesent lacinia</a></li>
										</ul>
									</div>	
								</div>
								<div class="col-md-4 cook-grid">
									<div class="cook2">
										<h3>Cooking Classes</h3>
										<p>Fratione uptate mseesciun neque porroisqm estrem equia dolorer ntreterase geryiuyasa miertase.</p>
										<ul>
											<li><a href="#">Aid venenatis enim</a></li>
											<li><a href="#">Curabitur sit amet</a></li>
											<li><a href="#">Dolor sed lorem</a></li>
											<li><a href="#">Vulputate ullamcorper</a></li>
											<li><a href="#">Praesent lacinia</a></li>
											<li><a href="#">Vulputate ullamcorper</a></li>
											<li><a href="#">Praesent lacinia</a></li>
										</ul>
									</div>						
								</div>
								<div class="col-md-4 cook-grid">
									<div class="cook3">
										<h3>Cooking Guide</h3>
										<p>Fratione uptate mseesciun neque porroisqm estrem equia dolorer ntreterase geryiuyasa miertase.</p>
										<ul>
											<li><a href="#">Adipiscing elit fusce</a></li>
											<li><a href="#">Amet, consectetur</a></li>
											<li><a href="#">Praesent lacinia</a></li>
											<li><a href="#">Lorem ipsum dolor sit</a></li>
											<li><a href="#">Dui eget risus ultricies</a></li>
											<li><a href="#">Lorem ipsum dolor sit</a></li>
											<li><a href="#">Dui eget risus ultricies</a></li>
										</ul>
									</div>	
								</div>
							</div>
						</div>
					</div>
						<!--staff-->
						
							
						<!--our History-->
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

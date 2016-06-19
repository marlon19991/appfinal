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
							<h1><a href="#">Registrar Calificaciones</a></h1>
						</div>
					</div>					
				</div>
			</nav>
		</div>
	</div>
<!--header-->		

<div class="content">
<div class="about-section">
<div class="container">
<br><br>
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="navbar-header">
                <h2><span>Registrando</span> Nota</h2
            </div>
        </nav>
<br><br>
</div>
</div>

<?php
include("conexion.php");
mysqli_query($conexion,"INSERT INTO reporte(id_usuario,id_grado,id_periodo,id_materia,nota,descripcion,fecha) VALUES ('$_POST[id_usuario]','$_POST[id_grado]','$_POST[id_periodo]','$_POST[id_materia]','$_POST[nota]','$_POST[desc]','$_POST[fecha]')") or die ("Hay problemas en la consulta");
echo "<META HTTP-EQUIV=Refresh CONTENT='1; URL=index_doc.php'>"
?>
</div>

<div class="copy-section">
	<div class="container">
		<p>&copy; 2016 Good Food. All rights reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>
	</div>
</div>
			
</body>
</html>

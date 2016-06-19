<?php
session_start();
if(!isset($_SESSION['id_usuario'])){ 
    
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Sistema de Calificaciones</title>
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
<script src="js/responsiveslides.min.js"></script>
<!--endsmothscrolling-->

</head>
<body>
	<div class="header ">
		<div class="container">
			<nav class="navbar navbar-default">
				<div class="container-fluid">
		<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">			  
						<div class="navbar-brand navbar-right">
							<h1><a href="#">Sistema De Calificaciones</a></h1>
						</div>
					</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		</div><!-- /.container-fluid -->
		</nav>

			<div class="slider">
				<div class="callbacks_container">
 
							<div class="caption">
							<div class="col-md-6 cap-img">
							<img src="images/p.png"  class="img-responsive" alt="/">
							</div>
							<div>
								 
								<form method="post" action="validarlogin.php">
									<table>
									<tr><td><h3>Login</h3> </td></tr>
									<tr>
									<td><p>Usuario</p></td>
									<td><input type="text" name="usu" placeholder="Usuario" required="required"/></td>
									</tr>
									<tr>
									<td><p>Clave</p></td>
									<td><input type="password" name="pass" placeholder="Password" required="required"/></td>
									</tr>
									<tr>
									<td colspan="2"><input type="Submit" value="Ingresar" class="btn btn-danger btn-md"></td>
									</tr>
									</table>							
								</form>
								
							</div>
							</div>

				</div>
			</div>

	</div>
</div>

</body>
</html>
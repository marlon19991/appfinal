<!-- Archivo para actualizar la informacion de estudiante en la BD -->
<!-- ya esta funcionando -->

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Actualizando...</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta charset="UTF-8">
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

</head>
<body>
<div class="mg principal">
<div class="container">
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">Actualizando Perfil</a>
            </div>
        </nav>
        <br><br>
<?php
$id_usuario = $_POST['id_usuario'];
$nombre_usuario = $_POST['nombre_usuario'];
$cod_usuario = $_POST['cod_usuario'];

include("conexion.php");

$registro=mysqli_query($conexion,"SELECT id_usuario, nombre_usuario, cod_usuario
	FROM usuario
	WHERE id_usuario='$id_usuario'") or die("Problemas en la consulta");
if($re=mysqli_fetch_array($registro)){
mysqli_query($conexion,"UPDATE usuario set id_usuario='$id_usuario', nombre_usuario='$nombre_usuario', cod_usuario='$cod_usuario' 
WHERE id_usuario='$id_usuario'") or die("Problemas al actualizar");
echo "<div align='center' class='panel panel-primary-m'><h4>Actualizando</h4></div>";
echo "<META HTTP-EQUIV=Refresh CONTENT='1; URL=index_doc.php'>";
}
else{
	echo "El Usuario no existe";
}
echo "<META HTTP-EQUIV=Refresh CONTENT='1; URL=index_doc.php'>";
?>
</div>
</div>
</body>
</html>
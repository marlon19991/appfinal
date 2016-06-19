<meta charset= "UTF-8">
<?php
include("conexion.php");

$usu=$_POST['usu'];
$pass=$_POST['pass'];

$i=mysqli_query($conexion,"SELECT id_usuario FROM usuario WHERE nombre_usuario='$usu' AND cod_usuario='$pass'") or die("error en la consulta");
$r= mysqli_fetch_row($i);
$c=$r[0];
//echo $c;<?php



if (isset($usu) && !empty($usu) && isset($pass) &&!empty($pass)){

$result=mysqli_query($conexion,"SELECT nombre_usuario, cod_usuario, id_tipo_usuario, id_usuario FROM usuario WHERE nombre_usuario='$usu' AND cod_usuario='$pass'") or die("error en la consulta");
if($row = mysqli_fetch_row($result))
	{
		if ($row[2]==1)
		{
			session_start();  
			//Almacenamos el nombre de usuario en una variable de sesión usuario
			$_SESSION['nombre_usuario'] = $usu;  
			//Redireccionamos a la pagina: index.php
			header("Location: index_doc.php");
		}
		elseif($row[2]==2)
		{
			session_start();
			$_SESSION['nombre_usuario'] = $usu;  
			header("Location: index_est.php");
		}
	}
	
}

//echo $pss;

echo"<script type=\"text/javascript\">alert('El nombre de usuario o la contraseña son incorrectos!'); window.location='login.php';</script>";

?>
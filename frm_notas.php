<!-- se daño el anterior por eso cambie el formulari -->

<?php
session_start();
?>

<!DOCTYPE html>
<?php 
     require('conexion.php'); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Actualizar Notas</title>
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
<body >
  
      <?php 
    $csreporte="SELECT reporte.id_reporte, reporte.nota, reporte.descripcion, reporte.fecha, reporte.id_usuario, reporte.id_usuario, reporte.id_materia, reporte.id_periodo
    FROM reporte 
    inner join usuario on reporte.id_usuario=Usuario.id_usuario 
    inner join grado on reporte.id_grado=grado.id_grado
    inner join materia on reporte.id_materia=materia.id_materia 
    inner join periodo on reporte.id_periodo=periodo.id_periodo";

    $cursos=mysqli_query($conexion,$csreporte) or die("problemas en la consulta");
       ?>
       
<!-- ojala y porfin deje subir esto -->


     <div class="container">
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">Notas Estudiante</a>
            </div>
        </nav>
<br>

            <div class="row">
            <div class="col-md-4">
                <div class="row>"
                     <div class="table-responsive">

                        
                </div>
            </div>            

            <div class="col-md-8">
                <div class="panel panel-primary-m">

                    <div class="panel-heading"><b>Usuario</b></div>
                    <div class="panel-body">        


                <form method="POST" action="actualizar-notas.php">                  
                <div align="center" class="form-add-trec">
                <!-- consulta -->
               

                <?php
                include ("conexion.php");
                $id_usu=$_SESSION['id_usuario'];
                $registroest=mysqli_query($conexion,"SELECT nombre_grado, nombre_materia, periodo_escolar, descripcion, nota, fecha
                FROM reporte inner join grado inner join materia inner join periodo
                    WHERE id_usuario='$id_usu'") or die("Problemas en la consulta");
                while ($row=mysqli_fetch_array($registroest)){
                ?>
                <input type="hidden" name="id_usuario" value="<?php echo $row['id_usuario'];?>"/>
                     

               <div class="panel panel-info-m">
                <div class="panel-heading">Documento de Identificación</div>
                  <div class="panel-body"><input type="text" name="nombre_grado" required class="form-control" value="<?php echo $row['nombre_grado'];?>"/></div>
                </div>

                <div class="panel panel-info-m">
                <div class="panel-heading">Documento de Identificación</div>
                  <div class="panel-body"><input type="text" name="nombre_materia" required class="form-control" value="<?php echo $row['nombre_materia'];?>"/></div>
                </div>

                <div class="panel panel-info-m">
                <div class="panel-heading">Documento de Identificación</div>
                  <div class="panel-body"><input type="text" name="periodo_escolar" required class="form-control" value="<?php echo $row['periodo_escolar'];?>"/></div>
                </div>

                <div class="panel panel-info-m">
                <div class="panel-heading">Documento de Identificación</div>
                  <div class="panel-body"><input type="text" name="descripcion" required class="form-control" value="<?php echo $row['descripcion'];?>"/></div>
                </div>

                <div class="panel panel-info-m">
                <div class="panel-heading">Documento de Identificación</div>
                  <div class="panel-body"><input type="text" name="nota" required class="form-control" value="<?php echo $row['nota'];?>"/></div>
                </div>

                <div class="panel panel-info-m">
                <div class="panel-heading">Documento de Identificación</div>
                  <div class="panel-body"><input type="text" name="fecha" required class="form-control" value="<?php echo $row['fecha'];?>"/></div>
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


</body>
</html>

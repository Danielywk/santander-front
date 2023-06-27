<?php
//se establece una conexion a la base de datos
include 'conexion.php';
//si se han enviado datos
if (isset($_POST['id_visitante']) and isset($_POST['material']) and isset($_POST['observaciones']) 
    and isset($_POST['cargos'])){
    $id_visitante=mysqli_real_escape_string($conexion,$_POST['id_visitante']);
    $material=mysqli_real_escape_string($conexion,$_POST['material']);
    $observaciones = mysqli_real_escape_string($conexion,$_POST['observaciones']);
    $cargos=mysqli_real_escape_string($conexion,$_POST['cargos']);
    $ingresar=mysqli_query($conexion,'insert into prestaciones(id_visitante,material,observaciones,cargos) 
        values
    ("'.$id_visitante.'","'.$material.'","'.$observaciones.'","'.$cargos.'")') 
    or die ('<p>Error al registrar</p><br>'.mysqli_error($conexion));
    //redirección
      echo"<script type=\"text/javascript\">alert('Sus datos han sido enviados exitosamente...'); window.location='/org/prestaciones.php';</script>"; 

}//si no se enviaron datos
else{
    echo"<script type=\"text/javascript\">alert('Error (410) Los datos no han sido enviados...'); window.location='/org/prestaciones.php';</script>";  
}
    //redirección



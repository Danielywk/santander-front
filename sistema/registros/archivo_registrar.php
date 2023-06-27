<?php
//se establece una conexion a la base de datos
include 'conexion.php';
//si se han enviado datos
if (isset($_POST['name']) and isset($_POST['apellido']) and isset($_POST['e']) 
    and isset($_POST['ciudad']) and isset($_POST['estado']) and isset($_POST['telefono'])){
    $name=mysqli_real_escape_string($conexion,$_POST['name']);
    $apellido=mysqli_real_escape_string($conexion,$_POST['apellido']);
    $e = mysqli_real_escape_string($conexion,$_POST['e']);
    $ciudad=mysqli_real_escape_string($conexion,$_POST['ciudad']);
    $estado=mysqli_real_escape_string($conexion,$_POST['estado']);
    $telefono=mysqli_real_escape_string($conexion,$_POST['telefono']);
    $ingresar=mysqli_query($conexion,'insert into visitantes(nombre,apellido,e_mail,ciudad,estado,telefono) 
        values
    ("'.$name.'","'.$apellido.'","'.$e.'","'.$ciudad.'","'.$estado.'","'.$telefono.'")') 
    or die ('<p>Error al registrar</p><br>'.mysqli_error($conexion));
    //redirección
    echo"<script type=\"text/javascript\">alert('Sus datos han sido enviados exitosamente...'); window.location='/servicioweb/visitantes.php';</script>";  
    
}//si no se enviaron datos
else{
     echo"<script type=\"text/javascript\">alert('Error (410) Los datos no han sido enviados...'); window.location='/servicioweb/visitantes.php';</script>";  
}
    //redirección

?>


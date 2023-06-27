<?php
//se establece una conexion a la base de datos
$conexion=mysqli_connect("SQL:3306",'root','isaias','system') or die ('Error al conectar con la base de datos');
//si se han enviado datos
$Id_visitante= $_REQUEST['Id_visitante'];
 
    $name=$_POST['name'];
    $apellido=$_POST['apellido'];
    $e = $_POST['e'];
    $ciudad=$_POST['ciudad'];
    $estado=$_POST['estado'];
    $telefono=$_POST['telefono'];

    $query="UPDATE visitantes SET Nombre ='$name', Apellido='$apellido',E_mail='$e',Ciudad='$ciudad',Estado= '$estado', Telefono='$telefono' WHERE Id_visitante='$Id_visitante'" ;

$resultado=$conexion->query($query);

if ($resultado){
        
    //redirección
    echo"<script type=\"text/javascript\">alert('Sus datos han sido modificados exitosamente...'); window.location='/servicioweb/consultas.php';</script>";  
    
}//si no se enviaron datos
else{
     echo"<script type=\"text/javascript\">alert('Error 405! Los datos no han sido enviados...'); window.location='/servicioweb/consultas.php';</script>";  
}
    //redirección
?>


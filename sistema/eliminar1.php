<?php
//se establece una conexion a la base de datos
$conexion=mysqli_connect("SQL:3306",'root','isaias','system') or die ('Error al conectar con la base de datos');
//si se han enviado datos
$id_libro= $_REQUEST['id_libro'];
    $query="DELETE FROM libros  WHERE id_libro='$id_libro'" ;

$resultado=$conexion->query($query);

if ($resultado){
        
    //redirección
    echo"<script type=\"text/javascript\">alert('Usted ha eliminado este registro exitosamente...'); window.location='/org/consultas.php';</script>";  
    
}//si no se enviaron datos
else{
     echo"<script type=\"text/javascript\">alert('Error 405! Los datos no han sido enviados...'); window.location='/org/consultas.php';</script>";  
}
    //redirección
?>
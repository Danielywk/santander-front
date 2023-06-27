<?php
//se establece una conexion a la base de datos
$conexion=mysqli_connect("SQL:3306",'root','isaias','system') or die ('Error al conectar con la base de datos');
//si se han enviado datos
$Id_prestacion= $_REQUEST['Id_prestacion'];

    $id_visitante=$_POST['id_visitante'];
    $material=$_POST['material'];
    $observaciones = $_POST['observaciones'];
    $cargos=$_POST['cargos'];

    $query="UPDATE prestaciones SET Id_visitante ='$id_visitante', Material='$material', Observaciones='$observaciones', Cargos='$cargos' WHERE Id_prestacion='$Id_prestacion'" ;

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


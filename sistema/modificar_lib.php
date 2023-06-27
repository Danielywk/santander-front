<?php
//se establece una conexion a la base de datos
$conexion=mysqli_connect("SQL:3306",'root','isaias','system') or die ('Error al conectar con la base de datos');
//si se han enviado datos
$id_libro= $_REQUEST['id_libro'];

    $codigo_libro=$_POST['codigo_libro'];
    $titulo=$_POST['titulo'];
    $autor = $_POST['autor'];
    $editorial=$_POST['editorial'];
    $genero=$_POST['genero'];
    $numero_paginas=$_POST['numero_paginas'];
    $sinopsis=$_POST['sinopsis'];

    $query="UPDATE libros SET Codigo_libro ='$codigo_libro', Titulo='$titulo', Autor='$autor', Editorial='$editorial', Genero= '$genero', Numero_paginas='$numero_paginas', Sinopsis='$sinopsis' WHERE id_libro='$id_libro'" ;

$resultado=$conexion->query($query);

if ($resultado){

    //redirección
    echo"<script type=\"text/javascript\">alert('Sus datos han sido modificados exitosamente...'); window.location='/org/consultas.php';</script>";

}//si no se enviaron datos
else{
     echo"<script type=\"text/javascript\">alert('Error 405! Los datos no han sido enviados...'); window.location='/org/consultas.php';</script>";
}
    //redirección
?>


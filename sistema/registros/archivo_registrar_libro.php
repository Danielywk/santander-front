<?php
//se establece una conexion a la base de datos
include 'conexion.php';
//si se han enviado datos
if (isset($_POST['codigo_libro']) and isset($_POST['titulo']) and isset($_POST['autor']) 
    and isset($_POST['editorial']) and isset($_POST['genero']) and isset($_POST['numero_paginas']) and isset($_POST['sinopsis'])){
    $codigo_libro=mysqli_real_escape_string($conexion,$_POST['codigo_libro']);
    $titulo=mysqli_real_escape_string($conexion,$_POST['titulo']);
    $autor = mysqli_real_escape_string($conexion,$_POST['autor']);
    $editorial=mysqli_real_escape_string($conexion,$_POST['editorial']);
    $genero=mysqli_real_escape_string($conexion,$_POST['genero']);
    $numero_paginas=mysqli_real_escape_string($conexion,$_POST['numero_paginas']);
    $sinopsis=mysqli_real_escape_string($conexion,$_POST['sinopsis']);
    $ingresar=mysqli_query($conexion,'insert into libros(codigo_libro,titulo,autor,editorial,genero,numero_paginas,sinopsis) 
        values
    ("'.$codigo_libro.'","'.$titulo.'","'.$autor.'","'.$editorial.'","'.$genero.'","'.$numero_paginas.'","'.$sinopsis.'")') 
    or die ('<p>Error al registrar</p><br>'.mysqli_error($conexion));
    //redirección
     echo"<script type=\"text/javascript\">alert('Sus datos han sido enviados exitosamente...'); window.location='/servicioweb/libro.php';</script>"; 
}//si no se enviaron datos
else{
    echo"<script type=\"text/javascript\">alert('Error (410) Los datos no han sido enviados...'); window.location='/servicioweb/libro.php';</script>";  
}
    //redirección

?>

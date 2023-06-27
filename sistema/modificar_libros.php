<!DOCTYPE html>
<html lang="es">
    <head>
		<meta charset="UTF-8" />
        <title>Modificaciones.php</title>
        <link rel="stylesheet" type="text/css" href="css/style.css" />
<style>
      body {
        background: #fff url(css/images/libro.jpg) no-repeat center top;
    -webkit-background-size: cover;
        -moz-background-size: cover;
        background-size: cover;
    }

    </style>
<body>
<section class="main">
	<?php

    $id_libro= $_REQUEST['id_libro'];
    $conexion=mysqli_connect("SQL:3306",'root','isaias','system') or die ('Error al conectar con la base de datos');
    $sql="SELECT * from libros WHERE id_libro ='$id_libro'";
    $result=mysqli_query($conexion,$sql);
    $mostrar=mysqlI_fetch_array($result);
    ?>

            <form method="post" id="myForm" action="modificar_lib.php?id_libro=<?php echo $mostrar['id_libro']; ?>" class="form-4" form>

				    <h1 style="font-size: 20pt;">Modificar Registro</h1>

				                        <p>Codigo del libro:</p>
                    				        <label for="codigo_libro"></label>
                    				        <input type="text" name="codigo_libro" placeholder="Ej. 123" value="<?php echo $mostrar['Codigo_libro']; ?>" pattern="[0-9]+" maxlength="4" required >
                    				    </p>
                                        <p>Titulo:</p>
                    				        <label for="titulo"></label>
                    				        <input name="titulo" type="text"  placeholder="Ej. Paz" value="<?php echo $mostrar['Titulo']; ?>" required>
                    				    </p>
                                        <p>Autor:</p>
                    				        <label for="autor"></label>
                    				        <input name="autor" type="text"  placeholder="Ej. Octavio paz" value="<?php echo $mostrar['Autor']; ?>" required>
                    				    </p>
                    				    <p>Editorial:</p>
                    				        <label for="editorial"></label>
                    				        <input name="editorial" type="text"  placeholder="Ej. Planeta" value="<?php echo $mostrar['Editorial']; ?>" required>
                    				    </p>
                    				    <p>Genero:</p>
                    				        <label for="genero"></label>
                    				        <input name="genero" type="text"  placeholder="Terror, Ficción, Romantico" value="<?php echo $mostrar['Genero']; ?>" required>
                    				    </p>
                    				     <p>Número de paginas:</p>
                    				        <label for="pagina"></label>
                    				        <input name="numero_paginas" type="text"  placeholder="Ej. 0/255" value="<?php echo $mostrar['Numero_paginas']; ?>" pattern="[0-9]+" maxlength="4" required>
                    				    </p>
                                        <p>Sinopsis:</p>
                    				        <label for="sinopsis"></label>
                    				        <input name="sinopsis" type="text"  placeholder="Solo 1 palabra clave" value="<?php echo $mostrar['Sinopsis']; ?>" required>
                    				    </p>
				                        <p>
				                        <input name="valider" type="submit" class="submit" value="Aceptar" >
				                        </p>
			</section>
			</body>
</html>
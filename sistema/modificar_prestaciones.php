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

    $Id_prestacion= $_REQUEST['Id_prestacion'];
    $conexion=mysqli_connect("SQL:3306",'root','isaias','system') or die ('Error al conectar con la base de datos');
    $sql="SELECT * from prestaciones WHERE Id_prestacion ='$Id_prestacion'";
    $result=mysqli_query($conexion,$sql);
    $mostrar=mysqlI_fetch_array($result);
    ?>

            <form method="post" id="myForm" action="modificar_pres.php?Id_prestacion=<?php echo $mostrar['Id_prestacion']; ?>" class="form-4" form>

				    <h1 style="font-size: 20pt;">Modificar Registro</h1>

				                                            <p>Id_visitante:
                                        				        <label for="id_visitante"></label>
                                        				        <input type="text" name="id_visitante" placeholder="Introducir" value="<?php echo $mostrar['Id_visitante']; ?>" pattern="[0-9]+" maxlength="4" required >
                                        				    </p>
                                        				    <p>Material:
                                        				        <label for="material"></label>
                                        				        <input type="text" name="material" placeholder="Libro, silla, mesa, etc." value="<?php echo $mostrar['Material']; ?>" required >
                                        				    </p>
                                        				     <p>Observaciónes:
                                        				        <label for="observaciones"></label>
                                        				        <input name="observaciones" type="text"  placeholder="0/00/0000" value="<?php echo $mostrar['Observaciones']; ?>" required>
                                        				    </p>
                                        				    <p>Cargos:
                                        				        <label for="cargos"></label>
                                        				        <input name="cargos" type="text"  placeholder="00000$" value="<?php echo $mostrar['Cargos']; ?>" pattern="[0-9]+" maxlength="5" required>
                                        				    </p>
				                                            <p>
				                                            <input name="valider" type="submit" class="submit" value="Aceptar" >
				                                            </p>
			</section>
			</body>
</html>
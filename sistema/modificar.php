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

    $Id_visitante= $_REQUEST['Id_visitante'];
    $conexion=mysqli_connect("SQL:3306",'root','isaias','system') or die ('Error al conectar con la base de datos');
    $sql="SELECT * from visitantes WHERE Id_visitante ='$Id_visitante'";
    $result=mysqli_query($conexion,$sql);
    $mostrar=mysqlI_fetch_array($result); 
    ?>

            <form method="post" id="myForm" action="modificar_vis.php?Id_visitante=<?php echo $mostrar['Id_visitante']; ?>" class="form-4" form>
         
				    <h1 style="font-size: 20pt;">Modificar Registro</h1>
				    
				    <p>Nombre:</p>
				        <label for="name">Nombre</label>
				        <input type="text" required name="name"   placeholder="Nombre" value="<?php echo $mostrar['Nombre']; ?>">
				    </p>
				    <p>Apellidos:</p>
				        <label for="apellido">Apellidos</label>
				        <input type="text" name="apellido" placeholder="Apellido" value="<?php echo $mostrar['Apellido']; ?>" required > 
				    </p>
				    <!--<p>
				        <label for="nombre">Edad</label>
				        <input type="text" name="name" placeholder="nombre" required > 
				    </p>-->
                    <p>E-mail:</p>
				        <label for="e">E-mail</label>				   
				        <input name="e" type="text"  placeholder="@alguien.com" value="<?php echo $mostrar['E_mail']; ?>" required>
				    </p>
                    <p>Ciudad:</p>
				        <label for="ciudad">Ciudad</label>
				        <input name="ciudad" type="text"  placeholder="Ciudad" value="<?php echo $mostrar['Ciudad']; ?>" required>
				    </p>
				    <p>Estado:</p>
				        <label for="estado">Estado</label>
				        <input name="estado" type="text"  placeholder="Estado" value="<?php echo $mostrar['Estado']; ?>" required>
				    </p>
				    <p>Telefono:</p>
				        <label for="telefono">Telefono</label>
				        <input name="telefono" type="text"  placeholder="Telefono" value="<?php echo $mostrar['Telefono']; ?>" pattern="[0-9]+" maxlength="10">
				    </p>

				    <p>
				        <input name="valider" type="submit" class="submit" value="Aceptar" >
				    </p> 
 
			</section>
			</body>
</html>
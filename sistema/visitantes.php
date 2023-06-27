<?php
session_start();
//si hay una sesión
if (isset($_SESSION['name'])){
    //se muestra el contenido de la página web
?>
<!DOCTYPE html>
<html lang="es">
    <head>
		<meta charset="UTF-8" />      
        <title>Formulario de Registro</title>
        <link rel="stylesheet" type="text/css" href="css/style.css" />
		<style>	
			
			body {
				background: #7f9b4e url(imagenes/6.jpg) no-repeat center top;
				
			}
			footer {
  font-family: arial;
  font-size: 12pt;
  text-align: center;
  color: white;
  width: 100%;
  height: 100%;
  margin-top: 90px;
  margin-left: 0px;
  text-transform: none;
  background: rgba(0,0,0,0.3);
}
	footer ul li{
		list-style: none;
		
	}
	h1{
	
	font-weight: 300;
	margin: 0;
	padding: 15px 0 5px 0;
	color:white;
	font-family: Cambria, Georgia, serif;
	font-style: italic;
	text-shadow: 0 1px 1px rgba(255,255,255,0.6);
	text-align: center;
	}		
			
			
		</style>

    </head>
    <body>
        <div class="container">	
            <div class="codrops-top"></div>


			
			<header>
				 <h4><?php print $_SESSION['name'];?></h4>
			
				<h1 style="color:white;">Registro de Visitantes</h1>
				<nav class="isa"> <a href="home_admin.php">Home</a> <a href="visitantes.php">Registro de Visitantes</a> <a href="libro.php">Registro de Libros</a> <a href="prestaciones.php">Prestaciones</a> <a href="consultas.php">Consultas</a> 
                </nav>

              

               <h2>&nbsp;</h2>
                
			</header>
			
			<section class="main">
            <form method="post" id="myForm" action="registros/archivo_registrar.php" class="form-4" form>
				    <h1 style="font-size: 20pt;">Registrar visitante</h1>
				    
				    <p>Nombre:</p>
				        <label for="name">Nombre</label>
				        <input type="text" name="name" placeholder="Nombre" required > 
				    </p>
				    <p>Apellidos:</p>
				        <label for="apellido">Apellidos</label>
				        <input type="text" name="apellido" placeholder="Apellido" required > 
				    </p>
				    <!--<p>
				        <label for="nombre">Edad</label>
				        <input type="text" name="name" placeholder="nombre" required > 
				    </p>-->
                    <p>E-mail:</p>
				        <label for="e">E-mail</label>				   
				        <input name="e" type="text"  placeholder="@alguien.com" required>
				    </p>
                    <p>Ciudad:</p>
				        <label for="ciudad">Ciudad</label>
				        <input name="ciudad" type="text"  placeholder="Ciudad" required>
				    </p>
				    <p>Estado:</p>
				        <label for="estado">Estado</label>
				        <input name="estado" type="text"  placeholder="Estado" required>
				    </p>
				    <p>Telefono:</p>
				        <label for="telefono">Telefono</label>
				        <input name="telefono" type="text"  placeholder="Telefono" pattern="[0-9]+" maxlength="10">
				    </p>

				    <p>
				        <input name="valider" type="submit" class="submit" value="Enviar" >
				    </p> 
 
			</section>
			
        </div>

        <footer> 
  <hgroup>Datos</hgroup>
  <ul>
   <li>Sistema de información</li>
<li>Para: Casa de cultura Jocotitlán</li>
<li>Turno: Las 24 hrs.</li>
<li>Teléfonos: 7121231660</li>
<li>Correo electronico: CBTMRC_JOCOTITLAN@YAHOO.COM.MX</li>
<li>Calle: Kilometro 18.2 Carretera Atlacomulco - Toluca</li>
<li>Municipio: Jocotitlan</li>
<li>Localidad: Centro</li>
 <li>Desarrollado por: Isaias Amado</li>
  <h2>Derechos Reservados &copy; 2017-2018</h2>
</ul>
</footer>   
</body>
</html>
    </body>
</html>
<?php
}//si no hay sesión
else{
    //se redirecciona
    header ('location: ./');
}
?>
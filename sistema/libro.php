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
				background: #7f9b4e url(css/images/cafe.jpg) no-repeat center top;

			}
			footer {
  font-family: arial;
  font-size: 12pt;
  text-align: center;
  color: white;
  width: 100%;
  height: 100%;
  margin-top: 35px;
  margin-left: 0px;
  text-transform: none;
  background: rgba(0,0,0,0.4);
}
	footer ul li{
		list-style: none;
		
	}
	h1{
	font-weight: 300;
	margin: 0;
	padding: 15px 0 5px 0;
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
			
				<h1 style="color:black;">Registro de Libros</h1>
				<nav class="isa"> <a href="home_admin.php">Home</a> <a href="visitantes.php">Registro de Visitantes</a> <a href="libro.php">Registro de Libros</a> <a href="prestaciones.php">Prestaciones</a> <a href="consultas.php">Consultas</a> 
                </nav>

              

               <h2>&nbsp;</h2>
                
			</header>
			
			<section class="main">
            <form method="post" id="myForm" action="registros/archivo_registrar_libro.php" class="form-4" form>
				    <h1 style="font-size:20pt; color:black;">Registrar Libro</h1>
				    
				    
				    <p>Codigo de libro:
				        <label for="codigo_libro"></label>
				        <input type="text" name="codigo_libro" placeholder="Ej. 123" pattern="[0-9]+" maxlength="4" required >
				    </p>
                    <p>Titulo:
				        <label for="titulo"></label>				   
				        <input name="titulo" type="text"  placeholder="Ej. Paz" required>
				    </p>
                    <p>Autor:
				        <label for="autor"></label>
				        <input name="autor" type="text"  placeholder="Ej. Octavio paz" required>
				    </p>
				    <p>Editorial:
				        <label for="editorial"></label>
				        <input name="editorial" type="text"  placeholder="Ej. Planeta" required>
				    </p>
				    <p>Genero:
				        <label for="genero"></label>
				        <input name="genero" type="text"  placeholder="Terror, Ficción, Romantico" required>
				    </p>
				     <p>Número de paginas:
				        <label for="pagina"></label>
				        <input name="numero_paginas" type="text"  placeholder="Ej. 0/255" pattern="[0-9]+" maxlength="4" required>
				    </p>
                    <p>Sinopsis:
				        <label for="sinopsis"></label>
				        <input name="sinopsis" type="text"  placeholder="Solo 1 palabra clave" required>
				    </p>
				    <p>
				        <input name="valider" type="submit" class="submit" value="Enviar" >
				    </p>       
				</form>
 
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
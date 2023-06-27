<?php
session_start();
//si hay una sesión
if (isset($_SESSION['name'])){
    //se muestra el contenido de la página web
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
    <meta charset="utf-8">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/estilos.css" rel="stylesheet">
    <script src="slider.js"></script>
  </head>
  <body>
     <style>  
      body {
        background: #7f9b4e url(css/images/luna.jpg) no-repeat center top;    
      } 
 h2{
  font-size: 30px;
  line-height: 38px;
  margin: 0;
  position: relative;
  font-weight: 300;
  color: #666;
  text-shadow: 0 1px 1px rgba(255,255,255,0.9);
}
  footer {
  font-family: arial;
  font-size: 12pt;
  text-align: center;
  color: black;
  width: 100%;
  height: 29%;
  margin-top: 90px;
  margin-left: 0px;
  max-height: 165pt;
  text-transform: none;
  background: rgba(249, 248, 248,0.3);
}
  footer ul li{
    list-style: none;
    
  }  

  .boton{

    /* Size and position */
    width: 10%;
    padding: 5px 7px;
    background: #634056;
    background: -moz-linear-gradient(rgba(99,64,86,0.5), rgba(76,49,65,0.7));
    background: -ms-linear-gradient(rgba(99,64,86,0.5), rgba(76,49,65,0.7));
    background: -o-linear-gradient(rgba(99,64,86,0.5), rgba(76,49,65,0.7));
    background: -webkit-gradient(linear, 0 0, 0 100%, from(rgba(99,64,86,0.5)), to(rgba(76,49,65,0.7)));
    background: -webkit-linear-gradient(rgba(99,64,86,0.5), rgba(76,49,65,0.7));
    background: linear-gradient(rgba(99,64,86,0.5), rgba(76,49,65,0.7));    
    border-radius: 5px;
    border: 1px solid #4e3043;
    box-shadow: inset 0 1px rgba(255,255,255,0.4), 0 2px 1px rgba(0,0,0,0.1);
    cursor: pointer;
    -webkit-transition: all 0.3s ease-out;
    -moz-transition: all 0.3s ease-out;
    -ms-transition: all 0.3s ease-out;
    -o-transition: all 0.3s ease-out;
    transition: all 0.3s ease-out;
    position: inherit;
    margin-top: -10pt;

    /* Font styles */
    color: white;
    text-shadow: 0 1px 0 rgba(0,0,0,0.3);
    font-size: 16px;
    font-weight: bold;
    font-family: 'Raleway', 'Lato', Arial, sans-serif;
  } 
    </style>
    <div class="container"> 
            <div class="codrops-top"></div>
      <header>  
         <li><a href="cerrar_sesion_admin.php"><h4 align="right" style="color:white;"><button type="submit" class="boton" borde=0/>Salir</button></h4></li></a>
         <h1 style ="color: white;">¡Bienvenido <?php print $_SESSION['name'];?>!</h1>
        <nav class="isa"> <a href="home_admin.php">Inicio</a> <a href="visitantes.php">Registro de Visitantes</a> <a href="libro.php">Registro de Libros</a> <a href="prestaciones.php">Prestaciones</a> <a href="consultas.php">Consultas</a> 
                 
                </nav>
               <h2>&nbsp;</h2>             
      </header>
<article style="text-align: center;">
    <h1 style="color: #BDB8B8  ;">El sistema de información de registros (SRI) te da la más cordial bienvenida... <br> <br> <br>
     </h1>
</article>
<section>
<article> 
  <hgroup>
    <header>

<div id="contenedor-slider" class="contenedor-slider">
 <div id="slider" class="slider">
    <section class="slider__section"><img src="imagenes/ce.jpg" class="slider__img"></section>
    <section class="slider__section"><img src="imagenes/2.jpg" class="slider__img"></section>
    <section class="slider__section"><img src="imagenes/ecb.jpg" class="slider__img"></section>
    <section class="slider__section"><img src="imagenes/3.jpg" class="slider__img"></section>
  </div>
  <div id="btn-prev" class="btn-prev">&#60;</div>
  <div id="btn-next" class="btn-next">&#62;</div>
 </div>
</hgroup>
</header>
</article> 
</section>  
<script type="text/javascript" src="slider.js"></script>
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
   </html>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    


<?php
}//si no hay sesión
else{
    //se redirecciona
    header ('location: ./');
    echo "No existe la sesión";
}
?>



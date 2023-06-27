<?php
session_start();
//si hay una sesión
if (isset($_SESSION['name'])){
    //se muestra el contenido de la página web
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Home</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">SAW</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php print $_SESSION['name'];?> <span class="caret"></span></a>
            <ul class="dropdown-menu">
                <li><a href="cerrar_sesion_user.php">Salir</a></li>
            </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
      
<article style="text-align: center;">
    <h1>¡Bienvenido <?php print $_SESSION['name'];?>!</h1>
    <h4>Aquí se muestra el contenido web visible solo para el usuario.</h4>
</article>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
<?php
}//si no hay sesión
else{
    //se redirecciona
    header ('location: ./');

    <?php
$linea1="SELECT * FROM visitantes ";
$consulta=$linea1;
//echo $consulta;
if ( ! $link=mysqli_connect('localhost','root','','System'))
{
echo "<a href=index.html>Error al conectar</a>";
exit ;
}
if ( ! mysqli_select_db($link,'System'))
{
echo "<a href=index.html>Error al seleccionar BDD</a>";
exit;
}
if ( ! $result=mysqli_query($link,$consulta))
{
echo "<a href=index.html>Error en la consulta</a>";
exit;
}
echo "<h2>Seleccione empresa/s a dar de baja</h2>";
echo "<CENTER>";
echo "<FORM ACTION=baja2.php METHOD=POST>";
echo "<TABLE BORDER=1>";

{
$id=mysqli_result($result,$i,"id");
$nombre=mysqli_result($result,$i,"nombre");
//Programación en PHP a través de ejemplos 29
echo "<TR><TD><INPUT type='checkbox'
name='borrar[$id]'></TD><TD>$nombre</TD></TR>";
}
echo "</TABLE>";
echo "<INPUT type='submit' value='Borrar'>";
echo "</FORM>";
echo "</CENTER>";
mysql_close($link);
?>
}
?>
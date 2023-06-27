<?php
session_start();
//si hay una sesión
if (isset($_SESSION['name'])){
    //se muestra el contenido de la página web
?>
<?php 

  $conexion=mysqli_connect("SQL:3306",'root','isaias','system') or die ('Error al conectar con la base de datos');

 ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8"/>
    <title>Consultas.php</title>
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
    <link rel="stylesheet" type="text/css" href="css/tabla.css">
    <script src="https://kit.fontawesome.com/712575d4a5.js"></script>
    <style>
        body {
            background: #fff url(css/images/p.jpg) no-repeat center top;

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
            background: rgba(0, 0, 0, 0.4);
        }

        footer ul li {
            list-style: none;

        }

        h1 {
            font-weight: 300;
            margin: 0;
            padding: 15px 0 5px 0;
            font-family: Cambria, Georgia, serif;
            font-style: italic;
            text-shadow: 0 1px 1px rgba(255, 255, 255, 0.6);
            text-align: center;
        }

        #img1 {
            height: 90%;
            width: 100%;
            margin-top: -245pt;

        }

        .todo {

        }

        #cabecera {
            opacity: 1;
            text-align: center;

        }

        #contenido {
            min-height: 401px;
            margin-top: 20pt;
            top: 10pt;

        }

        .buscar {
            position: absolute;
            padding: 5px;
            margin-top: -34pt;
            margin-left: 123pt;
        }

        .buscar input {
            width: 0;
            height: 35px;
            padding: 0 15px;
            font-size: 18px;
            color: #222;
            outline: none;
            border: 1px solid silver;
            border-radius: 30px;
            transition: all 0.6s ease;
        }

        .btn {
            width: 45px;
            height: 45px;
            line-height: 48px;
            top: 0;
            right: 0;
            position: absolute;
            background: #246355;
            text-align: center;
            color: white;
            font-size: 18px;
            border-radius: 50%;
            cursor: pointer;
        }

        .buscar:hover input {
            width: 240px;
        }

        .buscar input:focus {
            width: 240px;
        }


    </style>

</head>
<body>
<div class="container">
    <div class="codrops-top"></div>


    <header>
        <h4><?php print $_SESSION['name'];?></h4>

        <h1 style="color:white;">Tablas de Registros</h1>
        <nav class="isa"><a href="home_admin.php">Home</a> <a href="visitantes.php">Registro de Visitantes</a> <a
                href="libro.php">Registro de Libros</a> <a href="prestaciones.php">Prestaciones</a> <a
                href="consultas.php">Consultas</a>
        </nav>

    </header>

    <section>
        <br>
        <br>
        <h1 style="color:white;">Visitantes</h1>
        <div class="todo">

            <div id="cabecera">
                <img src="imagenes/swirl.png" width="88" id="img1">
            </div>
            <div id="contenido">
                <form class="buscar">
                    <input type="text" name="busqueda" placeholder="busqueda">
                    <!--<input type="submit" name="enviar" value="Buscar">-->
                    <div class="btn">
                        <i class="fas fa-search icon"></i>
                    </div>
                </form>
                <?php
  if(isset($_GET['busqueda'])){
  $busqueda = $_GET['busqueda'];
  $query = "SELECT * from visitantes WHERE Nombre LIKE '%$busqueda%' OR Apellido LIKE '%$busqueda%' OR Ciudad LIKE '%$busqueda%' OR Estado LIKE '%$busqueda%'";
  $consulta = mysqli_query($conexion,$query);
  ?>
                <table class="tabla" style="margin: auto; width: 950px; border-spacing:  0px; color:white;">
                    <thead>
                    <tr>
                        <th>Id_visitante</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>E_mail</th>
                        <th>Ciudad</th>
                        <th>Estado</th>
                        <th>Telefono</th>
                        <th colspan="2" style="text-align:center;">Operaciones</th>
                        <th></th>
                        <th></th>
                    </tr>
                    </thead>
                    <?php
    $sql="SELECT * from visitantes";
    $result=mysqli_query($conexion,$sql);
    //else{
    while($mostrar=mysqlI_fetch_array($result)){
    while($mostrar=mysqlI_fetch_array($consulta)) {
     ?>

                    <tr>
                        <td><?php echo $mostrar['Id_visitante'] ?></td>
                        <td><?php echo $mostrar['Nombre'] ?></td>
                        <td><?php echo $mostrar['Apellido'] ?></td>
                        <td><?php echo $mostrar['E_mail'] ?></td>
                        <td><?php echo $mostrar['Ciudad'] ?></td>
                        <td><?php echo $mostrar['Estado'] ?></td>
                        <td><?php echo $mostrar['Telefono'] ?></td>
                        <td><?php echo "  <a href='modificar.php?Id_visitante=".$mostrar['Id_visitante']."'>
                            <button type='button' class='boton1'>Modificar</button>
                            </a> </td>
                        ";?>
                        <td><?php echo " <a href='eliminar.php?Id_visitante=".$mostrar['Id_visitante']."''>
                            <button type='button' class='boton2'>Eliminar</button>
                            </a> </td>
                        ";?>
                    </tr>
                    <?php
  }
  }
  }else{
   ?>
                </table>
                <table class="tabla" style="margin: auto; width: 950px; border-spacing:  0px; color:white;">
                    <thead>
                    <tr>
                        <th>Id_visitante</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>E_mail</th>
                        <th>Ciudad</th>
                        <th>Estado</th>
                        <th>Telefono</th>
                        <th colspan="2" style="text-align:center;">Operaciones</th>
                        <th></th>
                        <th></th>
                    </tr>
                    </thead>
                    <?php
    $sql="SELECT * from visitantes";
    $result=mysqli_query($conexion,$sql);
    while($mostrar=mysqlI_fetch_array($result)){
     ?>

                    <tr>
                        <td><?php echo $mostrar['Id_visitante'] ?></td>
                        <td><?php echo $mostrar['Nombre'] ?></td>
                        <td><?php echo $mostrar['Apellido'] ?></td>
                        <td><?php echo $mostrar['E_mail'] ?></td>
                        <td><?php echo $mostrar['Ciudad'] ?></td>
                        <td><?php echo $mostrar['Estado'] ?></td>
                        <td><?php echo $mostrar['Telefono'] ?></td>
                        <td><?php echo "  <a href='modificar.php?Id_visitante=".$mostrar['Id_visitante']."'>
                            <button type='button' class='boton1'>Modificar</button>
                            </a> </td>
                        ";?>
                        <td><?php echo " <a href='eliminar.php?Id_visitante=".$mostrar['Id_visitante']."''>
                            <button type='button' class='boton2'>Eliminar</button>
                            </a> </td>
                        ";?>
                    </tr>
                    <?php
  }
  }
   ?>
                </table>
                <br>
                <h1 style="color:white;">Libros</h1>
                <form class="buscar">
                    <input type="text" name="search" placeholder="busqueda">
                    <!--<input type="submit" name="submit" value="Buscar">-->
                    <div class="btn">
                        <i class="fas fa-search icon"></i>
                    </div>
                </form>
                <?php
   if(isset($_GET['search'])){
   $busqueda = $_GET['search'];
   $query = "SELECT * from libros WHERE Codigo_libro LIKE '%$busqueda%' OR Titulo LIKE '%$busqueda%' OR Autor LIKE '%$busqueda%' OR Editorial LIKE '%$busqueda%' OR Genero LIKE '%$busqueda%'";
   $consulta = mysqli_query($conexion,$query);
   ?>
                <table class="tabla" style="margin: auto; width: 950px;  border-spacing: 10px 5px; color:white;">
                    <tr>
                        <thead>
                        <th>Id_libro</th>
                        <th>Codigo_libro</th>
                        <th>Titulo</th>
                        <th>Autor</th>
                        <th>Editorial</th>
                        <th>Genero</th>
                        <th>Numero_paginas</th>
                        <th>Sinopsis</th>
                        <th colspan="2" style="text-align:center;">Operaciones</th>
                        </tr>
                        </thead>

                        <?php
    $sql="SELECT * from libros";
    $result=mysqli_query($conexion,$sql);
    //else{
    while($mostrar=mysqlI_fetch_array($result)){
    while($mostrar=mysqlI_fetch_array($consulta)) {
     ?>

                    <tr>
                        <td><?php echo $mostrar['id_libro'] ?></td>
                        <td><?php echo $mostrar['Codigo_libro'] ?></td>
                        <td><?php echo $mostrar['Titulo'] ?></td>
                        <td><?php echo $mostrar['Autor'] ?></td>
                        <td><?php echo $mostrar['Editorial'] ?></td>
                        <td><?php echo $mostrar['Genero'] ?></td>
                        <td><?php echo $mostrar['Numero_paginas'] ?></td>
                        <td><?php echo $mostrar['Sinopsis'] ?></td>
                        <td><?php echo "  <a href='modificar_libros.php?id_libro=".$mostrar['id_libro']."'>
                            <button type='button' class='boton1'>Modificar</button>
                            </a> </td>
                        ";?>
                        <td><?php echo " <a href='eliminar1.php?id_libro=".$mostrar['id_libro']."''>
                            <button type='button' class='boton2'>Eliminar</button>
                            </a> </td>
                        ";?>
                    </tr>
                    <?php
  }
  }
  }else{
   ?>
                </table>
                <table class="tabla" style="margin: auto; width: 950px;  border-spacing: 10px 5px; color:white;">
                    <tr>
                        <thead>
                        <th>Id_libro</th>
                        <th>Codigo_libro</th>
                        <th>Titulo</th>
                        <th>Autor</th>
                        <th>Editorial</th>
                        <th>Genero</th>
                        <th>Numero_paginas</th>
                        <th>Sinopsis</th>
                        <th colspan="2" style="text-align:center;">Operaciones</th>
                        </tr>
                        </thead>

                        <?php
    $sql="SELECT * from libros";
    $result=mysqli_query($conexion,$sql);
    //else{
    while($mostrar=mysqlI_fetch_array($result)){
     ?>

                    <tr>
                        <td><?php echo $mostrar['id_libro'] ?></td>
                        <td><?php echo $mostrar['Codigo_libro'] ?></td>
                        <td><?php echo $mostrar['Titulo'] ?></td>
                        <td><?php echo $mostrar['Autor'] ?></td>
                        <td><?php echo $mostrar['Editorial'] ?></td>
                        <td><?php echo $mostrar['Genero'] ?></td>
                        <td><?php echo $mostrar['Numero_paginas'] ?></td>
                        <td><?php echo $mostrar['Sinopsis'] ?></td>
                        <td><?php echo "  <a href='modificar_libros.php?id_libro=".$mostrar['id_libro']."'>
                            <button type='button' class='boton1'>Modificar</button>
                            </a> </td>
                        ";?>
                        <td><?php echo " <a href='eliminar1.php?id_libro=".$mostrar['id_libro']."''>
                            <button type='button' class='boton2'>Eliminar</button>
                            </a> </td>
                        ";?>
                    </tr>
                    <?php
  }
  }
   ?>
                </table>

                <br>
                <h1 style="color:white;">Prestaciones</h1>
                <form class="buscar">
                    <input type="text" name="searching" placeholder="busqueda">
                    <!--<input type="submit" name="submit" value="Buscar">-->
                    <div class="btn">
                        <i class="fas fa-search icon"></i>
                    </div>
                </form>
                <?php
   if(isset($_GET['searching'])){
   $busqueda = $_GET['searching'];
   $query = "SELECT * from prestaciones WHERE Id_visitante LIKE '%$busqueda%' OR Material LIKE '%$busqueda%' OR Fecha LIKE '%$busqueda%'";
   $consulta = mysqli_query($conexion,$query);
   ?>
                <table class="tabla" style="margin: auto; width: 950px;  border-spacing: 10px 5px; color:white;">
                    <thead>
                    <tr>
                        <th>Id_prestacion</th>
                        <th>Id_visitante</th>
                        <th>Material</th>
                        <th>Fecha</th>
                        <th>Observaciones</th>
                        <th>Cargos</th>
                        <th colspan="2" style="text-align:center;">Operaciones</th>
                    </tr>
                    </thead>
                    <?php
       $sql="SELECT * from prestaciones";
       $result=mysqli_query($conexion,$sql);
       //else{
       while($mostrar=mysqlI_fetch_array($result)){
       while($mostrar=mysqlI_fetch_array($consulta)) {
        ?>

                    <tr>
                        <td><?php echo $mostrar['Id_prestacion'] ?></td>
                        <td><?php echo $mostrar['Id_visitante'] ?></td>
                        <td><?php echo $mostrar['Material'] ?></td>
                        <td><?php echo $mostrar['Fecha'] ?></td>
                        <td><?php echo $mostrar['Observaciones'] ?></td>
                        <td><?php echo $mostrar['Cargos'] ?></td>
                        <td><?php echo "  <a href='modificar_prestaciones.php?Id_prestacion=".$mostrar['Id_prestacion']."'>
                            <button type='button' class='boton1'>Modificar</button>
                            </a> </td>
                        ";?>
                        <td><?php echo " <a href='eliminar2.php?Id_prestacion=".$mostrar['Id_prestacion']."''>
                            <button type='button' class='boton2'>Eliminar</button>
                            </a> </td>
                        ";?>
                    </tr>
                    <?php
    }
    }
    }else{
     ?>
                </table>


                <table class="tabla" style="margin: auto; width: 950px;  border-spacing: 10px 5px; color:white;">
                    <thead>
                    <tr>
                        <th>Id_prestacion</th>
                        <th>Id_visitante</th>
                        <th>Material</th>
                        <th>Fecha</th>
                        <th>Observaciones</th>
                        <th>Cargos</th>
                        <th colspan="2" style="text-align:center;">Operaciones</th>
                    </tr>
                    </thead>
                    <?php
       $sql="SELECT * from prestaciones";
       $result=mysqli_query($conexion,$sql);
       //else{
       while($mostrar=mysqlI_fetch_array($result)){
        ?>

                    <tr>
                        <td><?php echo $mostrar['Id_prestacion'] ?></td>
                        <td><?php echo $mostrar['Id_visitante'] ?></td>
                        <td><?php echo $mostrar['Material'] ?></td>
                        <td><?php echo $mostrar['Fecha'] ?></td>
                        <td><?php echo $mostrar['Observaciones'] ?></td>
                        <td><?php echo $mostrar['Cargos'] ?></td>
                        <td><?php echo "  <a href='modificar_prestaciones.php?Id_prestacion=".$mostrar['Id_prestacion']."'>
                            <button type='button' class='boton1'>Modificar</button>
                            </a> </td>
                        ";?>
                        <td><?php echo " <a href='eliminar2.php?Id_prestacion=".$mostrar['Id_prestacion']."''>
                            <button type='button' class='boton2'>Eliminar</button>
                            </a> </td>
                        ";?>
                    </tr>
                    <?php
    }
    }
     ?>
                </table>


            </div>
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

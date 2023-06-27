<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Inicio</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
        body {
            background: #7f9b4e url(imagenes/biblioteca1.jpg) no-repeat center top;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            background-size: cover;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand"
               href="http://www.soymexiquense.com/galeria/jocotitlan/varias/casa-cultura-jocotitlan-2-1736">Sistema de
                Información de Registros (SIR)</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#" data-toggle="modal" data-target=".bs-example-modal-sm1">Iniciar sesión</a></li>
                <!--<li><a href="#" data-toggle="modal" data-target=".bs-example-modal-sm2">User</a></li>-->
                <!--Para registrar usuarios y administradores "no se modifica nada" (Borrar comentarios para funcionar) -->
                 <!--<li><a href="#" data-toggle="modal" data-target=".bs-example-modal-sm-registrar">Registrate U</a></li> -->
                <li><a href="#" data-toggle="modal" data-target=".bs-example-modal-sm-registrar1">Registrate</a></li>

        </div>
</nav>
<div class="modal fade bs-example-modal-sm1" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Log in</h2>
            </div>
            <div class="modal-body">
                <form action="archivo_destino_admin.php" method="post" enctype="application/x-www-form-urlencoded">
                    <div class="form-group">
                        <label for="control1_nombre">Usuario</label>
                        <input type="text" name="datos_introducidos_usuario" class="form-control" id="control1_nombre"
                               placeholder="Username" required>
                    </div>
                    <div class="form-group">
                        <label for="control1_contraseña">Contraseña</label>
                        <input type="password" name="datos_introducidos_contraseña" class="form-control"
                               id="control1_contraseña" placeholder="Password" required>
                    </div>
                    <button type="submit" class="btn btn-success btn-block">Entrar</button>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade bs-example-modal-sm-registrar1" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Sign up</h2>
            </div>
            <div class="modal-body">
                <form action="archivo_registrar_admin.php" method="post" enctype="application/x-www-form-urlencoded">
                    <div class="form-group">
                        <label for="control2_nombre">Usuario</label>
                        <input type="text" name="datos_registrar_usuario" class="form-control" id="control2_nombre"
                               placeholder="Username" required>
                    </div>
                    <div class="form-group">
                        <label for="control2_contraseña">Contraseña</label>
                        <input type="password" name="datos_registrar_contraseña" class="form-control"
                               id="control2_contraseña" placeholder="Password" required>
                    </div>
                    <button type="submit" class="btn btn-success btn-block">Registrar</button>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade bs-example-modal-sm2" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h2>User</h2>
            </div>
            <div class="modal-body">
                <form action="archivo_destino_user.php" method="post" enctype="application/x-www-form-urlencoded">
                    <div class="form-group">
                        <label for="control1_nombre">Usuario</label>
                        <input type="text" name="datos_introducidos_usuario" class="form-control" id="control1_nombre"
                               placeholder="Username" required>
                    </div>
                    <div class="form-group">
                        <label for="control1_contraseña">Contraseña</label>
                        <input type="password" name="datos_introducidos_contraseña" class="form-control"
                               id="control1_contraseña" placeholder="Password" required>
                    </div>
                    <button type="submit" class="btn btn-success btn-block">Entrar</button>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade bs-example-modal-sm-registrar" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Regístrate U</h2>
            </div>
            <div class="modal-body">
                <form action="archivo_registrar_user.php" method="post" enctype="application/x-www-form-urlencoded">
                    <div class="form-group">
                        <label for="control2_nombre">Usuario</label>
                        <input type="text" name="datos_registrar_usuario" class="form-control" id="control2_nombre"
                               placeholder="Username" required>
                    </div>
                    <div class="form-group">
                        <label for="control2_contraseña">Contraseña</label>
                        <input type="password" name="datos_registrar_contraseña" class="form-control"
                               id="control2_contraseña" placeholder="Password" required>
                    </div>
                    <button type="submit" class="btn btn-success btn-block">Registrar</button>
                </form>
            </div>
        </div>
    </div>
</div>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>

<!--usuario........localhost
    administrador.....localhost-->
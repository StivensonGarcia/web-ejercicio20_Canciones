<?php
session_start();
$loggedIn = false;

// Si el usuario está logueado, cambiar el valor de $loggedIn a true
if (isset($_SESSION['cc'])) {
    $loggedIn = true;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestor para Agregar Canciones</title>
    <link rel="stylesheet" href="../css/styleindex.css">
</head>
</head>
    <body>
    <header> 
            <a>APLICACION :: FORMULARIO DE CANCIONES</a>
            </header>
    <div class="container">
            <?php if ($loggedIn): ?>
            <!-- Mostrar los enlaces a los archivos de la carpeta canciones solo si el usuario ha iniciado sesión -->
            <h1>BIENVENIDO AL MENU DE OPCIONES DEL FORMULARIO DE CANCIONES</h1>
            <center>
            <ul>
            <li><a href="canciones/agregar.php">Ingrese Aqui para Agregar canciones</a></li>
                <li><a href="canciones/editar.php">Ingrese Aqui para Editar canciones</a></li>
                <li><a href="canciones/consultar.php">Ingrese Aqui para Consultar canciones</a></li>
                <li><a href="canciones/eliminar.php">Ingrese Aqui para Eliminar canciones</a></li>
                <li><a href="canciones/listar.php">Listado de canciones creadas</a></li>
                <li><a href="usuarios/listar.php">Listado de Usuarios</a></li>
                <p><a href="usuarios/cerrarsesion.php">Cerrar sesión</a></p>

            </ul>
            </center>
        <?php else: ?>
            <!-- Mostrar los enlaces a los archivos de la carpeta usuarios si el usuario no ha iniciado sesión -->
           <center> <h2>BIENVENIDO A ESTE FORMULARIO DE CANCIONES</h2> </center>
          <center>
            <ul>
            <h2>Puedes acceder Logueandote</h2>

            <a href="usuarios/login.php" class="button">Loguearse</a>
         
            </ul>
            </center>
            <?php endif; ?>
            </div>

        </body>
    </html>
<body>
</body>
</html>



                 
            
            
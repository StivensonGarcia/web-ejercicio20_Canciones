<!DOCTYPE html>
<html>
<head>
	<title>Listado de canciones</title>
    <link rel="stylesheet" href="../../css/stylelistarcancion.css">
</head>
<body>
    <center>
    <h1>Listado de canciones por usuario</h1>
<form action="" method= "POST">

<?php
// Hacer la conexión a la base de datos
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'music';

$conexion = mysqli_connect($host, $user, $password, $database);

// Obtener los datos de las canciones
$query = "SELECT * FROM canciones";
$resultado = mysqli_query($conexion, $query);

// Crear la tabla HTML para mostrar los datos
echo '<table>';
echo '<tr><th>ID</th><th>Nombre</th><th>Ritmo</th><th>Duración</th><th>Album</th><th>Posición en album</th><th>Banda</th><th>Intérprete</th><th>Autor</th><th>Fecha de lanzamiento</th><th>Cédula usuario</th></tr>';

while ($fila = mysqli_fetch_assoc($resultado)) {
    echo '<tr>';
    echo '<td>'.$fila['id'].'</td>';
    echo '<td>'.$fila['nombre'].'</td>';
    echo '<td>'.$fila['ritmo'].'</td>';
    echo '<td>'.$fila['duracion'].'</td>';
    echo '<td>'.$fila['album'].'</td>';
    echo '<td>'.$fila['posicionenalbum'].'</td>';
    echo '<td>'.$fila['banda'].'</td>';
    echo '<td>'.$fila['interprete'].'</td>';
    echo '<td>'.$fila['autor'].'</td>';
    echo '<td>'.$fila['fechalanzamiento'].'</td>';
    echo '<td>'.$fila['usuariocc'].'</td>';
    echo '</tr>';
}

echo '</table>';

// Cerrar la conexión a la base de datos
mysqli_close($conexion);
?>
</form>
</center>
</body>
<form action="../index.php"><a href="../index.php"><button>Presiona aqui y regresa al menu de opciones</button></a></form>
</html>
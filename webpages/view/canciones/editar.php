
<?php
// Conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "music";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar si la conexión a la base de datos es exitosa
if ($conn->connect_error) {
  die("Conexión fallida: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Obtener los valores del formulario de edición de contrato
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $ritmo = $_POST['ritmo'];
    $duracion = $_POST['duracion'];
    $album = $_POST['album'];
    $posicionenalbum = $_POST['posicionenalbum'];
    $banda = $_POST['banda'];
    $interprete = $_POST['interprete'];
    $autor = $_POST['autor'];
    $fechalanzamiento = $_POST['fechalanzamiento'];
     $usuariocc = $_POST['usuariocc'];

  // Verificar si el valor de "usuariocc" es una llave foránea válida
  $sql_check = "SELECT cc FROM Usuarios WHERE cc = $usuariocc";
  $result = $conn->query($sql_check);

  if ($result->num_rows > 0) {
    // Actualizar los valores en la tabla "Canciones"
    $sql = "UPDATE canciones SET nombre='$nombre', ritmo='$ritmo', duracion='$duracion', album='$album', posicionenalbum='$posicionenalbum', banda='$banda', interprete='$interprete', autor='$autor', fechalanzamiento='$fechalanzamiento', usuariocc='$usuariocc' WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
    echo "La canción ha sido actualizada exitosamente.";
    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
   } else {
  echo "Error: El usuario con CC $usuariocc no existe.";
}
}

// Cerrar la conexión a la base de datos
$conn->close();

?> 

<!DOCTYPE html>
<html>
<head>
	<title>Editar canción</title>
    <link rel="stylesheet" href="../../css/styleeditarcancion.css">
</head>
<body>
	<h1>Editar canción</h1>
	<form method="POST" action="editar.php">
        <h2>Ingrese el numero del id de su cancion a Actualizar</h2>
        <label>ID:</label>
        <center>
		<input type="number" name="id" value="ID de la canción a editar"  placeholder="INGRESE NUMERO ID DE LA CANCION">
        </center>
        <br>
		<label>Nombre:</label>
        <center>
		<input type="text" name="nombre" required placeholder="INGRESE NOMBRE DE LA CANCION">
        </center>
		<br>
		<label>Ritmo:</label>
        <center>
		<input type="text" name="ritmo" required placeholder="INGRESE RITMO DE LA CANCION">
        </center>
		<br>
		<label>Duración:</label>
        <center>
		<input type="text" name="duracion" required placeholder="INGRESE DURACION DE LACANCION">
        </center>
		<br>
		<label>Álbum:</label>
        <center>
		<input type="text" name="album" required placeholder="INGRESE ALBUM DE LA CANCION">
        </center>
		<br>
		<label>Posición en el álbum:</label>
        <center>
		<input type="text" name="posicionenalbum" required placeholder="INGRESE POSICION DEL ALBUM DE LA CANCION">
        </center>
		<br>
		<label>Banda:</label>
        <center>
		<input type="text" name="banda" required placeholder="INGRESE NOMBRE DE BANDA DE LA CANCION">
        </center>
		<br>
		<label>Intérprete:</label>
        <center>
		<input type="text" name="interprete" required placeholder="INGRESE NOMBRE DE INTERPRETE DE LA CANCION">
        </center>
		<br>
		<label>Autor:</label>
        <center>
		<input type="text" name="autor" required placeholder="INGRESE NOMBRE DE AUTOR DE LA CANCION">
        </center>
		<br>
		<label>Fecha de lanzamiento:</label>
        <center>
		<input type="date" name="fechalanzamiento" required placeholder="INGRESE FECHA DE LANZAMIENTO DE CANCION">
        </center>
		<br>
		<label>Usuario de registro:</label>
        <center>
		<input type="text" name="usuariocc" required placeholder="INGRESE CEDULA DE USUARIO CREADO ">
        </center>
		<br>
        <center>
		<input type="submit" value="Actualizar canción">
</center>
	</form>
    <center><form action="../index.php"><a href="../index.php"><button>Presiona aqui y regresa al menu de opciones</button></a></center>
</body>
</html>
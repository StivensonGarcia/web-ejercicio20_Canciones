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
  // Obtener los valores del formulario de registro de contrato
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
    // Insertar los valores en la tabla "Canciones"
    $sql = "INSERT INTO canciones (id, nombre, ritmo, duracion, album, posicionenalbum, banda, interprete, autor, fechalanzamiento, usuariocc) 
            VALUES ('$id','$nombre', '$ritmo', '$duracion', '$album', '$posicionenalbum', '$banda', '$interprete', '$autor', '$fechalanzamiento', '$usuariocc')";

if ($conn->query($sql) === TRUE) {
    echo "La cancion ha sido registrada exitosamente.";
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

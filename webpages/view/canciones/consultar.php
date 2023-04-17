<!DOCTYPE html>
<html>
<head>
	<title>Búsqueda de canciones por usuario</title>
    <link rel="stylesheet" href="../../css/styleconsultar.css">
</head>
<body>
	<h1>Consulta de canciones por usuario</h1>
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		<label for="usuariocc">Ingrese el número de Cedula del usuario a Consultar:</label>
		<input type="number" name="usuariocc" required>
		<button type="submit">Buscar</button>
	</form>
  <form action="../index.php"><a href="../index.php"><button>Presiona aqui y regresa al menu de opciones</button></a>
	<br>
<center>
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
  // Obtener el valor del formulario de búsqueda
  $usuariocc = $_POST['usuariocc'];

  // Verificar si el valor de "usuariocc" es una llave foránea válida
  $sql_check = "SELECT cc FROM Usuarios WHERE cc = $usuariocc";
  $result_check = $conn->query($sql_check);

  if ($result_check->num_rows > 0) {
    // Buscar las canciones en la tabla "Canciones" que correspondan al usuario con la llave foránea "usuariocc"
    $sql = "SELECT * FROM canciones WHERE usuariocc = $usuariocc";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      // Mostrar los resultados de la búsqueda en una tabla
      echo "<table>";
      echo "<tr><th>ID</th><th>Nombre</th><th>Ritmo</th><th>Duración</th><th>Álbum</th><th>Posición en Álbum</th><th>Banda</th><th>Intérprete</th><th>Autor</th><th>Fecha de Lanzamiento</th><th>Usuario CC</th></tr>";

      while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['nombre'] . "</td>";
        echo "<td>" . $row['ritmo'] . "</td>";
        echo "<td>" . $row['duracion'] . "</td>";
        echo "<td>" . $row['album'] . "</td>";
        echo "<td>" . $row['posicionenalbum'] . "</td>";
        echo "<td>" . $row['banda'] . "</td>";
        echo "<td>" . $row['interprete'] . "</td>";
        echo "<td>" . $row['autor'] . "</td>";
        echo "<td>" . $row['fechalanzamiento'] . "</td>";
        echo "<td>" . $row['usuariocc'] . "</td>";
        echo "</tr>";
      }

      echo "</table>";
    } else {
      echo "No se encontraron canciones para el usuario con CC $usuariocc.";
    }
  } else {
    echo "Error: El usuario con CC $usuariocc no existe.";
  }
}

// Cerrar la conexión a la base de datos
$conn->close();
?>
</center>

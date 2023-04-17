
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
          // Obtener el valor del id a eliminar
          $id = $_POST['id'];

          // Eliminar la canción con el id especificado
          $sql = "DELETE FROM canciones WHERE id='$id'";

          if ($conn->query($sql) === TRUE) {
              echo "<p>La canción ha sido eliminada exitosamente.</p>";
          } else {
              echo "<p>Error al eliminar la canción: " . $conn->error . "</p>";
          }
      }

      // Cerrar la conexión a la base de datos
      $conn->close();
    ?>
    <!DOCTYPE html>
<html>
  <head>
    <title>Eliminar canción</title>
    <link rel="stylesheet" href="../../css/styleeliminarcancion.css">
  </head>
  <body>
    <h1>Eliminar canción</h1>
    <form method="post" action="">
      <label for="id">Ingrese ID de la canción a eliminar:</label>
      <input type="number" id="id" name="id">
      <br>
      <input type="submit" value="Eliminar">
    </form>
    <br>
    <form action="../index.php"><a href="../index.php"><button>Presiona aqui y regresa al menu de opciones</button></a>
  </body>
</html>


<?php
  // Verificar si se envió el formulario
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $cc = $_POST["cc"];
    $pass = $_POST["pass"];

    // Conectar a la base de datos
    $servidor = "localhost";
    $usuario = "root";
    $contrasena = "";
    $basedatos = "music";
    $conexion = mysqli_connect($servidor, $usuario, $contrasena, $basedatos);

    // Verificar si la conexión fue exitosa
    if (!$conexion) {
      die("La conexión a la base de datos falló: " . mysqli_connect_error());
    }

    // Consultar la base de datos para verificar si los detalles de inicio de sesión son válidos
    $consulta = "SELECT cc FROM Usuarios WHERE cc='$cc' AND pass='$pass'";
    $resultado = mysqli_query($conexion, $consulta);

    // Verificar si se encontró el usuario
    if (mysqli_num_rows($resultado) == 1) {
      // Iniciar sesión y redirigir al usuario a una página de bienvenida
      session_start();
      $_SESSION["cc"] = $cc;
      header("Location: /webpages/view/index.php");
    } else {
      // Mostrar un mensaje de error si los detalles de inicio de sesión no son válidos
      echo "<p>Los detalles de inicio de sesión no son válidos. Por favor intente de nuevo.</p>";
    }

    // Cerrar la conexión a la base de datos
    mysqli_close($conexion);
  }

  ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Iniciar sesión</title>
  <link rel="stylesheet" href="../../css/stylelogin.css">
</head>
<body>

  <h2>Iniciar sesión</h2>
  <form method="post" action="login.php">
    <label for="cc">Cédula</label>
    <input type="text" id="cc" name="cc" required><br>

    <label for="pass">Contraseña</label>
    <input type="password" id="pass" name="pass" required><br>

    <input type="submit" value="Iniciar sesión">
    
  </form>
  <center><form action="registrar.php"><a href="registrar.php"><button>No tienes cuenta? Registrate Aqui!</button></a>
</form></center>
  
</body>
</html>
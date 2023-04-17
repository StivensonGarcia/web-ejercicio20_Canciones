<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DATOS PERSONALES -- REGISTRAR USUARIO</title>
    <link rel="stylesheet" href="../../css/styleregistrar.css">

</head>
<body>
    <center>
       <h2>REGISTRAR USUARIO</H2>
       
       <form action="../../../controlador/usuariocontrolador.php" method= "POST">
          <fieldset style="width: 50%;">
                 <legend>INGRESE SUS DATOS AQUI:</legend>
                  <table border="20">
                       <tr>
                        <th>CEDULA:</th>
                        <td><input type="number" required name="cc" placeholder="INGRESE SU CEDULA"></td>
                       </tr>
                       <tr>
                        <th>PASSWORD:</th>
                        <td><input type="password" name="pass" placeholder="INGRESE SU PASSWORD"></td>
                       </tr>
                       <tr>
                        <th>NOMBRE:</th>
                        <td><input type="text" name="nombre" required placeholder="INGRESE SU NOMBRE"></td>
                       </tr>
                       <tr>
                        <th>APELLIDO:</th>
                        <td><input type="text" name="apellido" required placeholder="INGRESE SU APELLIDO"></td>
                       </tr>
                       <tr>
                        <th>GENERO:</th>
                        <td><input type="text" name="genero" required placeholder="INGRESE SU GENERO"></td>
                       </tr>
                       <tr>
                        <th>EMAIL:</th>
                        <td><input type="email" name="email" required placeholder="INGRESE SU EMAIL"></td>
                       </tr>
                       <tr>
                        <td style="text-aling: center;" colspan="">
                        <input type="reset" value="LIMPIAR"></td>
                       
                        <td><input type="submit" name="accion" value="REGISTRAR"></td>
                       </tr>
                       

                  </table>
          </fieldset>


       </form>
       </form>
  <form action="login.php"><a href="login.php"><button>Presiona aqui y al volver al login ingresa tu nueva cuenta registrada</button></a>
</form>
       <?php
    if(isset($_GET['mensaje'])) {
        echo '<p>'.$_GET['mensaje'].'</p>';
    }
    ?>
    </center>
</body>
</html>
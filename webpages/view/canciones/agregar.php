<?php
require_once '../../../controlador/cancioncontrolador.php'
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DATOS DE CANCIONES -- AGREGAR CANCION</title>
    <link rel="stylesheet" href="../../css/styleregistrar.css">

</head>
<body>
    <center>
       <h2>AGREGAR CANCION</H2>
       
       <form action="" method= "POST">
          <fieldset style="width: 40%;">
                 <legend>DATOS DE LAS CANCIONES:</legend>
                  <table border="20">
                      <tr>
                        <th>ID de Cancion:</th>
                        <td><input type="number"  name="id" required placeholder="INGRESE NUMERO ID DE CANCION"></td>
                       </tr>
                       <tr>
                        <th>NOMBRE:</th>
                        <td><input type="text"  name="nombre" required placeholder="INGRESE NOMBRE DE CANCION"></td>
                       </tr>
                       <tr>
                        <th>RITMO:</th>
                        <td><input type="text" name="ritmo" required placeholder="INGRESE UN RITMO"></td>
                       </tr>
                       <tr>
                        <th>DURACION:</th>
                        <td><input type="text" name="duracion" required placeholder="INGRESE LA DURACION"></td>
                       </tr>
                       <tr>
                        <th>ALBUM:</th>
                        <td><input type="text" name="album" required placeholder="INGRESE NOMBRE DE ALBUM"></td>
                       </tr>
                       <tr>
                        <th>POSICION EN ALBUM:</th>
                        <td><input type="text" name="posicionenalbum" required placeholder="INGRESE NUMERO DE POSICION DE ALBUM"></td>
                       </tr>
                       <tr>
                        <th>BANDA:</th>
                        <td><input type="text" name="banda" required placeholder="INGRESE NOMBRE DE BANDA"></td>
                       </tr>
                       <tr>
                        <th>INTERPRETE:</th>
                        <td><input type="text" name="interprete" required placeholder="INGRESE NOMBRE DE INTERPRETE"></td>
                       </tr>
                       <tr>
                        <th>AUTOR:</th>
                        <td><input type="text" name="autor" required placeholder="INGRESE NOMBRE DE AUTOR"></td>
                       </tr>
                       <tr>
                        <th>FECHA DE LANZAMIENTO:</th>
                        <td><input type="date" name="fechalanzamiento" required placeholder="INGRESE FECHA DE LANZAMIENTO"></td>
                       </tr>
                       <tr>
                        <th>CEDULA USUARIO:</th>
                        <td><input type="number" required name="usuariocc"  placeholder="INGRESE LA CEDULA DEL USUARIO EXISTENTE"></td>
                       </tr>
                       <tr>
                        <td style="text-aling: center;" colspan="">
                        <input type="reset" value="LIMPIAR"></td>
                       
                        <td><input type="submit" name="accion" value="AGREGAR"></td>
                       </tr>
                       

                  </table>
          </fieldset>


       </form>
       <form action="../index.php"><a href="../index.php"><button>Presiona aqui y regresa al menu de opciones</button></a>
</form>
       <?php
    if(isset($_GET['mensaje'])) {
        echo '<p>'.$_GET['mensaje'].'</p>';
    }
    ?>
    
    

    </center>
</body>
</html>
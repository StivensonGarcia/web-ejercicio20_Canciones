<!DOCTYPE html>
<html>
<head>
    <title>Listado de usuarios</title>
    <link rel="stylesheet" href="../../css/stylelistar.css">
</head>
<body>
    <center>
    <h1>Listado de usuarios registrados</h1>
    <table>
        <tr>
            <th>Cédula</th>
            <th>Contraseña</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Género</th>
            <th>Email</th>
        </tr>
        <?php
        require_once '../../../controlador/usuariocontrolador.php';
        $cd = new UsuarioCrud();
        $us = $cd->listar();
        foreach($us as $u) {
            echo '<tr>';
            echo '<td>'.$u->cc.'</td>';
            echo '<td>'.$u->pass.'</td>';
            echo '<td>'.$u->nombre.'</td>';
            echo '<td>'.$u->apellido.'</td>';
            echo '<td>'.$u->genero.'</td>';
            echo '<td>'.$u->email.'</td>';
            echo '</tr>';
        }
        ?>
    </table>
    </center>
    <form action="../index.php"><a href="../index.php"><button>Presiona aqui y regresa al menu de opciones</button></a>
</body>
</html>
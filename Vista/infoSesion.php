<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Informacion Usuario</title>
        <link rel="stylesheet" type="text/css" href="vista/css/estilos.css">
    </head>
    <body>
        <center>
            <table class="content-table">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Usuario</th>
                        <th>Rol</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        echo '<tr>';
                            echo '<td>'.$mostrarDatos["nombre"].'</td>';
                            echo '<td>'.$mostrarDatos["usuario"].'</td>';
                            echo '<td>'.$mostrarDatos["rol"].'</td>';
                            echo '</tr>';
                    ?>
                </tbody>
            </table>
            <form method="POST" action="index.php">
                <button type="submit">Volver</button>
            </form>
        </center>
    </body>
</html>
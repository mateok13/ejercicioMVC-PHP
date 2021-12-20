<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Lista de productos</title>
        <link rel="stylesheet" type="text/css" href="vista/css/estilos.css">
    </head>
    <body>
        <center>
            <table class="content-table">
                <thead>
                    <tr>
                        <th>Código</th>
                        <th>Nombre</th>
                        <th>Precio</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        foreach($listaProductos as $item){
                            echo '<tr>';
                            echo '<td>'.$item["codigo"].'</td>';
                            echo '<td>'.$item["nombre"].'</td>';
                            echo '<td>'.$item["precio"].'</td>';
                            echo '</tr>';
                        }
                    ?>
                </tbody>
            </table>
            <form method="POST">
                <button type="submit" name="cerrar">Cerrar Sesion</button>
                <button type="submit" name="info">Info Sesion</button>
            </form>
        </center>
    </body>
</html>

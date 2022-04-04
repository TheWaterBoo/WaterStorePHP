<!DOCTYPE html>
<html lang="es">
<!--
    Code by TheWaterBoo
    Yep, and 100% certified by one-hundred ghosts (~ 0 u 0 )~
    Copy of the index
-->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/ProyWebPHP/css/styles.css">
    <title>Modificacion de productos</title>
</head>

<body class="phpplantilla">
    <h2>Modificacion de productos</h2>
    <a>Agregua o quita stock de los articulos, cambia su nombre o su precio</a><br>
    <a>No es recomendable cambiar la id de los productos</a><br>
    <a>Edite lo necesario y luego pulse en el boton "Guardar cambios"</a>
    <br>
    <br>
    <a>Tabla de articulos: </a>
    <?php
    $sql = new PDO('mysql:host=localhost;dbname=water_store','root','');
    ?>

    <table class="tablaphp">
        <thead>
            <tr>
                <th>ID</th>
                <th>Articulo</th>
                <th>Precio</th>
                <th>Cantidad</th>
            </tr>
        </thead>

        <tbody>
            <form action="productoC.php" method="post">
            <?php foreach($sql->query('SELECT * FROM producto') as $row){
                ?>
                <tr>
                    <td><input type="text" value="<?php echo $row['id']?>" name="id"></td>
                    <td><input type="text" value="<?php echo $row['articulo']?>" name="article"></td>
                    <td><input type="text" value="<?php echo $row['precio']?>" name="price"></td>
                    <td><input type="text" value="<?php echo $row['cantidad']?>" name="amount"></td>
                </tr>
            <?php
            }
            ?>
            <input type="submit" value="         Guarda los cambios">
            </form>
        </tbody>
    </table>
</body>
</html>
<!DOCTYPE html>
<html lang="es">
<!--
    Code by TheWaterBoo
    Yep, and 100% certified by one-hundred ghosts (~ 0 u 0 )~
    Copy of the index
-->
<head>
    <!--HTML Usado para ver los productos individuales-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/normalize.css" as="style">
    <!--Cool font 8)-->
    <link href="https://fonts.googleapis.com/css2?family=Hubballi&display=swap" rel="stylesheet">
    <!--Icono para la pestaña-->
    <link rel="icon" href="img/GhostIcon.png">
    <title>Water's Store</title>
</head>

<body>

    <header class="header">
        <!--LOGO aqui-->
        <a href="otherindex.php">
            <img class="header__logo" src="img/LogoBeta.png" alt="Logo">
        </a>
        <!--
            //Antiguo "Logo" temporal, reemplazado por un imagen en lugar de texto y una imagen
            <a href="index.html"><img src="GhostIcon.png" width="9%"><h1>Water's Store</h1></a>
        -->
    </header>

    <nav class="barra-nav">
        <!--No es necesario establecer el tamaño de cada imagen, desde estilos con su correspondiente clase esta declarado eso c:-->
        <!--OJO: SE REQUIERE INTERNET PARA CARGAR LOS ICONOS DE CADA APARTADO-->
        <a class="barra-nav__link " href="otherindex.php"><img class="alinearImg" alt="Tienda" src="img/shopping-bag.png"/> Tienda</a>
        <a class="barra-nav__link " href="Soporte.html"><img class="alinearImg" alt="Support" src="img/support.png"/> Soporte</a>
    </nav>

    <main class="Contenido">
        <?php
        $sql = new PDO('mysql:host=localhost;dbname=water_store','root','');
        ?>

        <h1>Camiseta Nuclear Throne - Y.V</h1>
        <div class="camisa">
            <img class="camisa__imagen" src="img/producto3.png" alt="camisa yv">
            <div class="camisa__contenido">
                <p>
                Lorem ipsum dolor sit amet consectetur adipiscing elit sem justo, montes eleifend suscipit bibendum libero aliquet risus mollis quam, felis vehicula congue elementum eros ultrices per neque. Ante mi nibh ultricies ultrices nisl metus sagittis vitae, feugiat euismod mus eros leo a rutrum posuere blandit, nostra accumsan cras proin praesent purus ac. Iaculis et libero consequat ligula himenaeos vitae velit in, sociosqu nulla bibendum eget sed eros blandit tempor, aliquam sociis condimentum fringilla eleifend nisl viverra.
                </p>

                <!--Muchas etiquetas php para un solo if, demasiado confuso pero no es dificil-->
                <?php
                    foreach($sql->query('SELECT * FROM producto WHERE id=4') as $pro4)
                    if($pro4['cantidad']<=0){?>
                        <p><span style="color:#FF0000;text-align:center;">Ya no hay camisas disponibles!!</span></p>
                <?php }else{ ?>
                    <p>Solo quedan <?php echo $pro4['cantidad']?> disponibles</p>
                <?php
                    } ?>
                <form action="vendeproducto.php" method="post" class="formulario">
                    <input type="hidden" name="cod" value="4"> <!--Para identificar el producto y ejecutar su respectivo if-->
                    <input class="formulario__campo" type="number" placeholder="Cantidad" min="1" name="cant">
                    <input class="formulario__submit" type="submit" value="Agregar al carrito">
                </form>
            </div>
        </div>
    </main>

    <footer class="footer">
        <p class="footer__text"><img src="img/GhostIcon.png" alt="boo" class="alinearImg"> TheWaterBoo - Todos los derechos reservados 2022. <img src="img/GhostIcon.png" alt="boo" class="alinearImg"></p>
    </footer>
    
</body>

</html>

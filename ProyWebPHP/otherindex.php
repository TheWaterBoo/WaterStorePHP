<!DOCTYPE html>
<html lang="es">
<!--
    Code by TheWaterBoo
    Yep, and 100% certified by one-hundred ghosts (~ 0 u 0 )~
-->

<head>
    <!--El html index raiz de todo-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/styles.css" as="style">
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
        <a class="barra-nav__link barra-nav__link--active" href="otherindex.php"><img class="alinearImg" alt="Tienda"
                src="img/shopping-bag-selected.png" /> Tienda</a>
        <!-- Pensaba poner tres apartados en la navegacion al inicio, pero se me hizo demasiado y lo descarte
        <a class="barra-nav__link " href="Productos.html"><img class="alinearImg" alt="Store" src="img/shopping-bag.png"/> Productos</a>
        -->
        <a class="barra-nav__link " href="Soporte.html"><img class="alinearImg" alt="Support" src="img/support.png" />
            Soporte</a>
    </nav>

    <main class="contenido">
        <h1>Productos Disponibles</h1>
        <div class="grid">
            <?php
            $sql = new PDO('mysql:host=localhost;dbname=water_store','root','');
            ?>

            <div class="product">
                <!--Aqui comienza otro articulo-->
                <img class="product__img" src="img/producto8.png" alt="camisa kirbo">
                <div class="product__info">
                    <p class="product__name">Camiseta Kirby</p>
                    <p class="product__price">$250 MXN</p>
                    <form action="producto1.php" class="boton__center">
                        <input type="submit" value="    Comprar" class="boton">
                    </form>
                    <!--Para ver cuantos hay disponibles de cada articulo, tomando el dato de la base de datos-->
                    <?php
                        foreach($sql->query('SELECT * FROM producto WHERE id=1') as $pro1)
                    ?>
                    <p class="product__name">Quedan <?php echo $pro1['cantidad']?> disponibles</p>
                </div>
            </div>
            <!--Aqui termina el articulo-->

            <div class="product">
                <!--Aqui comienza otro articulo-->
                <img class="product__img" src="img/producto1.png" alt="camisa rouge">
                <div class="product__info">
                    <p class="product__name">Camiseta Nuclear Throne - Rogue</p>
                    <p class="product__price">$200 MXN</p>
                    <form action="producto2.php" class="boton__center">
                        <input type="submit" value="    Comprar" class="boton">
                    </form>
                    <?php
                        foreach($sql->query('SELECT * FROM producto WHERE id=2') as $pro2)
                    ?>
                    <p class="product__name">Quedan <?php echo $pro2['cantidad']?> disponibles</p>
                </div>
            </div>
            <!--Aqui termina el articulo-->

            <div class="product">
                <!--Aqui comienza otro articulo-->
                <img class="product__img" src="img/producto2.png" alt="camisa GUNGODZ">
                <div class="product__info">
                    <p class="product__name">Camiseta GUN GODZ - God of guns</p>
                    <p class="product__price">$150 MXN</p>
                    <form action="producto3.php" class="boton__center">
                        <input type="submit" value="    Comprar" class="boton">
                    </form>
                    <?php
                        foreach($sql->query('SELECT * FROM producto WHERE id=3') as $pro3)
                    ?>
                    <p class="product__name">Quedan <?php echo $pro3['cantidad']?> disponibles</p>
                </div>
            </div>
            <!--Aqui termina el articulo-->

            <div class="product">
                <!--Aqui comienza otro articulo-->
                <img class="product__img" src="img/producto3.png" alt="camisa YV">
                <div class="product__info">
                    <p class="product__name">Camiseta Nuclear Throne - Y.V</p>
                    <p class="product__price">$120 MXN</p>
                    <form action="producto4.php" class="boton__center">
                        <input type="submit" value="    Comprar" class="boton">
                    </form>
                    <?php
                        foreach($sql->query('SELECT * FROM producto WHERE id=4') as $pro4)
                    ?>
                    <p class="product__name">Quedan <?php echo $pro4['cantidad']?> disponibles</p>
                </div>
            </div>
            <!--Aqui termina el articulo-->

            <div class="product">
                <!--Aqui comienza otro articulo-->
                <img class="product__img" src="img/producto4.png" alt="camisa Melting">
                <div class="product__info">
                    <p class="product__name">Camiseta Nuclear Throne - Melting</p>
                    <p class="product__price">$150 MXN</p>
                    <form action="producto5.php" class="boton__center">
                        <input type="submit" value="    Comprar" class="boton">
                    </form>
                    <?php
                        foreach($sql->query('SELECT * FROM producto WHERE id=5') as $pro5)
                    ?>
                    <p class="product__name">Quedan <?php echo $pro5['cantidad']?> disponibles</p>
                </div>
            </div>
            <!--Aqui termina el articulo-->

            <div class="product">
                <!--Aqui comienza otro articulo-->
                <img class="product__img" src="img/producto5.png" alt="camisa MeatBoy">
                <div class="product__info">
                    <p class="product__name">Camiseta Super Meat Boy - Meat Boy</p>
                    <p class="product__price">$200 MXN</p>
                    <form action="producto6.php" class="boton__center">
                        <input type="submit" value="    Comprar" class="boton">
                    </form>
                    <?php
                        foreach($sql->query('SELECT * FROM producto WHERE id=6') as $pro6)
                    ?>
                    <p class="product__name">Quedan <?php echo $pro6['cantidad']?> disponibles</p>
                </div>
            </div>
            <!--Aqui termina el articulo-->

            <div class="product">
                <!--Aqui comienza otro articulo-->
                <img class="product__img" src="img/producto6.png" alt="camisa programmer1">
                <div class="product__info">
                    <p class="product__name">Camiseta para programador</p>
                    <p class="product__price">$100 MXN</p>
                    <form action="producto7.php" class="boton__center">
                        <input type="submit" value="    Comprar" class="boton">
                    </form>
                    <?php
                        foreach($sql->query('SELECT * FROM producto WHERE id=7') as $pro7)
                    ?>
                    <p class="product__name">Quedan <?php echo $pro7['cantidad']?> disponibles</p>
                </div>
            </div>
            <!--Aqui termina el articulo-->

            <div class="product">
                <!--Aqui comienza otro articulo-->
                <img class="product__img" src="img/producto7.png" alt="camisa pyton">
                <div class="product__info">
                    <p class="product__name">Camiseta Python</p>
                    <p class="product__price">$100 MXN</p>
                    <form action="producto8.php" class="boton__center">
                        <input type="submit" value="    Comprar" class="boton">
                    </form>
                    <?php
                        foreach($sql->query('SELECT * FROM producto WHERE id=8') as $pro8)
                    ?>
                    <p class="product__name">Quedan <?php echo $pro8['cantidad']?> disponibles</p>
                </div>
            </div>
            <!--Aqui termina el articulo-->

            <div class="product">
                <!--Aqui comienza otro articulo-->
                <img class="product__img" src="img/producto9.png" alt="camisa cicle">
                <div class="product__info">
                    <p class="product__name">Camiseta Ciclo de vida</p>
                    <p class="product__price">$100 MXN</p>
                    <form action="producto9.php" class="boton__center">
                        <input type="submit" value="    Comprar" class="boton">
                    </form>
                    <?php
                        foreach($sql->query('SELECT * FROM producto WHERE id=9') as $pro9)
                    ?>
                    <p class="product__name">Quedan <?php echo $pro9['cantidad']?> disponibles</p>
                </div>
            </div>
            <!--Aqui termina el articulo-->

        </div>
    </main>

    <footer class="footer">
        <p class="footer__text"><img src="img/GhostIcon.png" alt="boo" class="alinearImg"> TheWaterBoo - Todos los
            derechos reservados 2022. <img src="img/GhostIcon.png" alt="boo" class="alinearImg"></p>
    </footer>

</body>

</html>
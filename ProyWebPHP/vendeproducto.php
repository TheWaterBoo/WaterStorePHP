<?php
    //Code by TheWaterBoo
    //Yep, and 100% certified by one-hundred ghosts (~ 0 u 0 )~

    $dbhost = "localhost"; //host donde esta la base de datos
    $dbname = "water_store"; //nombre de la bd
    $dbuser = "root"; //user name
    $dbpass = ""; //password de usuario
    
    $conexion = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
    if(!$conexion){
        die ("problemas con la conexion");
    }
    $rol = $_POST['cod'];
    

    if($rol==1){
        $cantidad = $_POST['cant'];

        if($cantidad==""){
            $cantidad=0;
            $var = "Seleccione una cantidad de articulos!!";
            echo "<script>alert('".$var."');</script>";
        }

        //Un metodo demasiado complejo para restarle al articulo los disponibles, vaya que me la complico c:
        foreach($conexion->query('SELECT * FROM producto WHERE id = 1') as $rest)
        $cantares = $rest['cantidad'];
        $total = $cantares-$cantidad;

        if($total<=0){
            $total = 0;
            $var = "Ya no hay camisas para comprar!!";
            echo "<script>alert('".$var."');</script>";
        }

        try{
            //Luego aca actualizo el articulo y le paso el total de la resta a cantidad
            $sql = "UPDATE `producto` SET `cantidad` = $total WHERE `id` = 1;";
    
            mysqli_query($conexion, "SELECT * FROM producto");
            mysqli_query($conexion, $sql);
            mysqli_close($conexion);
    
        }catch(Exception $e){
            echo "Algo ocurrio mal $e";
        }

        include "producto1.php";
    }
    
    if($rol==2){
        $cantidad = $_POST['cant'];

        if($cantidad==""){
            $cantidad=0;
            $var = "Seleccione una cantidad de articulos!!";
            echo "<script>alert('".$var."');</script>";
        }

        //Un metodo demasiado complejo para restarle al articulo los disponibles, vaya que me la complico c:
        foreach($conexion->query('SELECT * FROM producto WHERE id = 2') as $rest)
        $cantares = $rest['cantidad'];
        $total = $cantares-$cantidad;

        if($total<=0){
            $total = 0;
            $var = "Ya no hay camisas para comprar!!";
            echo "<script>alert('".$var."');</script>";
        }

        try{
            //Luego aca actualizo el articulo y le paso el total de la resta a cantidad
            $sql = "UPDATE `producto` SET `cantidad` = $total WHERE `id` = 2;";
    
            mysqli_query($conexion, "SELECT * FROM producto");
            mysqli_query($conexion, $sql);
            mysqli_close($conexion);
    
        }catch(Exception $e){
            echo "Algo ocurrio mal $e";
        }

        include "producto2.php";
    }

    if($rol==3){
        $cantidad = $_POST['cant'];

        if($cantidad==""){
            $cantidad=0;
            $var = "Seleccione una cantidad de articulos!!";
            echo "<script>alert('".$var."');</script>";
        }

        //Un metodo demasiado complejo para restarle al articulo los disponibles, vaya que me la complico c:
        foreach($conexion->query('SELECT * FROM producto WHERE id = 3') as $rest)
        $cantares = $rest['cantidad'];
        $total = $cantares-$cantidad;

        if($total<=0){
            $total = 0;
            $var = "Ya no hay camisas para comprar!!";
            echo "<script>alert('".$var."');</script>";
        }

        try{
            //Luego aca actualizo el articulo y le paso el total de la resta a cantidad
            $sql = "UPDATE `producto` SET `cantidad` = $total WHERE `id` = 3;";
    
            mysqli_query($conexion, "SELECT * FROM producto");
            mysqli_query($conexion, $sql);
            mysqli_close($conexion);
    
        }catch(Exception $e){
            echo "Algo ocurrio mal $e";
        }

        include "producto3.php";
    }

    if($rol==4){
        $cantidad = $_POST['cant'];

        if($cantidad==""){
            $cantidad=0;
            $var = "Seleccione una cantidad de articulos!!";
            echo "<script>alert('".$var."');</script>";
        }

        //Un metodo demasiado complejo para restarle al articulo los disponibles, vaya que me la complico c:
        foreach($conexion->query('SELECT * FROM producto WHERE id = 4') as $rest)
        $cantares = $rest['cantidad'];
        $total = $cantares-$cantidad;

        if($total<=0){
            $total = 0;
            $var = "Ya no hay camisas para comprar!!";
            echo "<script>alert('".$var."');</script>";
        }

        try{
            //Luego aca actualizo el articulo y le paso el total de la resta a cantidad
            $sql = "UPDATE `producto` SET `cantidad` = $total WHERE `id` = 4;";
    
            mysqli_query($conexion, "SELECT * FROM producto");
            mysqli_query($conexion, $sql);
            mysqli_close($conexion);
    
        }catch(Exception $e){
            echo "Algo ocurrio mal $e";
        }

        include "producto4.php";
    }

    if($rol==5){
        $cantidad = $_POST['cant'];

        if($cantidad==""){
            $cantidad=0;
            $var = "Seleccione una cantidad de articulos!!";
            echo "<script>alert('".$var."');</script>";
        }

        //Un metodo demasiado complejo para restarle al articulo los disponibles, vaya que me la complico c:
        foreach($conexion->query('SELECT * FROM producto WHERE id = 5') as $rest)
        $cantares = $rest['cantidad'];
        $total = $cantares-$cantidad;

        if($total<=0){
            $total = 0;
            $var = "Ya no hay camisas para comprar!!";
            echo "<script>alert('".$var."');</script>";
        }

        try{
            //Luego aca actualizo el articulo y le paso el total de la resta a cantidad
            $sql = "UPDATE `producto` SET `cantidad` = $total WHERE `id` = 5;";
    
            mysqli_query($conexion, "SELECT * FROM producto");
            mysqli_query($conexion, $sql);
            mysqli_close($conexion);
    
        }catch(Exception $e){
            echo "Algo ocurrio mal $e";
        }

        include "producto5.php";
    }

    if($rol==6){
        $cantidad = $_POST['cant'];

        if($cantidad==""){
            $cantidad=0;
            $var = "Seleccione una cantidad de articulos!!";
            echo "<script>alert('".$var."');</script>";
        }

        //Un metodo demasiado complejo para restarle al articulo los disponibles, vaya que me la complico c:
        foreach($conexion->query('SELECT * FROM producto WHERE id = 6') as $rest)
        $cantares = $rest['cantidad'];
        $total = $cantares-$cantidad;

        if($total<=0){
            $total = 0;
            $var = "Ya no hay camisas para comprar!!";
            echo "<script>alert('".$var."');</script>";
        }

        try{
            //Luego aca actualizo el articulo y le paso el total de la resta a cantidad
            $sql = "UPDATE `producto` SET `cantidad` = $total WHERE `id` = 6;";
    
            mysqli_query($conexion, "SELECT * FROM producto");
            mysqli_query($conexion, $sql);
            mysqli_close($conexion);
    
        }catch(Exception $e){
            echo "Algo ocurrio mal $e";
        }

        include "producto6.php";
    }

    if($rol==7){
        $cantidad = $_POST['cant'];

        if($cantidad==""){
            $cantidad=0;
            $var = "Seleccione una cantidad de articulos!!";
            echo "<script>alert('".$var."');</script>";
        }

        //Un metodo demasiado complejo para restarle al articulo los disponibles, vaya que me la complico c:
        foreach($conexion->query('SELECT * FROM producto WHERE id = 7') as $rest)
        $cantares = $rest['cantidad'];
        $total = $cantares-$cantidad;

        if($total<=0){
            $total = 0;
            $var = "Ya no hay camisas para comprar!!";
            echo "<script>alert('".$var."');</script>";
        }

        try{
            //Luego aca actualizo el articulo y le paso el total de la resta a cantidad
            $sql = "UPDATE `producto` SET `cantidad` = $total WHERE `id` = 7;";
    
            mysqli_query($conexion, "SELECT * FROM producto");
            mysqli_query($conexion, $sql);
            mysqli_close($conexion);
    
        }catch(Exception $e){
            echo "Algo ocurrio mal $e";
        }

        include "producto7.php";
    }

    if($rol==8){
        $cantidad = $_POST['cant'];

        if($cantidad==""){
            $cantidad=0;
            $var = "Seleccione una cantidad de articulos!!";
            echo "<script>alert('".$var."');</script>";
        }

        //Un metodo demasiado complejo para restarle al articulo los disponibles, vaya que me la complico c:
        foreach($conexion->query('SELECT * FROM producto WHERE id = 8') as $rest)
        $cantares = $rest['cantidad'];
        $total = $cantares-$cantidad;

        if($total<=0){
            $total = 0;
            $var = "Ya no hay camisas para comprar!!";
            echo "<script>alert('".$var."');</script>";
        }

        try{
            //Luego aca actualizo el articulo y le paso el total de la resta a cantidad
            $sql = "UPDATE `producto` SET `cantidad` = $total WHERE `id` = 8;";
    
            mysqli_query($conexion, "SELECT * FROM producto");
            mysqli_query($conexion, $sql);
            mysqli_close($conexion);
    
        }catch(Exception $e){
            echo "Algo ocurrio mal $e";
        }

        include "producto8.php";
    }

    if($rol==9){
        $cantidad = $_POST['cant'];

        if($cantidad==""){
            $cantidad=0;
            $var = "Seleccione una cantidad de articulos!!";
            echo "<script>alert('".$var."');</script>";
        }

        //Un metodo demasiado complejo para restarle al articulo los disponibles, vaya que me la complico c:
        foreach($conexion->query('SELECT * FROM producto WHERE id = 9') as $rest)
        $cantares = $rest['cantidad'];
        $total = $cantares-$cantidad;

        if($total<=0){
            $total = 0;
            $var = "Ya no hay camisas para comprar!!";
            echo "<script>alert('".$var."');</script>";
        }

        try{
            //Luego aca actualizo el articulo y le paso el total de la resta a cantidad
            $sql = "UPDATE `producto` SET `cantidad` = $total WHERE `id` = 9;";
    
            mysqli_query($conexion, "SELECT * FROM producto");
            mysqli_query($conexion, $sql);
            mysqli_close($conexion);
    
        }catch(Exception $e){
            echo "Algo ocurrio mal $e";
        }

        include "producto9.php";
    }
?>
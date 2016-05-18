<?php

    require_once 'conectar.php';
    
    $codigo=$_POST['codigo'];
    $producto=$_POST['producto'];
    $cantidad=$_POST['cantidad'];
    $vunitario=$_POST['vunitario'];
    $valortotal=$_POST['vtotal'];

    $conventas="SELECT codigo FROM ventas WHERE codigo='$codigo';";

    $valortotal = $cantidad * $vunitatio;    

    if($validar=mysql_fetch_array($conventas)) {
        echo "El codigo ya esta registrado, redireccionando<br>";
        echo "<a href='index.html'>Volver</a>";
        } else {
        mysql_query("INSERT INTO ventas(codigo, producto, cantidad, vunitario, vtotal) VALUES ('$codigo','$producto','$cantidad','$vunitario','$valortotal');");
     
    header("location: index.html");
    
            }

?>
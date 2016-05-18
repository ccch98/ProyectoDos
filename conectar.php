<?php

    $conexion=mysql_connect("localhost","root","123");
    mysql_select_db("VentasBD", $conexion) 
        or die ('No se pudo conectar: '.mysql_error());
?>
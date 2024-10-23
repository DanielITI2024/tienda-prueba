<?php
    include "conexion.php";
    $Clave_presentacion=$_POST["Clave_presentacion"];
    $Descripcion_presentacion=$_POST["Descripcion_presentacion"]; 
    $sql="insert into presentacion values ('$Clave_presentacion','$Descripcion_presentacion')";
    $query=$mysqli->query($sql);
    header("location:presentaciones.php");
    ?>
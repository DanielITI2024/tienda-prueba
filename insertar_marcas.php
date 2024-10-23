<?php
    include "conexion.php";
    $Clave_marca=$_POST["Clave_marca"];
    $Descricion_marca=$_POST["Descricion_marca"]; 
    $sql="insert into marcas values ('$Clave_marca','$Descricion_marca')";
    $query=$mysqli->query($sql);
    header("location:marcas.php");
    ?>
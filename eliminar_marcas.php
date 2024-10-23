<?php
    include"conexion.php";
    $Clave_marca=$_GET["Clave_marca"];
    $sql="Delete from marcas where Clave_marca ='$Clave_marca'";
    $query =$mysqli-> query($sql);
    header ("location:marcas.php");
    ?>
    
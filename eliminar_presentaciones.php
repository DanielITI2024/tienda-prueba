<?php
    include"conexion.php";
    $Clave_presentacion=$_GET["Clave_presentacion"];
    $sql="Delete from presentacion where Clave_presentacion ='$Clave_presentacion'";
    $query =$mysqli-> query($sql);
    header ("location:presentaciones.php");
    ?>
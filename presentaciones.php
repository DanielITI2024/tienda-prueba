<?php
include "conexion.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pres</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
<div class="container-fluid">
    <div class ="row">
        <div class="col-sm-12 col-lg-4">
<form action="insertar_presentaciones.php" method="post">
    <div class="form-group">
    <label>Clave</label>
    <input type="number" name="Clave_presentacion" required class="form-control">
    </div>
        <div class="form-group">
    <label>Descripcion</label>
    <input type="text" name="Descripcion_presentacion" required class="form-control">
        </div>
             <div class="form-group">
    <input type="submit" value="Guardar"class="btn btn-warning" required class="form-control">
            </div>

</form>
        </div>
  <div class="col-sm-12 col-lg-6">
        <table class= "table table-striped">
        <tr>
            <th>Clave</th>
            <th>Descripcion</th>
            <th><th>
        </tr>
<?php
$sql="select * from presentacion";
$query= $mysqli-> query($sql);
while ($datos=$query -> fetch_array(MYSQLI_BOTH)){
    echo "<tr>";
        echo "<td>".$datos["Clave_presentacion"]."</td>";
        echo "<td>".$datos["Descripcion_presentacion"]."</td>";
        echo "<td><a href='eliminar_presentaciones.php?Clave_presentacion=".$datos["Clave_presentacion"]."'> eliminar</a>";
   
}
?>
    </div>
    </div>
</div>
</body>
</html>
</table>
<?php
include "conexion.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marcas</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
    <div class="container-fluid">
        <div class ="row">
            <div class="col-sm-12 col-lg-4">
<form action="insertar_marcas.php" method="post">
    <div class="form-group">
<label>Clave</label>
<input type="number" name="Clave_marca" required class="form-control">
    </div>
        <div class="form-group">
<label>Descripcion</label>
<input type="text" name="Descricion_marca" required class="form-control">
        </div>
            <div class="form-group">
<input type="submit" value="Guardar" class="btn btn-warning" required class="form-control">
            </div>
</form>
            </div>
<div class="col-sm-12 col-lg-6">
    <table class= "table table-striped">
        <tr>
            <th>Clave</th>
            <th>Descripcion</th>
            <th></th>
        </tr>
<?php
$sql="select * from marcas";
$query= $mysqli-> query($sql);
while ($datos=$query -> fetch_array(MYSQLI_BOTH)){
    echo "<tr>";
        echo "<td>".$datos["Clave_marca"]."</td>";
        echo "<td>".$datos["Descricion_marca"]."</td>";
        echo "<td><a href='eliminar_marcas.php?Clave_marca=".$datos["Clave_marca"]."'> eliminar</a>";
}
?>
</table>
            </div>
        </div>
    </div>
</body>
</html>
<?php
include "conexion.php";
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
    <div class= "container-fluid">
        <div class="row">
            <div class="col-sm-12 col-lg-4">
<form action="insertar_productos.php" method="post">
<div class="form-group">
    <label>Clave</label>
    <input type="number" name="Codigo_de_barras" required class="form-control">
</div>
    <div class="form-group">
    <label>Descripcion</label>
    <input type="text" name="Descripcion"required class="form-control">
    </div>
        <div class="form-group">
    <label>precio</label>
    <input type="number" name="precio"required class="form-control">
        </div>
         <div class="form-group">
    <label>cantidad</label>
    <input type="number" name="cantidad"required class="form-control">
         </div>
            <div class="form-group">
    <label>Clave presentacion</label>
    <select name="clave_presentacion"required class="form-control">
        <option>Seleccione un valor</option>
        
        <?php
        $sqlpresentacion="Select * from presentacion";
        $query = $mysqli-> query ($sqlpresentacion);
        while ($datospresentaciones = $query->fetch_array(MYSQLI_BOTH)){
            echo "<option value='".$datospresentaciones["Clave_presentacion"]."'>".$datospresentaciones["Descripcion_presentacion"]."</option>";
        }
            ?>
            </div>
                <div class="form-group">
            
    </select>
     <label>Clave marca</label>
    <select name="clave_marca"required class="form-control">
        <option>Seleccione un valor</option>
        
        <?php
        $sqlmarca="Select * from marcas";
        $query = $mysqli-> query ($sqlmarca);
        while ($datosmarcas = $query->fetch_array(MYSQLI_BOTH)){
            echo "<option value='".$datosmarcas["Clave_marca"]."'>".$datosmarcas["Descricion_marca"]."</option>";
        }
            ?>
                </div>
                    <div class="form-group">
    </select>
    <input type="submit" value="Guardar"class="btn btn-warning" required class="form-control">
                    </div>
</form>
            </div>
        <div class="col-sm-12 col-lg-6">
    <table  class="table table-striped">
        <tr>
            <th>Clave</th>
            <th>Descripcion</th>
            <th><th>

        </tr>
<?php
$sql="select * from productos";
$query= $mysqli-> query($sql);
while ($datos=$query -> fetch_array(MYSQLI_BOTH)){
    echo "<tr>";
        echo "<td>".$datos["Codigo_de_barras"]."</td>";
        echo "<td>".$datos["Descripcion"]."</td>";
        
        echo "<td><a href='eliminar_productos.php?Codigo_de_barras=".$datos["Codigo_de_barras"]."'> eliminar</a>";
   
}
?>
</table>
            </div>
    </div>
</div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>
<script>
    function confirmacion(){
        var respuesta = confirm("¿confirma que desea borrar el registro?");
    if(respuesta == true){
        return true;
    }else {
    return false;
    }
    }
</script>
<body>
    <?php
    require 'conexion.php';

    $sql= "SELECT * FROM libreria;";
    $resultado= $conn->query($sql);
    ?>
    <div>
        <h1 class="cabecera" >Mostrar Registros</h1>
    </div>
    <div calss="contenedor">
        <button class="crear"><a href="index.php">Agregar Nuevo Registro</a></button>

        <table>
            <thead>
                <tr>
                    <th  scope="col">Nombre</th>
                    <th  scope="col">Autor</th>
                    <th  scope="col">Precio</th>
                    <th  scope="col">Disponible</th>
                    <th  scope="col">acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($fila = $resultado->fetch_assoc()) {
                    ?>
                    <tr>
                        <td scope="col"><?php echo $fila['nombre']?></td>
                        <td scope="col"><?php echo $fila['autor']?></td>
                        <td scope="col"><?php echo $fila['precio']?></td>
                        <td scope="col"><?php echo $fila['disponible']?></td>

                        <a href="eliminar.php?Id=<?php echo $fila['id']?>" class="btn btn-danger" onclick="return confirmacion()">Eliminar</a>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
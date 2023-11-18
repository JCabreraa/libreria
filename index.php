<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Libreria</title>
</head>
<body>
    <h1>formulario de contacto</h1>
    <form action="validar.php" method="POST">
        <label for="nombre">nombre</label>
        <input type="text" id="nombre" name="nombre" required><br><br>

        <label for="autor">autor</label>
        <input type="text" id="autor" name="autor" required><br><br>

        <label for="precio">precio</label>
        <input type="text" id="precio" name="precio" required><br><br>

        <label for="disponible">disponible</label>
        <input type="text" id="disponible" name="disponible" required><br><br>

        <input type="submit" value="enviar">
        <button><a href="mostrar.php">mostrar datos</a></button>

    </form>
    
</body>
</html>
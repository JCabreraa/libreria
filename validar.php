<?php
include 'conexion.php';

//obtener datos del formulario
$nombre = $_POST["nombre"];
$autor = $_POST["autor"];
$precio = $_POST["precio"];
$disponible = $_POST["disponible"];

//insertar datos en la base de datos 
$sql = "INSERT INTO libreria (nombre, autor , precio, disponible) VALUES ('$nombre', '$autor', '$precio', '$disponible')";

if ($conn->query($sql) === TRUE) {
    header("location: mostrar.php");
}else {
    echo "Error al registar" . $conn->error;
}

$conn->close();

?>
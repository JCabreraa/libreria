<?php
      include 'conexion.php';

    $id = $_REQUEST['Id'];
    $sql = "DELETE FROM libreria WHERE id_libro='$id'";

    $query = mysqli_query($conn,$sql);
    if ($query === TRUE) {
        header("Location:mostar.php");
    }

?>
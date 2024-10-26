<?php
    include "conexion.php";

    $nombre = $_POST["nombreProducto"];
    $cantidad = $_POST["cantidad"];
    $precio = $_POST["precio"];
    $categoria = $_POST["categoria"];

    $sql = "INSERT INTO productos (nombre, cantidad, precio, categoria)
    VALUES ('$nombre',$cantidad,$precio,'$categoria')";

    if ($conn->query($sql) === TRUE) {
         echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();

?>
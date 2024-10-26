<?php
include 'conexion.php';

$id = $_POST['id'];
$nombre = $_POST['nombre'];
$password = $_POST['password'];

$sql = "UPDATE registro SET nombres='$nombre', contrasena='$password' WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
    echo "Registro actualizado correctamente";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
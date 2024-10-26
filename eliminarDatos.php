<?php
    include "conexion.php";
    $id = $_POST["codigo"];
    // sql to delete a record
    $sql = "DELETE FROM productos WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . $conn->error;
    }

$conn->close();
?>
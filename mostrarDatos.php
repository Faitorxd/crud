<?php
    include "conexion.php";

    $sql = "SELECT id, fecha, nombre  , cantidad, precio, categoria  FROM productos";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
        echo "<tr>".
            "<td>".$row["fecha"]."</td>".
            "<td>".$row["nombre"]."</td>".
            "<td>".$row["cantidad"]."</td>".
            "<td>".$row["precio"]."</td>".
            "<td>".$row["categoria"]."</td>".
            "<td>".
                "<button>Actualizar</button>".
                "<button class='btn-delete' data-id=". $row["id"] .">Eliminar</button>".
            "</td>".
            "</tr>"
        ;
      }
    } else {
      echo "0 results";
    }
    $conn->close();
?>
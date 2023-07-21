
<?php
// Establecer la conexión a la base de datos
        $conexion = new mysqli('localhost', 'root', 'Araujo160998.', 'formularios');

        // Verificar la conexión
        if (mysqli_connect_errno()) {
        echo "Error al conectar a la base de datos: " . mysqli_connect_error();
        exit;
        }

        // Consulta para obtener los datos del inventario
        $sql = "SELECT * FROM inventario";
        $resultado = mysqli_query($conexion, $sql);

        // Verificar si la consulta fue exitosa
        if (!$resultado) {
        echo "Error al obtener los datos del inventario: " . mysqli_error($conexion);
        exit;
        }

        // Obtener los datos del inventario en un arreglo asociativo
        $datos_inventario = array();
        while ($fila = mysqli_fetch_assoc($resultado)) {
        $datos_inventario[] = $fila;
        }

        // Cerrar la conexión a la base de datos
        mysqli_close($conexion);

        // Devolver los datos del inventario en formato JSON
        header('Content-Type: application/json');
        echo json_encode($datos_inventario);

?>
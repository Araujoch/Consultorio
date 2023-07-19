<?php
// Controlador
class Controlador
{
    public function mostrarFormulario()
    {
        // Aquí puedes realizar cualquier lógica adicional antes de mostrar el formulario

        // Cargar los datos del usuario desde la base de datos
        $modelo = new Modelo();
        $datosUsuario = $modelo->obtenerDatosUsuario();

        // Pasar los datos del usuario a la vista
        include 'formulario.php';
    }
}

// Modelo
class Modelo
{
    public function obtenerDatosUsuario()
    {
        // Realizar la conexión a la base de datos
        $conexion = new mysqli('localhost', 'root', 'Araujo160998.', 'formularios');

        // Verificar si hay algún error en la conexión
        if ($conexion->connect_error) {
            die('Error de conexión: ' . $conexion->connect_error);
        }

        // Realizar la consulta para obtener los datos del usuario
        $consulta = "SELECT nombre, email, telefono FROM usuarios";
        $resultado = $conexion->query($consulta);

        // Verificar si se obtuvieron resultados
        if ($resultado->num_rows > 0) {
            // Obtener los datos del primer usuario (puedes adaptar esto según tus necesidades)
            $datosUsuario = $resultado->fetch_assoc();
            return $datosUsuario;
        }

        // Cerrar la conexión a la base de datos
        $conexion->close();
    }
}

// Controlador de acciones
if (isset($_POST['accion']) && $_POST['accion'] === 'mostrar_formulario') {
    $controlador = new Controlador();
    $controlador->mostrarFormulario();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Página con formulario</title>
</head>
<body>
    <div>
        
    </div>
    <form method="post" action="index.php">
        <input type="hidden" name="accion" value="mostrar_formulario">
        <input type="submit" value="Mostrar formulario">
    </form>
</body>
</html>


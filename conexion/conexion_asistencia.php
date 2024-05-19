<?php
// Configuración de la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "asistencia";
$puerto = "33065";

// Crear conexión
$conexion = new mysqli($servername, $username, $password, $dbname, $puerto);
$conexion->set_charset("utf8");
// Verificar conexión
if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}
/** 
// Consulta SQL
$sql = "SELECT * FROM matematica";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Salida de datos de cada fila
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Nombre: " . $row["nombre"]. " - Correo: " . $row["correo"]. "<br>";
    }
} else {
    echo "0 resultados";
}

// Cerrar conexión
$conn->close();
**/
?>

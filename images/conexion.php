<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "registro";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
    
    }
   // Obtener los datos del formulario
    $nombre= $_POST["nombre"];
    $apellido= $_POST["apellido"];
    $Email= $_POST["Email"];
    $telefono= $_POST['telefono'];
    $institucion= $_POST['institucion'];
    
// Crear la consulta SQL
    $sql = "INSERT INTO `formulario`(`nombre`, `apellido`, `Email`, `telefono`, `institucion`) VALUES ('$nombre', '$apellido', '$Email', '$telefono', '$institucion')";
    if ($conn->query($sql) === TRUE) {
    echo "Los datos se han insertado correctamente";
} else {
    echo "Error al insertar los datos: " . $conn->error;
}
$conn->close();

?>  

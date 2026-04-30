<?php
echo "<h1>Mi aplicación desplegada en EC2 con CodeDeploy</h1>";
echo "<p>¡Hola mundo desde AWS!</p>";

// Conexión a la base de datos
$servername = "lab-db.coxofei5xgh6.us-east-1.rds.amazonaws.com";
$username = "admin";
$password = "Admin1234";
$dbname = "lab-db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Consulta con filtro ENTREGADO
$sql = "SELECT nombre, estado FROM entregas WHERE estado = 'ENTREGADO'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo $row["nombre"]." - ".$row["estado"]."<br>";
    }
} else {
    echo "No hay resultados";
}

$conn->close();
?>


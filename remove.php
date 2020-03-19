<?php
$servername = "";
$username = "";
$password = "";
$dbname = "";
 
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Blad polaczenia: " . $conn->connect_error);
} 

$ID = $_GET["ID"];

$sql = "DELETE FROM modbusdata WHERE ID = '$ID'";

if ($conn->query($sql) === TRUE) {
    echo "Usunieto wpis";
} else {
    echo "Blad usuniecia wpisu: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
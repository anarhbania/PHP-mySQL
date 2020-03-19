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
$rc100 = $_GET["rc100"];
$rc101 = $_GET["rc101"];
$rc102 = $_GET["rc102"];

$ri100 = $_GET["ri100"];
$ri101 = $_GET["ri101"];
$ri102 = $_GET["ri102"];

$hr100 = $_GET["hr100"];
$hr101 = $_GET["hr101"];
$hr102 = $_GET["hr102"];

$ir100 = $_GET["ir100"];
$ir101 = $_GET["ir101"];
$ir102 = $_GET["ir102"];

$sql = "INSERT INTO modbusdata (ID, rc100, rc101, rc102, ri100, ri101, ri102, hr100, hr101, hr102, ir100, ir101, ir102)
 VALUES ('$ID', '$rc100', '$rc101', '$rc102', '$ri100', '$ri101', '$ri102', '$hr100', '$hr101', '$hr102', '$ir100', '$ir101', '$ir102');"; 

if ($conn->query($sql) === TRUE) {
    echo "Udalo sie dodac wpis";
} else {
    echo "Blad dodania wpisu: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
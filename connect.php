<?php
$servername = "localhost"; // oder Server-IP
$username = "mriewuen_admin";
$password = "Ophelia01!";
$dbname = "mriewuen_dsa";

// Verbindung zur Datenbank herstellen
$conn = new mysqli($servername, $username, $password, $dbname);

// Verbindung überprüfen
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Daten aus der Tabelle "characters" abrufen
$sql = "SELECT * FROM charData";
$result = $conn->query($sql);

$characters = [];

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $characters[] = $row;
    }
}

$conn->close();
?>

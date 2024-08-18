<?php
$servername = "localhost"; // oder Server-IP
$username = "dein_db_benutzer";
$password = "dein_db_passwort";
$dbname = "dsa_characters";

// Verbindung zur Datenbank herstellen
$conn = new mysqli($servername, $username, $password, $dbname);

// Verbindung überprüfen
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Daten aus der Tabelle "characters" abrufen
$sql = "SELECT * FROM characters";
$result = $conn->query($sql);

$characters = [];

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $characters[] = $row;
    }
}

$conn->close();
?>

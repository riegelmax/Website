<?php
include 'connect.php'; // Verbindung zur Datenbank herstellen

$character_ID = $_POST['id'];

// Update the database record
$db->query("UPDATE charData SET " . implode(", ", array_map(function($column) {
    return "$column = '$_POST[$column]'";
}, array_keys($_POST))) . " WHERE character_ID = '$character_ID'");

// Redirect back to the character details page
header("Location: character_details.php?id=$character_ID");
exit;
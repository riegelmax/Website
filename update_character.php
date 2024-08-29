<?php
include 'connect.php'; // Verbindung zur Datenbank herstellen

$character_id = $_POST['id'];

// Update the database record
$db->query("UPDATE characters SET " . implode(", ", array_map(function($column) {
    return "$column = '$_POST[$column]'";
}, array_keys($_POST))) . " WHERE id = '$character_id'");

// Redirect back to the character details page
header("Location: character_details.php?id=$character_id");
exit;
<?php
include 'connect.php'; // Verbindung zur Datenbank herstellen

$character_id = $_GET['id'];

$character = $db->query("SELECT * FROM characters WHERE id = '$character_id'")->fetch_assoc();

?>

<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DSA Charakterdetails</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>DSA Charakterdetails</h1>
    </header>

    <main>
        <div class="charakter-details">
            <h2><?php echo $character['name']; ?></h2>
            <p><strong>Rasse:</strong> <?php echo $character['race']; ?></p>
            <p><strong>Profession:</strong> <?php echo $character['profession']; ?></p>
            <p><strong>AT:</strong> <?php echo $character['at']; ?></p>
            <p><strong>PA:</strong> <?php echo $character['pa']; ?></p>
            <p><strong>Basis-Lebenspunkte:</strong> <?php echo ($character['ko'] + $character['ko'] + $character['kk']) / 2; ?></p>
            <p><strong>Basis-Ausdauer:</strong> <?php echo ($character['ko'] + $character['ko'] + $character['kk']) / 2; ?></p>
            <!-- Add more details here -->
        </div>
    </main>

    <footer>
        <p>&copy; 2024 DSA Charaktere. Alle Rechte vorbehalten.</p>
    </footer>
</body>
</html>
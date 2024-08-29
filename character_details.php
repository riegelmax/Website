<?php
include 'connect.php'; // Verbindung zur Datenbank herstellen

$character_ID = $_GET['id'];

$character = $db->query("SELECT * FROM charData WHERE character_ID = '$character_ID'")->fetch_assoc();

// Get the column names from the database table
$columns = array_keys($character);

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
            <h2><?php echo $character['cName']; ?></h2>
            <form action="update_character.php" method="post">
                <?php foreach ($columns as $column) : ?>
                    <p>
                        <strong><?php echo ucfirst($column); ?>:</strong>
                        <input type="text" name="<?php echo $column; ?>" value="<?php echo $character[$column]; ?>">
                    </p>
                <?php endforeach; ?>
                <input type="hidden" name="id" value="<?php echo $character_ID; ?>">
                <button type="submit">Speichern</button>
            </form>
        </div>
    </main>

    <footer>
        <p>&copy; 2024 DSA Charaktere. Alle Rechte vorbehalten.</p>
    </footer>
</body>
</html>
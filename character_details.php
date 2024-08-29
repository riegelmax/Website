<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

include 'connect.php'; // Verbindung zur Datenbank herstellen

$character_ID = $_GET['id'];

// Use prepared statements to prevent SQL injection
$stmt = $db->prepare("SELECT * FROM charData WHERE character_ID = ?");
$stmt->bind_param("i", $character_ID);
$stmt->execute();
$character = $stmt->get_result()->fetch_assoc();

// Get the column names from the database table
$columns = array_keys($character);

// ... rest of the code ...

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
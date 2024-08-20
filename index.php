<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DSA Charaktere</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>DSA Charakterdaten</h1>
    </header>

    <main>
        <div class="charaktere-liste">
            <?php
            include 'connect.php'; // Verbindung zur Datenbank herstellen

            foreach ($characters as $charakter) {
                echo "<div class='charakter'>";
                echo "<h2>" . $charakter['name'] . "</h2>";
                echo "<p><strong>Rasse:</strong> " . $charakter['race'] . "</p>";
                echo "<p><strong>Profession:</strong> " . $charakter['profession'] . "</p>";
                echo "<p><strong>AT:</strong> " . $charakter['at'] . "</p>";
                echo "<p><strong>PA:</strong> " . $charakter['pa'] . "</p>";
                echo "<p><strong>Lebenspunkte:</strong> " . ($charakter['ko']+ $charakter['ko']+$charakter['kk'])/2 . "</p>";
                echo "<p><strong>Ausdauer:</strong> " . $charakter['stamina'] . "</p>";
                echo "<a> Charakter öffnen </a>";
                echo "</div>";
            }
            ?>
        </div>
    </main>

    <footer>
        <p>&copy; 2024 DSA Charaktere. Alle Rechte vorbehalten.</p>
    </footer>
</body>
</html>

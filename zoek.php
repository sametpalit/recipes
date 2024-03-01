<?php
class MyDB extends SQLite3 {
    function __construct() {
        $this->open('db/database.db');
    }
}

$db = new MyDB();

if (!$db) {
    echo $db->lastErrorMsg();
} else {
    if(isset($_GET['q'])) {
        $zoekterm = $_GET['q'];
        $zoekterm = SQLite3::escapeString($zoekterm); 

        $query = "SELECT * FROM recepten WHERE Recepten LIKE '%$zoekterm%'";
        $resultaat = $db->query($query);

        if ($resultaat) {
            while ($rij = $resultaat->fetchArray()) {
                echo "<div class='recept-kaart'>";
                echo "<h2>" . $rij['Recepten'] . "</h2>";
                echo "<p>Land: " . $rij['Land'] . "</p>";
                echo "<p>Bereidingstijd: " . $rij['Bereidingstijd'] . "</p>";
                echo "<p>Ingredienten: " . $rij['Ingredienten'] . "</p>";
                echo "<p>Uitleg: " . $rij['Uitleg'] . "</p>";
                echo "</div>";
                echo "<hr>";
            }
        } else {
            echo "Geen resultaten gevonden.";
        }
    }
}

$db->close();
?>

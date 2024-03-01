<?php
class MyDB extends SQLite3 {
    function __construct() {
        $this->open('../db/database.db');
    }
}

$sql = <<<EOF
SELECT * FROM recepten;
EOF;

$db = new MyDB();

if (!$db) {
    echo $db->lastErrorMsg();
} else {
    $ret = $db->query($sql);
    while ($row = $ret->fetchArray(SQLITE3_ASSOC)) {
        if ($row['Land'] == 'Balkan') {
?>
    <div class="recept-kaart" data-recept="<?php echo htmlspecialchars($row['Recepten']); ?>">
        <img src="<?php echo htmlspecialchars($row['Image']); ?>" alt="<?php echo htmlspecialchars($row['Recepten']); ?>">
        <h2><?php echo htmlspecialchars($row['Recepten']); ?></h2>
        <div class="recept-details" style="display: none;">
            <h2><?php echo htmlspecialchars($row['Recepten']); ?></h2>
            <img src="<?php echo htmlspecialchars($row['Image']); ?>" alt="<?php echo htmlspecialchars($row['Recepten']); ?>">
            <p><strong>Land:</strong> <?php echo htmlspecialchars($row['Land']); ?></p>
            <p><strong>Bereidingstijd:</strong> <?php echo htmlspecialchars($row['Bereidingstijd']); ?></p>
            <p><strong>Ingrediënten:</strong> <?php echo htmlspecialchars($row['Ingredienten']); ?></p>
            <p><strong>Uitleg:</strong> <?php echo htmlspecialchars($row['Uitleg']); ?></p>
        </div>
    </div>
<?php
        }
    }
    $db->close();
}
?>
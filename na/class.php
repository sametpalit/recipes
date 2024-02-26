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
        if ($row['Land'] == 'Noord-Afrikaans') {
?>
    <li>
        <h2><?php echo $row['Recepten']; ?></h2>
        <p><strong>Land:</strong> <?php echo $row['Land']; ?></p>
        <p><strong>Bereidingstijd:</strong> <?php echo $row['Bereidingstijd']; ?></p>
        <p><strong>Ingrediënten:</strong> <?php echo $row['Ingredienten']; ?></p>
        <p><strong>Uitleg:</strong> <?php echo $row['Uitleg']; ?></p>
        <img src="<?php echo $row['Image']; ?>" alt="<?php echo $row['Recepten']; ?>">
    </li>
<?php
        } 
    }
    $db->close();
}
?>

<?php

class MyDB extends SQLite3 {
    function __construct() {

        $this->open('db/database.db');
    }
}

$sql = <<<EOF
SELECT * FROM recepten;
EOF;

$db = new MyDB();


$ret = $db->query($sql);

if (!$ret) {
    echo $db->lastErrorMsg();
} else {

    while ($row = $ret->fetchArray(SQLITE3_ASSOC)) {

        print_r($row);
    }
}


$db->close();

?>

<?php foreach ($recepten as $recept): ?>
    <li>
        <h2><?php echo $recept['Recepten']; ?></h2>
        <p><strong>Land:</strong> <?php echo $recept['Land']; ?></p>
        <p><strong>Bereidingstijd:</strong> <?php echo $recept['Bereidingstijd']; ?></p>
        <p><strong>Ingrediënten:</strong> <?php echo $recept['Ingredienten']; ?></p>
        <p><strong>Uitleg:</strong> <?php echo $recept['Uitleg']; ?></p>
        <img src="<?php echo $recept['Image']; ?>" alt="<?php echo $recept['Recepten']; ?>">
    </li>
<?php endforeach; ?>
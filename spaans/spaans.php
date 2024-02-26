<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="navbar.css">
    <link rel="stylesheet" href="spaans.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <div class="image">
        <img src="" alt="">
    </div>
    <div class="header">
        <h2>Meditterraanse recepten</h2> <br>
        <p>Kies hier uit een van de regio's:</p>
    </div>
    <div class="skew-menu">
        <ul>
            <li><a href="/italiaans/italiaans.php">Italiaans</a></li>
            <li><a href="/turks/turks.php">Turks</a></li>
            <li><a href="/grieks/grieks.php">Grieks</a></li>
            <li><a href="#">Spaans</a></li>
            <li><a href="/balkan/balkan.php">Balkan</a></li>
            <li><a href="/na/na.php">N-Afrikaans</a></li>
            <li><a href="/Contact/contact.php">Contact</a></li>
        </ul>
    </div>

    <div class="inhoud">
        <?php include 'class.php'; ?>
    </div>
</body>
</html>
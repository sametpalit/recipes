<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="navbar.css">
    <link rel="stylesheet" href="na.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <div class="image">
        <img src="" alt="">
    </div>
    <div class="header">
    <div class="logo">
    <img src="../images/logo4.png" alt="Logo" width="150px" height="150px">
    </div>
        <h2>Mediterrane recepten</h2> <br>
        <p>Kies hier uit een van de regio's:</p>
    </div>
    <div class="skew-menu">
        <ul>
            <li><a href="../italiaans/italiaans.php">Italiaans</a></li>
            <li><a href="../turks/turks.php">Turks</a></li>
            <li><a href="../grieks/grieks.php">Grieks</a></li>
            <li><a href="../spaans/spaans.php">Spaans</a></li>
            <li><a href="../balkan/balkan.php">Balkan</a></li>
            <li><a href="#">N-Afrikaans</a></li>
            <li><a href="../Contact/contact.php">Contact</a></li>
        </ul>
    </div>

    <div class="inhoud">
        <?php include 'class.php'; ?>
    </div>
</body>
</html>
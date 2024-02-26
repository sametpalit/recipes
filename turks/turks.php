<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="navbar.css">
    <link rel="stylesheet" href="turks.css">
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
            <li><a href="/italiaans/italiaans.html">Italiaans</a></li>
            <li><a href="recepten.php?land=Turks">Turks</a></li>
            <li><a href="/grieks/grieks.html">Grieks</a></li>
            <li><a href="/spaans/spaans.html">Spaans</a></li>
            <li><a href="/balkan/balkan.html">Balkan</a></li>
            <li><a href="/na/na.html">N-Afrikaans</a></li>
            <li><a href="/Contact/contact.html">Contact</a></li>
        </ul>
    </div>

    <div class="inhoud">
        <h1>Recepten</h1>
        <ul>
            <?php include 'class.php'; ?>
        </ul>
    </div>
</body>
</html>
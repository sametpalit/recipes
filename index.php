<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="navbar.css">
    <link rel="stylesheet" href="home.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="icon" href="images/logo4.png" type="image/x-icon">
<link rel="icon" href="images/logo4.png" type="image/png">
</head>
<body>
    <div class="image">
        <img src="" alt="">
    </div>
    <div class="header">
        <div class="logo">
            <a href="#">
                <img src="images/logo4.png" alt="Logo" width="150px" height="150px">
            </a>
        </div>
        <div class="titel">Mediterrane recepten</div>
        <br>
        <p class= "p1">Kies hier uit een van de regio's:</p>
    </div>
    <div class="skew-menu">
        <ul>
            <li><a href="italiaans/italiaans.php">Italiaans</a></li>
            <li><a href="turks/turks.php">Turks</a></li>
            <li><a href="grieks/grieks.php">Grieks</a></li>
            <li><a href="spaans/spaans.php">Spaans</a></li>
            <li><a href="balkan/balkan.php">Balkan</a></li>
            <li><a href="na/na.php">N-Afrikaans</a></li>
            <li><a href="Contact/contact.php">Contact</a></li>
        </ul>
    </div>
    <div class="zoekbalk-container">
        <form action="index.php" method="GET">
            <input type="text" name="q" id="zoek-input" placeholder="Zoek recepten..." value="<?php echo isset($_GET['q']) ? $_GET['q'] : ''; ?>">
            <button type="submit" id="zoek-btn">Zoek</button>
        </form>
    </div>

    <div class="inhoud">
    <?php
    if(isset($_GET['q'])) {
        $zoekterm = $_GET['q'];
        echo "<h2>Zoekresultaten voor: $zoekterm</h2>";
        include 'zoek.php';
    }
    ?>
    </div>
    <script src="script.js"></script>
</body>
</html>

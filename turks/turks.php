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
        <div class="logo">
            <img src="../images/logo4.png" alt="Logo" width="150px" height="150px">
        </div>
        <div class="titel">Mediterrane recepten</div>
        <br>
        <p>Kies hier uit een van de regio's:</p>
    </div>
    <div class="skew-menu">
        <ul>
            <li><a href="../italiaans/italiaans.php">Italiaans</a></li>
            <li><a href="#">Turks</a></li>
            <li><a href="../grieks/grieks.php">Grieks</a></li>
            <li><a href="../spaans/spaans.php">Spaans</a></li>
            <li><a href="../balkan/balkan.php">Balkan</a></li>
            <li><a href="../na/na.php">N-Afrikaans</a></li>
            <li><a href="../Contact/contact.php">Contact</a></li>
        </ul>
    </div>
    <div class="zoekbalk-container">
        <form action="turks.php" method="GET">
            <input type="text" name="q" id="zoek-input" placeholder="Zoek recepten..." value="<?php echo isset($_GET['q']) ? $_GET['q'] : ''; ?>">
            <button type="submit" id="zoek-btn">Zoek</button>
        </form>
    </div>

    <div class="recepten-container">
        <?php include 'class.php'; ?>
    </div>

    <div class="popup" id="popup">
    </div>

    <script>
        const receptKaarten = document.querySelectorAll('.recept-kaart');
        const popup = document.getElementById('popup');

        receptKaarten.forEach((kaart) => {
            kaart.addEventListener('click', () => {
                const receptDetails = kaart.querySelector('.recept-details').innerHTML;
                popup.innerHTML = receptDetails;
                popup.style.display = 'block';
            });
        });

        popup.addEventListener('click', (event) => {
            if (event.target === popup) {
                popup.style.display = 'none';
            }
        });
    </script>
</body>
</html>

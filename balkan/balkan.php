<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="navbar.css">
    <link rel="stylesheet" href="balkan.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="icon" href="../images/logo4.png" type="image/x-icon">
<link rel="icon" href="../images/logo4.png" type="image/png">
</head>
<body>
    <div class="image">
        <img src="" alt="">
    </div>
    <div class="header">
    <div class="logo">
    <a href="../index.php">
        <img src="../images/logo4.png" alt="Logo" width="150px" height="150px">
    </a>
</div>
        <div class="titel">Mediterrane recepten</div>
        <br>
        <p class= "p1">Kies hier uit een van de regio's:</p>
    </div>
    <div class="skew-menu">
        <ul>
            <li><a href="../italiaans/italiaans.php">Italiaans</a></li>
            <li><a href="../turks/turks.php">Turks</a></li>
            <li><a href="../grieks/grieks.php">Grieks</a></li>
            <li><a href="../spaans/spaans.php">Spaans</a></li>
            <li><a href="#">Balkan</a></li>
            <li><a href="../na/na.php">N-Afrikaans</a></li>
            <li><a href="../Contact/contact.php">Contact</a></li>
        </ul>
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
            document.body.style.overflow = 'hidden'; 

            const popupRect = popup.getBoundingClientRect();
            const windowWidth = window.innerWidth;
            const windowHeight = window.innerHeight;

            if (popupRect.width > windowWidth * 0.9) {
                popup.style.width = windowWidth * 0.9 + 'px';
            }
            if (popupRect.height > windowHeight * 0.9) {
                popup.style.height = windowHeight * 0.9 + 'px';
            }
        });
    });

    popup.addEventListener('click', (event) => {
        if (event.target === popup) {
            popup.style.display = 'none';
            document.body.style.overflow = 'auto';
        }
    });
</script>
</body>
</html>

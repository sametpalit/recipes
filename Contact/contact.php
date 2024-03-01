<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="navbar.css">
    <link rel="stylesheet" href="contact.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <div class="header">
        <div class="logo">
            <img src="../images/logo4.png" alt="Logo" width="150px" height="150px">
        </div>
        <h2>Contact</h2>
    </div>

    <div class="skew-menu">
        <ul>
            <li><a href="../italiaans/italiaans.php">Italiaans</a></li>
            <li><a href="../turks/turks.php">Turks</a></li>
            <li><a href="../grieks/grieks.php">Grieks</a></li>
            <li><a href="../spaans/spaans.php">Spaans</a></li>
            <li><a href="../balkan/balkan.php">Balkan</a></li>
            <li><a href="../na/na.php">N-Afrikaans</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
    </div>

    <div class="inhoud">
        <div id="popup-form-container" style="display:none;">
            <form id="contact-form" method="POST">
                <div class="form-row form-error" style="display:none;"></div>
                <div class="form-row">
                    <label for="contact-form-name">Name:</label>
                    <input id="contact-form-name" class="form-input" type="text" name="name" required>
                </div>
                <div class="form-row">
                    <label for="contact-form-email">Email:</label>
                    <input id="contact-form-email" class="form-input" type="email" name="email" required>
                </div>
                <div class="form-row">
                    <label for="contact-form-phone">Phone:</label>
                    <input id="contact-form-phone" class="form-input" type="tel" name="phone">
                </div>
                <div class="form-row">
                    <label for="contact-form-message">Message:</label>
                    <textarea id="contact-form-message" class="form-input" name="message" required></textarea>
                </div>
                <button type="submit" name="sendMail">Submit</button>
            </form>
            <?php
            if (isset($_POST["sendMail"])) {
                if(
                    !empty($_POST['name'])
                    && !empty($_POST['email'])
                    && !empty($_POST['message'])
                ){
                    $name = $_POST["name"];
                    $email = $_POST["email"];
                    $phone = $_POST["phone"];
                    $message = $_POST["message"];
        
                    $to = "089525@glr.nl"; 
                    $subject = "New Contact Form Submission";
                    $body = "Name: {$name}\nEmail: {$email}\nPhone: {$phone}\nMessage: {$message}";
                    $headers = "From: {$email}";
        
                    if (mail($to, $subject, $body, $headers)) {
                        echo "Message sent successfully!";
                    } else {
                        echo "Failed to send message.";
                    }
                }
            }
            ?>
        </div>
        <div class='btn-con'>
    <button id="show-popup" class="contact-button">Show Contact Form</button>
</div>
    </div>

    <script>
        function showPopupForm() {
            document.getElementById("popup-form-container").style.display = "block";
        }
        function hidePopupForm() {
            document.getElementById("popup-form-container").style.display = "none";
        }
        document.addEventListener("DOMContentLoaded", () => {

            document.getElementById('show-popup').addEventListener('click', () => {
                showPopupForm();
            });

            document.addEventListener('keydown', (event) => {
                if (event.key === 'Escape') hidePopupForm()
            });
        });
    </script>
</body>
</html>

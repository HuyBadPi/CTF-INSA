<?php

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: ./login.php");
    exit();
}

if (!isset($_SESSION['otp'])) {
    $otp = rand(1000, 9999); // Tạo mã OTP ngẫu nhiên
    $_SESSION['otp'] = $otp;
}

$error_message = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['otp'])) {
        if ($_POST['otp'] == $_SESSION['otp']) {
            header("Location: ./archive123/index.php");
            exit();
        } else {
            $error_message = "Le code OTP est incorrect !";
        }
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>CTF Challenge</title>
    <script>
        function sendPhone() {
            const phone = document.getElementById('phone').value;
            const message = document.getElementById('message');

            const xhr = new XMLHttpRequest();
            xhr.open("POST", "getnumero.php", true);
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

            xhr.onreadystatechange = function () {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    message.innerHTML = xhr.responseText;
                }
            };

            xhr.send("phone=" + encodeURIComponent(phone));
        }
    </script>
</head>
<body>
    <h1>Login 2FA</h1>
    <p>Veuillez entrer votre numéro de téléphone. Nous vous enverrons un code de vérification OTP.</p>

    <form onsubmit="event.preventDefault(); sendPhone();">
        <label for="phone">Votre numéro de téléphone:</label>
        <input type="tel" id="phone" name="phone" placeholder="Numéro de téléphone" required pattern="\d{10}" title="Veuillez saisir le numéro de téléphone correct (10 chiffres)">
        <button type="submit">Recevoir OTP</button>
    </form>
    <div id="message"></div>

    <br>
    <br>

    <form action="" method="POST">
        <label>Code OTP:</label>
        <input type="text" name="otp" placeholder="1234" maxlength="4" required>
        <button type="submit">Valider</button>
    </form>

    <?php if (!empty($error_message)): ?>
        <p style="color: red;"><?php echo htmlspecialchars($error_message); ?></p>
    <?php endif; ?>
    
    <br>
    <br>
    <br>
    <br>

    <?php
        echo "######################################<br>";
        echo "#&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;#<br>";
        echo "# FLAG: CTF_X_Y_{939976361471750270937373480650}&nbsp;&nbsp;#<br>";
        echo "#&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;#<br>";
        echo "######################################<br>";
    ?>

</body>
</html>

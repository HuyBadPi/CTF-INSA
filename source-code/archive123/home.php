<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: ./../login.php");
    exit();
}
?>

<h1 class="text-3xl text-black pb-6">Bienvenue à l'INSA, le meilleur terrain d'entraînement de hackers au monde.</h1>

<?php
    echo "###########################################<br>";
    echo "# FLAG: CTF_X_Y_{677956422481540597995464685999}&nbsp;&nbsp;#<br>";
    echo "###########################################<br>";
?>
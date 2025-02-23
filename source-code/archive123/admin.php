<?php
session_start();
if (session_id() !== $_SESSION['adminuser']) { 
    die('<h1 class="text-3xl text-black pb-6">Access denied!  You are not admin.</h1>');
}
?>

<h1 class="text-3xl text-black pb-6">Good Job</h1>

<br>
<br>
<br>

<?php
    echo "###########################################<br>";
    echo "# FLAG: CTF_X_Y_{458107410406179352743723083838}&nbsp;&nbsp;#<br>";
    echo "###########################################<br>";
?>




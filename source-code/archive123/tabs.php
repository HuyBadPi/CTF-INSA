<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: ./../login.php");
    exit();
}

function replaceExtension($string) {
    if (strpos(strtolower($string), '.php') !== false) {
        $string = str_replace('.php', '', strtolower($string));
    }
    return $string;
}

$maxSize = 2 * 1024 * 1024;
$mess = '';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $message = $_POST['message'];

    if (isset($_FILES['attachment']) && $_FILES['attachment']['error'] == 0) {
        $uploadDir = 'uploads/';
        $originalName = basename($_FILES['attachment']['name']);
        $safeName = replaceExtension($originalName);

        if ($_FILES['attachment']['size'] > $maxSize){
            echo "Le fichier dépasse 2 Mo";
            exit();
        }

        $uploadFile = $uploadDir . $safeName;
        
        if (move_uploaded_file($_FILES['attachment']['tmp_name'], $uploadFile)) {
            echo "Le fichier $safeName a été téléchargé avec succès";
        } else {
            echo "Une erreur s'est produite lors du téléchargement du fichier.";
        }
    } else {
        echo "Aucun fichier téléchargé ou erreur de fichier.";
    }
    
    echo '<div style="width: 80%; margin: 20px auto; padding: 20px; background-color: #f4f7fc; border-radius: 8px; border: 1px solid #ccc; font-family: Arial, sans-serif; word-wrap: break-word; white-space: normal;">';
    echo "<p><strong>Titre:</strong> $title</p>";
    echo "<p><strong>Notification:</strong> $message</p>";
    echo "</div><br><br><br><br>";
}

?>

<h1 class="text-3xl text-black pb-6">Upload notification</h1>

<form action="tabs.php" method="POST" enctype="multipart/form-data">
    <label for="title">Titre:</label><br>
    <input type="text" id="title" name="title" required><br><br>

    <label for="message">Notification:</label><br>
    <textarea id="message" name="message" rows="4" cols="50" required></textarea><br><br>

    <label for="attachment">Fichier joint:</label><br>
    <input type="file" id="attachment" name="attachment" accept=".jpg,.png,.pdf,.docx" ><br><br>

    <input type="submit" value="Upload">
</form>
<?php
    echo $mess;
?>



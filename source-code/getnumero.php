<?php

include('./configdb.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Lấy số điện thoại từ form
    $phone = trim($_POST['phone']);

    // Kiểm tra định dạng số điện thoại (10 chữ số)
    if (preg_match("/^\d{10}$/", $phone)) {
        try {
            // Kết nối đến cơ sở dữ liệu challenge
            $db = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_pass);
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // Chèn số điện thoại vào bảng numero
            $stmt = $db->prepare("INSERT INTO $table_name_number (telephone) VALUES (:phone)");
            $stmt->bindParam(':phone', $phone);

            // Thực thi câu lệnh
            if ($stmt->execute()) {
                echo "Le numéro de téléphone a été enregistré avec succès.";
            } else {
                echo "Impossible d'enregistrer le numéro de téléphone. Veuillez réessayer.";
            }
        } catch (PDOException $e) {
            if ($e->getCode() == 23000) { // Mã lỗi trùng lặp
                echo "Ce numéro de téléphone existe déjà.";
            } else {
                echo "Erreur de connexion à la base de données: " . $e->getMessage();
            }
        }
    } else {
        echo "Numéro de téléphone invalide. Veuillez entrer à nouveau.";
    }
} else {
    echo "Aucune donnée envoyée.";
}
?>

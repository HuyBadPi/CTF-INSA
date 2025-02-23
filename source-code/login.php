<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./style.css"/>
</head>
<body>
    <div class="login-page">
    <div class="form">
    <form class="login-form" method="POST" >
      <input type="text" name="username" placeholder="username@insa-cvl.fr"/>
      <input type="password" name="password" placeholder="password"/>
      <button name="login">login</button>
      <p class="message">Not registered? <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ">Create an account</a></p>
    </form>
    <!-- En cas de problème, n'hésitez pas à contacter M. Briffaut. -->
  </div>
</div>
    
</body>
</html>

<?php

include("./configdb.php");
include("./encode.php");

try {
    // Establish database connection
    $db = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_pass);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Database connection failed: " . $e->getMessage();
    exit();
};

// Handle login form submission
if (isset($_POST['login'])) {
    $usr = trim($_POST['username']); // Updated to match HTML form's name attribute
    $pwd = trim($_POST['password']); // Updated to match HTML form's name attribute

    if (!empty($usr) && !empty($pwd)) {
        // Use prepared statements for security
        $stmt = $db->prepare("SELECT * FROM $table_name_user WHERE username = :username AND password = :password");
        $stmt->execute([
            ':username' => $usr,
            ':password' => $pwd // Assuming password is stored as MD5 hash in DB
        ]);

        if ($stmt->rowCount() > 0) {

            $user = $stmt->fetch(PDO::FETCH_ASSOC);

            $key = "secret_key_" . rand(100000,999999);
            $data = '{"username":"' . $user['nom'] . '","role":"' . $user['role'] . '","key":"' . $key . '"}';
            $dataAdmin = '{"username":"olivier","role":"admin","key":"'.$key.'"}';

            $customSessionID = custom_encrypt($data, $key);
	    $adminSessionID  = custom_encrypt($dataAdmin, $key);
 
            session_id($customSessionID);
            // setcookie(session_name(), session_id(), ['Expires' => time() + 3600*5, 'HttpOnly' => true, 'SameSite' => 'Strict']);

            session_start();

            $_SESSION['username'] = $user['username'];
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['adminuser'] = $adminSessionID;

            header("Location: ./dashboard.php");
            exit();
        } else {
            echo "Invalid credentials.";        
        }
    } else {
        echo "Please fill all fields.";
    }
}
?>


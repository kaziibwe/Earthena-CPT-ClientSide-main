<?php

session_start();

// Connect to the database (replace with your database credentials)
$conn = new mysqli("localhost", "cognosph_user_account", "1c2o3g4n5o6s7p8h", "cognosph_user_account");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process the login form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $e_mail = $_POST["e_mail"];
    $password = $_POST["password"];

    // Retrieve user data from the database
    $sql = "SELECT e_mail, password FROM cognosph_user_acc WHERE e_mail=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $e_mail);
    $stmt->execute();
    $stmt->bind_result($db_username, $db_password);
    $stmt->fetch();

    // Verify password
    if (password_verify($password, $db_password)) {
        $_SESSION["user_id"] = $id;
        header("Location: chat.html");
    } else {
        echo "Invalid username or password.";
    }

    $stmt->close();
}

$conn->close();
?>
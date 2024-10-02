<?php
// Connect to the database (replace with your database credentials)
$conn = new mysqli("localhost", "cognosph_user_account", "1c2o3g4n5o6s7p8h", "cognosph_user_account");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process the registration form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $country_region = $_POST["country_region"];
    $city_state = $_POST["city_state"];
    $phone_number = $_POST["phone_number"];
    $e_mail = $_POST["e_mail"];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);

    // Insert user data into the database
    $sql = "INSERT INTO cognosph_user_acc (first_name, last_name, country_region, city_state, phone_number, e_mail, password) VALUES (?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssssss", $first_name, $last_name, $country_region, $city_state, $phone_number, $e_mail, $password);

    if ($stmt->execute()) {
        $_SESSION["user_id"] = $id;
        header("Location: index.html");
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>
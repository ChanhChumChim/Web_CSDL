<?php
include '../Admin/config/config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['Name'];
    $email = $_POST['Email'];
    $phoneNumber = $_POST['phone-number'];
    $message = $_POST['message'];

    // Bảo vệ dữ liệu trước SQL Injection
    $name = mysqli_real_escape_string($mysqli, $name);
    $email = mysqli_real_escape_string($mysqli, $email);
    $phoneNumber = mysqli_real_escape_string($mysqli, $phoneNumber);
    $message = mysqli_real_escape_string($mysqli, $message);

    $sql = "INSERT INTO customer_reply (customer_name, customer_email, customer_phone, message) VALUES ('$name', '$email', '$phoneNumber', '$message')";

    if ($mysqli->query($sql) === TRUE) {
        echo "Dữ liệu đã được lưu thành công!";
        header("Location: ../contact.html");
    } else {
        echo "Lỗi: " . $sql . "<br>" . $mysqli->error;
    }
}

$mysqli->close();
?>

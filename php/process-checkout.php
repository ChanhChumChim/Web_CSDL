<?php
include '../Admin/config/config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Lấy dữ liệu từ form
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $shipping_address = $_POST["address"];
    $zip = $_POST["zip"];
    $name_on_card = $_POST["cardname"];
    $card_number = $_POST["creditcard"];
    $expiration = $_POST["expiration"];
    $cvv = $_POST["cvv"];

    // Kiểm tra thông tin và thực hiện thêm vào cơ sở dữ liệu
    if (!empty($first_name) && !empty($last_name) && !empty($username) && !empty($email) && !empty($shipping_address) && !empty($zip) && !empty($name_on_card) && !empty($card_number) && !empty($expiration) && !empty($cvv)) {
        $insert_payment_sql = "INSERT INTO payment (first_name, last_name, username, email, shipping_address, Zip, Name_on_card, card_number, expiration, CVV, orders_id, user_id) 
                              VALUES ('$first_name', '$last_name', '$username', '$email', '$shipping_address', '$zip', '$name_on_card', '$card_number', '$expiration', '$cvv', 1, 1)";

        if ($mysqli->query($insert_payment_sql) === TRUE) {
            header("Location: ../checkout.html");
        } else {
            echo "Error: " . $insert_payment_sql . "<br>" . $mysqli->error;
        }
    } else {
        echo "Vui lòng nhập đầy đủ thông tin thanh toán.";
    }
    
    // Đóng kết nối
    $mysqli->close();
}
?>

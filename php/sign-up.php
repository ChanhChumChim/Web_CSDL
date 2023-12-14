<?php
    include('../Admin/config/config.php');

    $response = array('status' => '', 'message' => '');

    if (isset($_POST['dangky'])) {
        $tenkhachhang = $_POST['name'];
        $email = $_POST['email'];
        $dienthoai = $_POST['phone-number'];
        $matkhau = md5($_POST['password']);
        $diachi = $_POST['address'];
        $sql_dangky = mysqli_query($mysqli, "INSERT INTO register(customer_name,email,diachi,matkhau,phone_number) 
            VALUES ('".$tenkhachhang."','".$email."','".$diachi."','".$matkhau."','".$dienthoai."')");
    }

    if($sql_dangky) {
        header("Location: ../sing-in.html");
        exit();
    }
?>
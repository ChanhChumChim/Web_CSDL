<?php
    session_start();
    include('config/config.php');
    if(isset($_POST['dangnhap'])) {
        $taikhoan = $_POST['username'];
        $matkhau = md5($_POST['password']);
        $sql = "SELECT * FROM admin WHERE username='".$taikhoan."' AND password='".$matkhau."' LIMIT 1";
        $row = mysqli_query($mysqli,$sql);
        $count = mysqli_num_rows($row);
        if ($count>0) {
            $_SESSION['dangnhap'] = $taikhoan;
            header("Location:index.php");
        }else{
            echo '<script>alert("Tài khoản hoặc mật khẩu không đúng !");</script>';
            header("Location:login.php");
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <style type="text/css">
        body {
            background: #f2f2f2;
        }
        .wrapper {
            width: 15%;
            margin: 0 auto;
        }
        table.table-login {
            width: 100%;
        }
        table.table-login tr td {
            padding: 6px;
        }
    </style>
</head>
<body>
<div class="wrapper">
    <form action="" autocomplete="off" method="POST">
        <table border="1" class="table-login" style="text-align: center;border-collapse: collapse;">
            <tr>
                <td colspan="2"><h3>Đăng nhập</h3></td>
            </tr>
            <tr>
                <td>Tài Khoản</td>
                <td><input type="username" name="username"></td>
            </tr>
            <tr>
                <td>Mật Khẩu</td>
                <td><input type="password" name="password"></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" name="dangnhap" value="Đăng nhập"></td>
            </tr>
        </table>
    </form>
    <a href="../index.html">Quay về trang chủ</a>
</div>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</body>
</html>

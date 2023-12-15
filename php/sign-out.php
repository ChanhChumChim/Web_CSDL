<?php
    // Bắt đầu hoặc kết thúc phiên làm việc
    session_start();

    // Hủy bỏ toàn bộ thông tin phiên làm việc
    session_unset();

    // Hủy bỏ phiên làm việc
    session_destroy();
    echo "<script>alert('Signed Out');</script>";
    // Chuyển hướng đến trang đăng nhập hoặc trang chính
    header("Location: ../sing-in.html");
    exit();
?>

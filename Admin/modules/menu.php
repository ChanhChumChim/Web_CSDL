<?php
    if(isset($_GET['dangxuat']) && $_GET['dangxuat']==1) {
        unset($_SESSION['dangnhap']);
        header('Location:login.php');
    }
?>

<ul class="admin_list">
    <li><a href = "index.php?action=quanlydanhmucsanpham">Quản lý danh mục sản phẩm</a></li>
    <li><a href = "index.php?action=quanlysanpham">Quản lý sản phẩm</a></li>
    <li><a href = "index.php?action=quanly1">Quản lý </a></li>
    <li><a href = "index.php?action=quanly2">Quản lý </a></li>
    <li><a href = "index.php?dangxuat=1">
        Đăng xuất : 
            <?php if(isset($_SESSION['dangnhap'])) {
                echo $_SESSION['dangnhap'];
            }
            ?>
        </a></li>
</ul>
<?php
    include('../../config/config.php');

    $tenloaisp = $_POST['tendanhmuc'];
    $thutu = $_POST['thutu'];
    if(isset($_POST['themdanhmuc'])) {
        $sql_them = "INSERT INTO danhmuc(tendanhmuc,thutu) VALUE('".$tenloaisp."','".$thutu."')";
        mysqli_query($mysqli, $sql_them);
        header('Location:../../index.php?action=quanlydanhmucsanpham');
    } else {
        $id = $_GET['iddanhmuc'];
        $sql_xoa = "DELETE FROM danhmuc WHERE id='".$id."'";
        mysqli_query($mysqli,$sql_xoa);
        header('Location:../../index.php?action=quanlydanhmucsanpham');
    }
?>
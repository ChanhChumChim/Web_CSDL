<?php

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

$conn = new mysqli('localhost','root','','ecommerce_website');

function db_select($table, $condition = null)
{
    $sql = "SELECT * FROM $table ";
    if ($condition != null) {
        $sql .= " WHERE $condition ";
    }
    global $conn;
    $res = $conn->query($sql);
    $rows = [];
    while ($row = $res->fetch_assoc()) {
        $rows[] = $row;
    }
    return $rows;
}

function get_product_thumb($json) 
{
    $img = "images/product2.png";
    if ($json == null) {
        return $img;
    }
    if (strlen($img) < 4) {
        return $img;
    }
    $object = base64_decode($json);
    if (empty($object)) {
        return $img;
    }
    return $object;
}

function get_category_name($id)
{
    $sql = "SELECT * FROM danhmuc WHERE id = $id";
    global $conn;
    $res = $conn->query($sql);
    $row = $res->fetch_assoc();
    return $row['tendanhmuc'];
}

function get_product_amount($id)
{
    $sql = "SELECT COUNT(id_danhmuc) as amount FROM product WHERE id_danhmuc = $id";
    global $conn;
    $res = $conn->query($sql);;
    $row = $res->fetch_column(0);
    return $row;
}

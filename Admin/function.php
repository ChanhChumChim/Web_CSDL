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

function db_insert($table, $data)
{
    $sql = "INSERT INTO $table ";
    $sql .= "(id_sanpham, tensanpham, giasanpham, id_danhmuc, tendanhmuc, id_user, num_of_orders) ";
    $sql .= "VALUES (";
    foreach ($data as $key => $value) {
        $get_type = gettype($value);
        if ($get_type == 'string') {
            $sql .= "'$value', ";
        } else {
            $sql .= $value ;
            $sql .= ", ";
        }
    }
    $sql .= "'12', '1')";
    global $conn;
    $conn->query($sql);
}
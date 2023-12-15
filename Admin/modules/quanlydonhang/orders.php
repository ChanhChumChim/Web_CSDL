<!DOCTYPE html>
<html>
<head>
    <title>Quản lý đơn hàng</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<h2>Danh sách đơn hàng</h2>

<table>
    <tr>
        <th>ID</th>
        <th>ID Sản phẩm</th>
        <th>Tên sản phẩm</th>
        <th>Giá sản phẩm</th>
        <th>ID Danh mục</th>
        <th>Tên danh mục</th>
        <th>ID User</th>
        <th>Số lượng đặt hàng</th>
    </tr>

    <?php

    // Truy vấn dữ liệu từ bảng orders
    $sql = "SELECT * FROM orders";
    $result = $mysqli->query($sql);

    // Hiển thị dữ liệu trong table
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>" . $row["id"] . "</td>
                    <td>" . $row["id_sanpham"] . "</td>
                    <td>" . $row["tensanpham"] . "</td>
                    <td>" . $row["giasanpham"] . "</td>
                    <td>" . $row["id_danhmuc"] . "</td>
                    <td>" . $row["tendanhmuc"] . "</td>
                    <td>" . $row["id_user"] . "</td>
                    <td>" . $row["num_of_orders"]. "</td>
                  </tr>";
        }
    } else {
        echo "<tr><td colspan='7'>Không có dữ liệu</td></tr>";
    }

    // Đóng kết nối
    $mysqli->close();
    ?>
</table>

</body>
</html>

<!DOCTYPE html>
<html>
<head>
    <title>Quản lý thanh toán</title>
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

<h2>Danh sách thông tin thanh toán</h2>

<table>
    <tr>
        <th>ID</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Username</th>
        <th>Email</th>
        <th>Địa chỉ giao hàng</th>
        <th>Zip</th>
        <th>Tên thẻ</th>
        <th>Số tài khoản</th>
        <th>Ngày hết hạn</th>
        <th>CVV</th>
    </tr>

    <?php

    // Truy vấn dữ liệu từ bảng orders
    $sql = "SELECT * FROM payment";
    $result = $mysqli->query($sql);

    // Hiển thị dữ liệu trong table
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>" . $row["id"] . "</td>
                    <td>" . $row["first_name"] . "</td>
                    <td>" . $row["last_name"] . "</td>
                    <td>" . $row["username"] . "</td>
                    <td>" . $row["email"] . "</td>
                    <td>" . $row["shipping_address"] . "</td>
                    <td>" . $row["Zip"] . "</td>
                    <td>" . $row["Name_on_card"] . "</td>
                    <td>" . $row["card_number"] . "</td>
                    <td>" . $row["expiration"] . "</td>
                    <td>" . $row["CVV"] . "</td>
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

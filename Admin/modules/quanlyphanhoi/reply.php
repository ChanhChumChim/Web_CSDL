<?php

    $query = "SELECT * FROM customer_reply";
    $result = $mysqli->query($query);

    if ($result->num_rows > 0) {
        echo "<table border='1'>
            <tr>
                <th>Reply ID</th>
                <th>Customer Name</th>
                <th>Customer Email</th>
                <th>Customer Phone</th>
                <th>Message</th>
            </tr>";

        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                <td>" . $row['reply_id'] . "</td>
                <td>" . $row['customer_name'] . "</td>
                <td>" . $row['customer_email'] . "</td>
                <td>" . $row['customer_phone'] . "</td>
                <td>" . $row['message'] . "</td>
            </tr>";
        }

        echo "</table>";
    } else {
        echo "Không có dữ liệu";
    }

    $mysqli->close();
?>

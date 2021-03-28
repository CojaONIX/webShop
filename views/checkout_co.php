
<?php
    session_start();
    require_once "../db/conn.php";

    if(!empty($_POST['cart'])) {
        $total = 0;
        foreach($_POST['cart'] as $row) {
            $total += $row['pprice'] * $row['pqty'];
        }

        $id = $_SESSION["user_id"];
        $fa = $_POST['full_address'];
        $sql = "INSERT INTO orders VALUES (null, '$fa', CURRENT_TIMESTAMP, $total, 1, $id);";
        if($conn->query($sql)) {
            //echo "<p class='success'>Podaci su dodati u bazu.</p>";
            $last_id = $conn->insert_id;

            $data = array();
            foreach($_POST['cart'] as $row) {
                $data[] = "($last_id, {$row['pid']}, {$row['pqty']})";
            }

            $sql_data = "INSERT INTO orders_has_products VALUES " . implode(", ", $data) . ";";
            if($conn->query($sql_data)) {
                //echo "<p class='success'>Podaci su dodati u bazu.</p>";
            } else {
                echo "<p class='error'>Podaci nisu dodati u bazu. $conn->error</p>";
            }
        } else {
            echo "<p class='error'>Podaci nisu dodati u bazu. $conn->error</p>";
        }
    }
?>



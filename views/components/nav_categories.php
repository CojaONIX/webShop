
<hr>
<h5>Categories</h5>
<hr>

<?php
    require_once "../db/conn.php";
    $query = "SELECT id, name
                FROM main_categories;
              SELECT id, name, main_categories_id
                FROM categories;";

    $conn->multi_query($query);
    $mc_result = $conn->store_result();
    $conn->next_result();
    $c_result = $conn->store_result();

    echo "<ul>";
    foreach($mc_result as $row) {
        echo "<li>";
            echo "<h5>{$row['name']}</h5>";
            echo "<ul>";
            foreach($c_result as $row2) {
                if($row2['main_categories_id'] == $row['id']) {
                    echo "<li><a href='shop.php?cat=" . $row2['id'] . "'>" . $row2['name'] . "</a></li>";
                }
            }
            echo "</ul>";
        echo "</li>";
    }
    echo "</ul>";

?>

<hr>

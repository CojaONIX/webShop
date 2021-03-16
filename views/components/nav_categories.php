<style>

#catLeftMenu {
    cursor: pointer;
}

#catLeftMenu a {
    display: inline-block;
    width: 100%;
    padding: 2px 10px;
    decoration: none;
}

ul {
    list-style-type: none;
    padding-left: 30px;
    margin: 0;
}

#catLeftMenu h5 {
    margin: 5px 0px;
    padding: 5px;
}

#catLeftMenu h5:hover {
    background-color: #ddd;
}

#catLeftMenu ul li ul li:hover {
    background-color: bisque;
}

#catLeftMenu img {
    float: right;
    width: 20px;
    height: 20px;
    transition: 1s;
}

.symbolRotate {
    transform: rotate(-225deg);
}

</style>

<hr>

<div id="catLeftMenu"  class="container">
    <h5>Categories</h5>


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

</div>

<hr>

<script>
    $('#catLeftMenu h5').append('<img src="images/icons/add-circle-outline.svg" class="symbolRotate">');

    $('ul li ul').toggle(500);
    $('#catLeftMenu h5').click(function () {
        $(this).next().toggle(500);
        $(this).find('img').toggleClass("symbolRotate");
    });
</script>

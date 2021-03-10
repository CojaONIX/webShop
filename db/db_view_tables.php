<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.js"></script>
</head>

<style>
    .divInLine {
        display: inline-block;
        margin: 10px;
    }
</style>
<body>
<?php
    require_once "conn.php";

    function drawTable($result) {
        echo "<div class='divInLine'>";
        echo "<table class='display compact'>";

        $zaglavlje = "Nema podataka u tabeli!";
        if($result->num_rows > 0) {
            $columns = array_keys($result->fetch_assoc());
            $zaglavlje = implode("</th><th>", $columns);
        }
        echo "\n\t<thead><tr><th>$zaglavlje</th></tr></thead>";

        echo "\n\t<tbody>";
        foreach($result as $row) {
            echo "<tr><td>" . implode("</td><td>", $row) . "</td></tr>\n";
        }
        echo "</tbody>";
        
        //echo "<tfoot><tr><th></th></tr></tfoot>";
        echo "</table>";
        echo "</div>";
    }
    
    $sql = "SELECT * FROM admins;
            SELECT * FROM users;
            SELECT * FROM main_categories;
            SELECT * FROM categories;
            SELECT * FROM products;";
    
    if ($conn->multi_query($sql)) {
        $result = $conn->store_result();
        drawTable($result);

        //echo "<br>";
        
        $conn->next_result();
        $result = $conn->store_result();
        drawTable($result);

        $conn->next_result();
        $result = $conn->store_result();
        drawTable($result);

        $conn->next_result();
        $result = $conn->store_result();
        drawTable($result);

        $conn->next_result();
        $result = $conn->store_result();
        drawTable($result);

    } else {
        echo "<p>Error: " . $sql . " --- " . $conn->error . "</p>";
    }

    $conn->close();
?>

    <script>
        $(document).ready( function () {
            $('table').DataTable({
                lengthMenu: [10, 20, 2]
            });
        });
    </script>
</body>
</html>
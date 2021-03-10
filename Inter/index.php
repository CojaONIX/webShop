<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inter</title>

    <style>
        div a {
            display: inline-block;
            decoration: none;
            width: 150px;
            background-color: #ddd;
            padding: 10px;
            text-align: center;
        }

        div a:hover {
            background-color: yellow;
        }

    </style>
</head>
<body>
    <div>
        <a href="../db/db_create.php">Create DB</a>
        <a href="../db/db_data.php">Insert Test Data</a>
        <a href="../db/db_view_tables.php">Prikaz Tabela</a>
    </div>

    
    <?php
        include "nav_inter.html";
    ?>
</body>
</html>
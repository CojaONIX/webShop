<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create DB</title>
</head>
<body>
    
<?php
    $myfile = fopen("db_create.sql", "r") or die("Unable to open file!");
    $sql = fread($myfile,filesize("db_create.sql"));
    fclose($myfile);

    require_once "conn.php";

    if (!$conn->multi_query($sql)) {
        echo "<p>Error: " . $sql . " --- " . $conn->error . "</p>";
    } else {
        echo "<h1>Baza je uspesno kreirana :)</h1>";
        echo "<a href='db_data.php'><button>INSERT test podataka iz db_data.sql -> GO!</button></a><hr>";
        echo "<a href='../inter/index.php'><button>Back to INDEX</button></a>";
    }
?>


    

</body>
</html>

<?php

    require_once "env.php";

    $conn = new mysqli($SERVERNAME, $USERNAME, $PASSWORD, $DATABASE);

    if ($conn->connect_error) {
        echo "<p>Connection failed: " . $conn->connect_error . "</p>";
    } else {
        echo "<p>Connected successfully: $database</p>";
    }

?>
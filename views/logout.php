
<?php
    session_start();
    if(isset($_SESSION["user_id"])) {
        $bp = $_SESSION['back_page'];
        $_SESSION = array();
        session_destroy();
    }

    header("Location: " . $bp);
?>
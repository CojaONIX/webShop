<?php
    require_once "components/head.php";
    include "components/nav.php";

    $_SESSION['back_page'] = basename($_SERVER['PHP_SELF']);
    if(!isset($_SESSION['user_id'])) {
        header("Location: login.php");
    }
?>

<style>

    #tabMenu button {
        margin: 5px;
        cursor: pointer;
        text-align: center;
        transition: 0.3s;
    }



</style>

    <main class="container">
        <a href="profile_cprof.php"><button class="btn btn-outline-primary">Change Profile</button></a>
        <a href="profile_cpass.php"><button class="btn btn-outline-primary">Change Password</button></a>
        <a href="profile_cavatar.php"><button class="btn btn-outline-primary">Change Avatar</button></a>


    </main>


    
</body>
</html>
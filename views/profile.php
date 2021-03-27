<?php
    $title = "Profile";
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

    span:first-child {
        display: inline-block;
        text-align: right;
        width: 100px;
        margin-right: 30px;
        font-weight: bold;
    }



</style>

<div class="container">
    <?php
        require_once "../db/conn.php";
        $sql = "SELECT * FROM users_data WHERE users_id = " . $_SESSION["user_id"] . ";";            
        if ($row = $conn->query($sql)->fetch_assoc()) { ?>
            <div class="d-flex justify-content-between">
                <h2><?php echo $row['first_name'] . " " . $row['last_name'] ?></h2>
                <div>
                <h5>Change:</h5>
                <a href="profile_cavatar.php"><button class="btn btn-outline-primary">Avatar</button></a>
                <a href="profile_cprof.php"><button class="btn btn-outline-primary">Profile</button></a>
                <a href="profile_cpass.php"><button class="btn btn-outline-primary">Password</button></a>
                </div>
            </div>
            <div class="row">
                <div class="col-3">
                    <img class="col-12" src="profile/avatars/<?php echo $_SESSION['user_name']; ?>.jpg" onerror="this.onerror=null; this.src='profile/avatars/noImage.png'">
                </div>
                <div class="col-9">
                    <p><span>Country:</span><span><?php echo $row['country'] ?></span></p>
                    <p><span>City:</span><span><?php echo $row['postal_code'] . ", " . $row['city'] ?></span></p>
                    <p><span>Address:</span><span><?php echo $row['address'] ?></span></p>
                    <p><span>Phone:</span><span><?php echo $row['phone'] ?></span></p>

                </div>
            </div>

            <hr>
            <h2>My Orders</h2>
            <hr>

            <?php
                $sql = "SELECT * FROM orders WHERE users_data_users_id = " . $_SESSION["user_id"] . ";";
                if ($result = $conn->query($sql)) {
                    echo "<table class='table'>";
                    foreach($result as $row) {
                        echo "<tr>
                                <td>{$row['id']}</td>
                                <td>{$row['date']}</td>
                                <td class='text-right'>{$row['amount']}</td>
                                <td>{$row['status']}</td>
                            </tr>";
                    }
                    echo "</table>";
                } else {
                    echo "<p class='error'>Podaci nisu ocitani. $conn->error</p>";
                }
            ?>

        <?php
        } else {
            echo "<p class='error'>Podaci nisu ocitani. $conn->error</p>";
        }

    ?>

</div>


    
</body>
</html>
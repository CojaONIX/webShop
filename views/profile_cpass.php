<?php
    $title = "Profile";
    require_once "components/head.php";
    include "components/nav.php";
    require_once "../db/conn.php";

    $_SESSION['back_page'] = basename($_SERVER['PHP_SELF']);

    if(isset($_SESSION['user_id'])) {
        $profile_id = $_SESSION['user_id'];
    } else {
        header("Location: login.php");
    }

    require_once "../validation/validation.php";

    $passwordOld = new Validation();
    $password = new Validation();
    $rpassword = new Validation();
    $isValidForm = true;

    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $sql = "SELECT pass FROM users WHERE id=$profile_id;";
        if($result = $conn->query($sql)) {
            $passMD5 = md5($_POST["passwordOld"]);
            $passDB = $result->fetch_assoc()["pass"];
            if($passMD5 != $passDB) {
                $passwordOld->setMsg("<span class='error'>Wrong Password!</span>");
                $isValidForm = false;
            } else {
                $password->validText($_POST["password"], 3, 25, "a-zA-Z0-9 ?.!_");
                $rpassword->validRetype($_POST["rpassword"], $password->getValid());
            }
        }

        if ($isValidForm) {
            $pass = $conn->real_escape_string($password->getValid());
            $sql = "UPDATE users
                    SET pass = MD5('$pass')
                    WHERE id = $profile_id;";

            if($result = $conn->query($sql)) {
                echo "<div class='container alert alert-success' role='alert'>
                        Change Password: Success.
                        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                            <span aria-hidden='true'>&times;</span>
                        </button>
                    </div>";
            } else {
                echo "<div class='container alert alert-danger' role='alert'>
                        Change Password: Error - $conn->error.
                        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                            <span aria-hidden='true'>&times;</span>
                        </button>
                    </div>";
            }
        }
    }

?>
    <div class="container">
        <div class="col-lg-6 mx-auto">
            <div class="card">
                <div class="card-header"><h4>Change Password<a class="btn btn-outline-primary float-right" href="profile.php">Back to Profile</a></h4></div>
                <div class="card-body">
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
                        <div class="form-group">
                            <label for="passwordOld">Old Password <span class="error">* </span></label>
                            <input type="password" class="form-control" name="passwordOld" id="passwordOld" autofocus>
                            <?php echo $passwordOld->getMsg();?>
                        </div>

                        <div class="form-group">
                            <label for="password">New Password <span class="error">* </span></label>
                            <input type="password" class="form-control" name="password" id="password">
                            <?php echo $password->getMsg();?>
                        </div>

                        <div class="form-group">
                            <label for="rpassword">Retype New Password <span class="error">* </span></label>
                            <input type="password" class="form-control" name="rpassword" id="rpassword">
                            <?php echo $rpassword->getMsg();?>
                        </div>
                
                        <input type="submit" value="Change Password" class="btn btn-primary form-control">
                    </form>
                </div>

            </div>
        </div>
    </div>

    <script>
        if ( window.history.replaceState ) {
            window.history.replaceState( null, null, window.location.href );
        }
    </script>
</body>
</html>
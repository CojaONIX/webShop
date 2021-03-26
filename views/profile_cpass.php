<?php
    require_once "components/head.php";
    include "components/nav.php";

    $_SESSION['back_page'] = basename($_SERVER['PHP_SELF']);
    if(!isset($_SESSION['user_id'])) {
        header("Location: login.php");
    }
?>

    <hr>
    <h2 class="text-center">Change Password</h2>
    <hr>
    <div class="col-md-6">
        <div class="card">
            <div class="card-header"><h4>Change Password</h4></div>
            <div class="card-body">
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
                    <div class="form-group">
                        <label for="passwordOld">Old Password <span class="error">* </span></label>
                        <input type="password" class="form-control" name="passwordOld" id="passwordOld" autofocus>
                        <?php echo ''; //$passwordOld->getMsg();?>
                    </div>

                    <div class="form-group">
                        <label for="password">New Password <span class="error">* </span></label>
                        <input type="password" class="form-control" name="password" id="password">
                        <?php echo ''; //$password->getMsg();?>
                    </div>

                    <div class="form-group">
                        <label for="rpassword">Retype New Password <span class="error">* </span></label>
                        <input type="password" class="form-control" name="rpassword" id="rpassword">
                        <?php echo ''; //$rpassword->getMsg();?>
                    </div>
            
                    <input type="submit" value="Change Password" class="btn btn-primary form-control">
                </form>
            </div>

        </div>
    </div>
</body>
</html>
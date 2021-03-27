
<?php
    $title = "Register";
    require_once "components/head.php";
    require_once 'components/nav.php';
    require_once "../db/conn.php";
    require_once "../validation/Validation.php";

    $username = new Validation();
    $password = new Validation();
    $rpassword = new Validation();


    if ($_SERVER['REQUEST_METHOD'] == "POST") {

        $username->validText($_POST["username"], 1, 50, "a-zA-Z0-9 ?.!_");
        $password->validText($_POST["password"], 1, 25, "a-zA-Z0-9 ?.!_");
        $rpassword->validRetype($_POST["rpassword"], $password->getValid());

        if (Validation::$isValidForm) {
            $un = $conn->real_escape_string($username->getValid());
            $pass = $conn->real_escape_string($password->getValid());
            $sql = "INSERT INTO users VALUES (null, '$un', MD5('$pass'), 'email');";
            echo $sql;
            if($conn->query($sql)) {
                echo "<p class='success'>Podaci su dodati u bazu.</p>";
                $last_id = $conn->insert_id;
            } else {
                echo "<p class='error'>Podaci nisu dodati u bazu. $conn->error</p>";
                if($conn->errno == 1062) {
                    $username->setMsg("<span class='error'>Vec postoji korisnik sa tim imenom!</span>");
                }
            }
        }
    }
?>    

<div class="container">
    <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card">
            <div class="card-header"><h4>REGISTER<a class="btn btn-outline-primary float-right" href="login.php">or Login</a></h4></div>
            <div class="card-body">
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
                    <div class="">
                        <div class="form-group">
                            <label for="username">User Name <span class="error">* </span></label>
                            <input type="text" class="form-control" name="username" id="username" value="<?php echo $username->getValid();?>" autofocus>
                            <?php echo $username->getMsg();?>
                        </div>

                        <div class="form-group">
                            <label for="password">Password <span class="error">* </span></label>
                            <input type="password" class="form-control" name="password" id="password">
                            <?php echo $password->getMsg();?>
                        </div>

                        <div class="form-group">
                            <label for="rpassword">Retype Password <span class="error">* </span></label>
                            <input type="password" class="form-control" name="rpassword" id="rpassword">
                            <?php echo $rpassword->getMsg();?>
                        </div>
                    </div>


                    <input type="submit" value="Register" class="btn btn-primary form-control">
                </form>
            </div>

        </div>
    </div>
</div>



    <script>
        $(document).ready(function(){
            if ( window.history.replaceState ) {
                window.history.replaceState( null, null, window.location.href );
            }

        });
    </script>
    
</body>
</html>
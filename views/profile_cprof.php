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

    require_once "../validation/Validation.php";

    $fname = new Validation();
    $lname = new Validation();
    $country = new Validation();
    $phone = new Validation();
    $postal_code = new Validation();
    $city = new Validation();
    $address = new Validation();

    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $fname->validText($_POST["fname"], 1, 45, "a-zA-Z ");
        $lname->validText($_POST["lname"], 1, 45, "a-zA-Z ");
        $country->validText($_POST["country"], 1, 45, "a-zA-Z ");
        $phone->validText($_POST["phone"], 1, 16, "0-9\/ +-");
        $postal_code->validText($_POST["postal_code"], 1, 10, "0-9");
        $city->validText($_POST["city"], 1, 45, "a-zA-Z ");
        $address->validText($_POST["address"], 1, 60, "0-9a-zA-Z ");

        if (Validation::$isValidForm) {
            $fn = $conn->real_escape_string($fname->getValid());
            $ln = $conn->real_escape_string($lname->getValid());
            $cn = $conn->real_escape_string($country->getValid());
            $ph = $conn->real_escape_string($phone->getValid());
            $pc = $conn->real_escape_string($postal_code->getValid());
            $cy = $conn->real_escape_string($city->getValid());
            $ad = $conn->real_escape_string($address->getValid());

            $sql = "UPDATE users_data
                    SET
                        first_name = '$fn',
                        last_name = '$ln',
                        country = '$cn',
                        phone = '$ph',
                        postal_code = '$pc',
                        city = '$cy',
                        address = '$ad'
                    WHERE users_id = $profile_id;";

            if($conn->query($sql)) {
                echo "<div class='container alert alert-success' role='alert'>
                        Change Profile: Success.
                        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                            <span aria-hidden='true'>&times;</span>
                        </button>
                    </div>";
            } else {
                echo "<div class='container alert alert-danger' role='alert'>
                        Change Profile: Error - $conn->error.
                        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                            <span aria-hidden='true'>&times;</span>
                        </button>
                    </div>";
            }
        }
    } else {
        $sql = "SELECT *
        FROM users_data
        WHERE users_id=$profile_id;";

        if($result = $conn->query($sql)) {
            $p = $result->fetch_assoc();
            $fname->setValid($p['first_name']);
            $lname->setValid($p['last_name']);
            $country->setValid($p['country']);
            $phone->setValid($p['phone']);
            $postal_code->setValid($p['postal_code']);
            $city->setValid($p['city']);
            $address->setValid($p['address']);
        }
    }
?>
<div class="container">
    <div class="col-lg-6 mx-auto">
        <div class="card">
            <div class="card-header"><h4>Change Profile<a class="btn btn-outline-primary float-right" href="profile.php">Back to Profile</a></h4></div>
            <div class="card-body">
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
                    <div class="row">
                        <div class="form-group col-sm-6">
                            <label for="fname">First name: <span class="error">* </span></label>
                            <input type="text" class="form-control" name="fname" id="fname" value="<?php echo $fname->getValid();?>">
                            <?php echo $fname->getMsg();?>
                        </div>
                        <div class="form-group col-sm-6">
                            <label for="lname">Last name: <span class="error">* </span></label>
                            <input type="text" class="form-control" name="lname" id="lname" value="<?php echo $lname->getValid();?>">
                            <?php echo $lname->getMsg();?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-sm-6">
                            <label for="country">Country: <span class="error">* </span></label>
                            <input type="text" class="form-control" name="country" id="country" value="<?php echo $country->getValid();?>">
                            <?php echo $country->getMsg();?>
                        </div>
                        <div class="form-group col-sm-6">
                            <label for="phone">Phone: <span class="error">* </span></label>
                            <input type="text" class="form-control" name="phone" id="phone" value="<?php echo $phone->getValid();?>">
                            <?php echo $phone->getMsg();?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-sm-6">
                            <label for="postal_code">Postal code: <span class="error">* </span></label>
                            <input type="text" class="form-control" name="postal_code" id="postal_code" value="<?php echo $postal_code->getValid();?>">
                            <?php echo $postal_code->getMsg();?>
                        </div>
                        <div class="form-group col-sm-6">
                            <label for="city">City: <span class="error">* </span></label>
                            <input type="text" class="form-control" name="city" id="city" value="<?php echo $city->getValid();?>">
                            <?php echo $city->getMsg();?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="address">Address: <span class="error">* </span></label>
                        <input type="text" class="form-control" name="address" id="address" value="<?php echo $address->getValid();?>">
                        <?php echo $address->getMsg();?>
                    </div>

                    <input type="submit" value="Change Profile" class="btn btn-primary form-control">
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
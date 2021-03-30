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

    $fields = [
        "first_name"=>[
            "type"=>"text",
            "label"=>"First name",
            "valid"=>"a-zA-Z ",
            "min_len"=>1,
            "max_len"=>45,
            "bs_row_class"=>"col-sm-6"
        ],
        "last_name"=>[
            "type"=>"text",
            "label"=>"Last name",
            "valid"=>"a-zA-Z ",
            "min_len"=>1,
            "max_len"=>45,
            "bs_row_class"=>"col-sm-6"
        ],
        "country"=>[
            "type"=>"text",
            "label"=>"Country",
            "valid"=>"a-zA-Z ",
            "min_len"=>1,
            "max_len"=>45,
            "bs_row_class"=>"col-sm-6"
        ],
        "phone"=>[
            "type"=>"text",
            "label"=>"Phone",
            "valid"=>"0-9 \/",
            "min_len"=>1,
            "max_len"=>20,
            "bs_row_class"=>"col-sm-6"
        ],
        "postal_code"=>[
            "type"=>"text",
            "label"=>"Postal code",
            "valid"=>"0-9",
            "min_len"=>5,
            "max_len"=>5,
            "bs_row_class"=>"col-sm-4"
        ],
        "city"=>[
            "type"=>"text",
            "label"=>"City",
            "valid"=>"a-zA-Z ",
            "min_len"=>1,
            "max_len"=>45,
            "bs_row_class"=>"col-sm-8"
        ],
        "address"=>[
            "type"=>"text",
            "label"=>"Address",
            "valid"=>"a-zA-Z0-9 ",
            "min_len"=>1,
            "max_len"=>60
        ]

    ];

    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $form_data = $_POST;

        // if (Validation::$isValidForm) {
        //     $fn = $conn->real_escape_string($fname->getValid());
        //     $ln = $conn->real_escape_string($lname->getValid());
        //     $cn = $conn->real_escape_string($country->getValid());
        //     $ph = $conn->real_escape_string($phone->getValid());
        //     $pc = $conn->real_escape_string($postal_code->getValid());
        //     $cy = $conn->real_escape_string($city->getValid());
        //     $ad = $conn->real_escape_string($address->getValid());

        //     $sql = "UPDATE users_data
        //             SET
        //                 first_name = '$fn',
        //                 last_name = '$ln',
        //                 country = '$cn',
        //                 phone = '$ph',
        //                 postal_code = '$pc',
        //                 city = '$cy',
        //                 address = '$ad'
        //             WHERE users_id = $profile_id;";

        //     if($conn->query($sql)) {
        //         echo "<div class='container alert alert-success' role='alert'>
        //                 Change Profile: Success.
        //                 <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
        //                     <span aria-hidden='true'>&times;</span>
        //                 </button>
        //             </div>";
        //     } else {
        //         echo "<div class='container alert alert-danger' role='alert'>
        //                 Change Profile: Error - $conn->error.
        //                 <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
        //                     <span aria-hidden='true'>&times;</span>
        //                 </button>
        //             </div>";
        //     }
        // }

    } else {
        $keys = implode(", ", array_keys($fields));
        $sql = "SELECT $keys
        FROM users_data
        WHERE users_id=$profile_id;";

        if($result = $conn->query($sql)) {
            $form_data = $result->fetch_assoc();
        }
    }

?>

<div class="container">
    <div class="col-lg-8 mx-auto">
        <div class="card">
            <div class="card-header">
                <h4>Change Profile<a class="btn btn-outline-primary float-right" href="profile.php">Back to Profile</a></h4>
            </div>

            <div class="card-body">
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
                    <div class="row">
                        <?php
                            bsValidForm($fields, $form_data);
                        ?>
                        <input type="submit" value="Change Profile" class="btn btn-primary form-control">

                    </div>
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
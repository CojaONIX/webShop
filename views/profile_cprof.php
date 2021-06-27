<?php
    $title = "Profile";
    require_once "components/head.php";
    include "components/nav.php";
    
    $_SESSION['back_page'] = basename($_SERVER['PHP_SELF']);

    if(isset($_SESSION['user_id'])) {
        $profile_id = $_SESSION['user_id'];
    } else {
        header("Location: login.php");
    }


    $form_deff = [
        "table"=>"users_data",
        "table_id_col"=>"users_id",
        "id"=>$profile_id,
        "title"=>"Change Profile",
        "subnit_text"=>"Save"
    ];

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

       
?>

<div class="container">
    <div class="col-lg-8 mx-auto">
        <?php
            require_once "../validation/validation.php"; 
            bsValidForm($form_deff, $fields);
        ?>
    </div>
</div>


    <script>
        if ( window.history.replaceState ) {
            window.history.replaceState( null, null, window.location.href );
        }
    </script>
</body>
</html>
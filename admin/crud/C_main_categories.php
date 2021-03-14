<?php
require_once "validation/validation.php";
include "assets/views/components/head.php";

$validated = true;
$name = $description = "";
$nameErr = $descriptionErr = "";


if($_SERVER(['REQUEST_METHOD'=='$_POST'])){

    $name=$_POST['name'];
    $description=$_POST['description'];

    if(textValidation($name)){
        $validated=false;
        $nameErr=textValidation($name);
    }else{
        $name = trim($name);
        $name = preg_replace('/\s\s+/', ' ', $name); 
    }


    if(descriptionValidate($description)){
        $validated=false;
        $descriptionErr=descriptionValidate($description);
    }else{
        $description = trim($name);
        $description = preg_replace('/\s\s+/', ' ', $description); 
    }
}


if($validated){


}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main Categortries</title>
</head>
<body>
    <?php

    ?>
    <h2>Forma za novu glavnu kategoriju.</h2>
    <h2>Validacija forme.</h2>
    <h2>Povratak na admin index (odustajemo od unosa).</h2>


    <div class="container">

    <div class="row">

        <div class="col-xl-6">
             <!-- form -->
                <form action="" method="POST">
            <div class="mb-3">
                <label class="form-label">Name</label>
                <input type="text" name="name" class="form-control"><span class="text-danger"><?php echo $nameErr ?></span>
               
            </div>

            <div class="mb-3">
                <label class="form-label">Description</label>
                <input type="text" name="description" class="form-control"><span class="text-danger"><?php echo $descriptionErr ?></span>
               
            </div>
                       
            <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>    
    
    </div>

</div>

</body>
</html>
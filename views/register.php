
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WEBSHOP</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">

    <style>

    </style>
</head>
<body>
    
<?php
    require_once './components/nav.php';
?>

<div class="container">
    <div class="row mt-6">
        <div class="card col-12 col-sm-8 col-md-6 col-lg-4 mx-auto">
            <div class="card-body">
                <form>
                    <div class="row">
                        <div class="mb-3 col">
                        <label for="firstName" class="form-label">First name</label>
                        <input
                            type="text"
                            class="form-control"
                            id="firstName"
                            required
                        />
                        </div>
                        <div class="mb-3 col">
                        <label for="lastName" class="form-label">Last name</label>
                        <input
                            type="text"
                            class="form-control"
                            id="lastName"
                            required
                        />
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col">
                        <label for="country" class="form-label">Country</label>
                        <input
                            type="text"
                            class="form-control"
                            id="country"
                            required
                        />
                        </div>
                        <div class="mb-3 col">
                        <label for="city" class="form-label">City</label>
                        <input type="text" class="form-control" id="city" required />
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col">
                        <label for="postalCode" class="form-label">Postal code</label>
                        <input
                            type="text"
                            class="form-control"
                            id="postalCode"
                            required
                        />
                        </div>
                        <div class="mb-3 col">
                        <label for="phone" class="form-label">Phone</label>
                        <input type="text" class="form-control" id="phone" required />
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="address" class="form-label">Address</label>
                        <input type="text" class="form-control" id="address" required />
                    </div>

                    <hr />

                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" required />
                    </div>
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input
                        type="text"
                        class="form-control"
                        id="username"
                        required
                        />
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input
                        type="password"
                        class="form-control"
                        id="password"
                        required
                        />
                    </div>
                    <div class="mb-4">
                        <label for="confirmPassword" class="form-label"
                        >Confirm password</label
                        >
                        <input
                        type="password"
                        class="form-control"
                        id="confirmPassword"
                        required
                        />
                    </div>
                    <div class="d-grid gap-2">
                        <button class="btn btn-primary" type="submit">LOGIN</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>
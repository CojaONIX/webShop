<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.js"></script>

    
    <style>

        #tabMenu button {
            margin: 5px;
            padding: 10px;
            width: 100%;
            cursor: pointer;
            text-align: left;
            transition: 0.3s;
        }

    </style>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-sm navbar-toggleable-sm navbar-light bg-white border-bottom box-shadow mb-3">
            <div class="container">
                <a class="navbar-brand" href="#">webShop</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="navbar-collapse collapse d-sm-inline-flex flex-sm-row-reverse">
                        
                    <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link text-dark" href="#">Hello, admin</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-dark" href="#">Logout</a>
                            </li>
                    </ul>

                    <ul class="navbar-nav flex-grow-1">
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="../index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="../views/shop.php">Shop</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>


    <main class="container">
        <?php

            require_once "crud_forms.php";

        ?>

        <div class="row">
            <div id="tabMenu" class="col-sm-2">
                <?php
                    $menu = [
                        "home" => "Home",
                        "main_categories" => "mCategories",
                        "categories" => "Categories",
                        "products" => "Products",
                        "orders" => "Orders"                                                                                             

                    ];

                    $get_menu = isset($_GET['menu']) ? $_GET['menu'] : "home";
                    foreach($menu as $k=>$m) {
                        $active = $k == $get_menu ? " active" : "";
                        echo "<a class='btn btn-outline-primary col-12 my-1$active' href='?menu=$k'>" . $m . "</a>";
                    }
                ?>
            </div>

            <div id="tabContents" class="col-sm-10">
                <?php
                    if (file_exists("partials/_" . $get_menu . ".php")) {
                        include "partials/_" . $get_menu . ".php";
                    }
                ?>
            </div>
        </div>

    </main>

        
    <script>
        $(document).ready(function () {
            $('table').DataTable();
        });
    </script>
</body>
</html>
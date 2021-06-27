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


        /* Animacija pri otvaranj Modal */
        .modal.fade .modal-dialog {
            transform: scale(0.1);
            opacity: 0;
            transition: all 0.5s;
        }
        .modal.fade.show .modal-dialog {
            transform: scale(1);
            opacity: 1;
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

            function drawTable($m, $k) {
                echo "<h3>" . $m['caption'] . "</h3>";
                echo "<hr>";

                require_once "../db/conn.php";
                $col = $m['get_db_columns'];
                $sql = "SELECT $col FROM $k;";

                $result = $conn->query($sql);

                if($result->num_rows > 0) {
                    echo "<div id='$k' class='tblDiv'>";
                    echo "<button class='C'>C</button>";
                    echo "<table class='display compact'>";
                    
                    $columns = array_keys($result->fetch_assoc());
                    $zaglavlje = implode("</th><th>", $columns);
                    echo "\n\t<thead><tr><th>Action</th><th>$zaglavlje</th></tr></thead>";

                    echo "\n\t<tbody>";
                    foreach($result as $row) {
                        $actions = "<td>";
                        $actions .= "<button class='R'>R</button>";
                        $actions .= "<button class='U'>U</button>";
                        $actions .= "<button class='D'>D</button>";
                        $actions .= "</td>";
                        echo "<tr>$actions<td>" . implode("</td><td>", $row) . "</td></tr>\n";
                    }
                    echo "</tbody>";
                    
                    //echo "<tfoot><tr><th></th></tr></tfoot>";
                    echo "</table>";
                    echo "</div>";
                } else {
                    echo  "<h2>Nema podataka u tabeli!<h2>";
                }

                $conn->close();
            }
        ?>

        <div class="row">
            <div id="tabMenu" class="col-sm-2">
                <?php
                    $menu = [
                        "home" => [
                            "caption" => "Home",
                            "get_db_columns" => "*"
                        ],
                        "main_categories" => [
                            "caption" => "mCategories",
                            "get_db_columns" => "*"
                        ],
                        "categories" => [
                            "caption" => "Categories",
                            "get_db_columns" => "*"
                        ],
                        "products" => [
                            "caption" => "Products",
                            "get_db_columns" => "id, name, qty, price"
                        ],
                        "orders" => [
                            "caption" => "Orders",
                            "get_db_columns" => "*"
                        ],                                                                                                

                    ];

                    foreach($menu as $k=>$m) {
                        $active = $k == $_GET['menu'] ? " active" : "";
                        echo "<a class='btn btn-outline-primary col-12 my-1$active' href='?menu=$k'>" . $m['caption'] . "</a>";
                    }
                ?>
            </div>

            <div id="tabContents" class="col-sm-10">
                <?php
                    drawTable($menu[$_GET['menu']], $_GET['menu']);
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
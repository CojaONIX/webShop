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
    require_once "../db/conn.php";

    function drawTable($result, $tableID) {
        if($result->num_rows > 0) {
            echo "<div id='$tableID' class='tblDiv'>";
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

    }
    
    $sql = "SELECT * FROM main_categories;
            SELECT * FROM categories;
            SELECT id, name, qty, price FROM products;";
    
    $conn->multi_query($sql);

    //$conn->close();
?>

    <div class="row">
        <div id="tabMenu" class="col-sm-2">
            <button>Home</button>
            <button>mCategories</button>
            <button>Categories</button>
            <button>Products</button>
            <button>Orders</button>
        </div>

        <div id="tabContents" class="col-sm-10">
            <div>
                <h3>Home</h3>
                <hr />
                <p>Fugiat id quis dolor culpa eiusmod anim velit excepteur proident dolor aute qui magna. Ad proident laboris ullamco esse anim Lorem Lorem veniam quis Lorem irure occaecat velit nostrud magna nulla. Velit et et proident Lorem do ea tempor officia dolor. Reprehenderit Lorem aliquip labore est magna commodo est ea veniam consectetur.</p>

            </div>

            <div>
                <h3>Main Categories</h3>
                <hr />
                <?php
                    $result = $conn->store_result();
                    drawTable($result, "main_categories");
                ?>
            </div>

            <div>
                <h3>Categories</h3>
                <hr />
                <?php
                    $conn->next_result();
                    $result = $conn->store_result();
                    drawTable($result, "categories");
                ?>
            </div>

            <div>
                <h3>Products</h3>
                <hr />
                <?php
                    $conn->next_result();
                    $result = $conn->store_result();
                    drawTable($result, "products");
                ?>
            </div>

            <div>
                <h3>Orders</h3>
                <hr />
                <p>Eu dolore ea ullamco dolore Lorem id cupidatat excepteur reprehenderit consectetur elit id dolor proident in cupidatat officia. Voluptate excepteur commodo labore nisi cillum duis aliqua do. Aliqua amet qui mollit consectetur nulla mollit velit aliqua veniam nisi id do Lorem deserunt amet. Culpa ullamco sit adipisicing labore officia magna elit nisi in aute tempor commodo eiusmod.</p>
            </div>
        </div>
    </div>


</main>

    
    <script>
        $(document).ready(function () {
            $('.C').on('click', function () {
                var tblName = $(this).parents('.tblDiv').attr('id');
                window.location.href = "crud/C_" + tblName + ".php";
            });

            $('.R').on('click', function () {
                var tblName = $(this).parents('.tblDiv').attr('id');
                var id = $(this).parent().next().text();
                window.location.href = "crud/R_" + tblName + ".php?id=" + id;
            });

            $('.U').on('click', function () {
                var tblName = $(this).parents('.tblDiv').attr('id');
                var id = $(this).parent().next().text();
                window.location.href = "crud/U_" + tblName + ".php?id=" + id;
            });

            $('.D').on('click', function () {
                var tblName = $(this).parents('.tblDiv').attr('id');
                var id = $(this).parent().next().text();
                window.location.href = "crud/D_" + tblName + ".php?id=" + id;
            });

            $('table').DataTable();



            $('#tabMenu button').click(function () {
                $('#tabContents > div').slideUp(600);
                $('#tabMenu button').removeClass('active');
                $(this).addClass('active');
                $('#tabContents > div').eq($(this).index()).slideDown(600);
            });
            $('#tabMenu button').addClass('btn btn-outline-primary');
            $('#tabMenu button').eq(2).click();


        });
    </script>
</body>
</html>
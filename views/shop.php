<?php
    require_once "components/head.php";
?>

<?php
    include "components/nav.php";
    $_SESSION['back_page'] = basename($_SERVER['PHP_SELF']);
?>

<style>
    summary {
        background-color: #eee;
        padding: 4px 10px;
        border-radius: 12px;
        border: 2px solid #ccc;
        outline: none;
    }
</style>

<div class="container">
    <div class="row">
        <div class="col-md-4 col-lg-3" id="sidebar">
            <?php
                include "components/nav_categories.php";
            ?>
        </div>

        <div id="productsList" class="col-md-8 col-lg-9">
            <div class="row">
                <?php
                    $cat_id = isset($_GET['cat']) ? $_GET['cat'] : 1;
                    require_once "../db/conn.php";
                    $sql = "SELECT * FROM products WHERE categories_id = $cat_id;";            
                    if ($result = $conn->query($sql)) {
                        foreach($result as $row) {
                            ?>

                                <div class="col-sm-6 col-lg-4 card-group px-2 mb-3">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5 class="card-title"><?php echo $row['name']; ?></h5>
                                        </div>

                                        <img class="card-img-top" src="images/products/<?php echo $row['id']; ?>.jpeg" onerror="this.onerror=null; this.src='images/noImage.jpg'">

                                        <div class="card-body p-2">
                                            <details>
                                                <summary><?php echo $row['short_description']; ?></summary>
                                                <?php echo $row['long_description']; ?>
                                            </details>
                                        </div>

                                        <div class="card-footer">
                                            <h3 class="text-right"><?php echo $row['price']; ?></h3>
                                            <button class="ATC btn btn-primary float-right" data-pid=<?php echo $row['id']; ?> data-pname="<?php echo $row['name']; ?>" data-pprice=<?php echo $row['price']; ?>>Add to Cart</button>
                                        </div>
                                    </div>
                                </div>

                            <?php
                        }

                    } else {
                        echo "<p>Error: " . $sql . " --- " . $conn->error . "</p>";
                    }
                ?>
            </div>
        </div>
    </div>
</div>

<?php
    include "components/cart.php";
?>

<?php
    require_once "components/footer.php";
?>
    

    <script>


    </script>
</body>
</html>
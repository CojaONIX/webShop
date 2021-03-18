
<style>
    summary {
        background-color: #eee;
        padding: 4px 10px;
        border-radius: 12px;
        border: 2px solid #ccc;
        outline: none;
    }
</style>

<hr>
<h2 class="text-center">Featured products</h2>
<hr>

<div class="container">
    <div class="row">

    <?php
        require_once "../db/conn.php";
        $sql = "SELECT * FROM products WHERE featured = true;";            
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
                                <a class="btn btn-primary float-right" href="shop.php">Shop</a>
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

<!-- <button id="cls">Clear Local Storage</button>
<script>
        $('#cls').click(function() {
            localStorage.removeItem('jsonCart');
        });
</script> -->
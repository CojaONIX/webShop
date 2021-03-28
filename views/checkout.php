<?php
    $title = "Checkout";
    require_once "components/head.php";
?>

<?php
    include "components/nav.php";
    $_SESSION['back_page'] = basename($_SERVER['PHP_SELF']);
?>

<style>
    #cartData img {
        width: 80px;
    }
</style>

    <hr>
    <h2 class="text-center">Checkout</h2>
    <hr>

    <div id="cart_data" class="container">
        <table id="cartData" class="table table-sm">
            <tr>
                <!-- <th>Product</th> -->
                <th colspan=4>Cart Products</th>
            </tr>
        </table>
        <?php // Podaci o kupcu
            if(isset($_SESSION["user_id"])) { 
                require_once "../db/conn.php";
                $sql = "SELECT * FROM users_data WHERE users_id = " . $_SESSION["user_id"] . ";";            
                if ($row = $conn->query($sql)->fetch_assoc()) { ?>
                    <div class="col-9">
                        <h5>Address:</h5>
                        <p id="fullAddress"><?php echo $row['first_name'] . " " . $row['last_name'] . ", " . $row['country'] . ", " . $row['postal_code'] . " " . $row['city'] . ", " . $row['address'] . ", " . $row['phone'] ?></p>
                        <p>Adresa kupca se izvlaci iz profila. Mozda treba ceo Checkout uraditi u koracima, sa naknadnim unosom adrese, izborom placanja itd.</p>
                    </div>
                    <hr>
                    <a id="bts" class="btn btn-primary float-right" href="shop.php">Back to Shop</a>
                    <a id="confirm" class="btn btn-primary float-right">Confirm order</a>

                <?php
            } else {
                echo "Los SQL";
            }

        ?>

    </div>

    <script>
        jsonCheckout = JSON.parse(localStorage.getItem("jsonCart"));
        if(jsonCheckout == null) {
            $('#cartData').append(`
                <tr>
                    <th>Cart is Empty</th>
                <tr>
            `);

            $('#bts').show();
            $('#confirm').hide();
        } else {
            var subTotal = total = 0;
            $.each( jsonCheckout, function(index, value) {
                subTotal = value['pprice'] * value['pqty'];
                total += subTotal;
                $('#cartData').append(`
                    <tr>
                        <td rowspan=2><img src="images/products/${value['pid']}.jpeg"></td>
                        <td colspan=3>${value['pname']}</td>
                        <tr>
                            <td>${value['pprice']}</td>
                            <td class="text-center">${value['pqty']}</td>
                            <td class="text-right">${subTotal.toFixed(2)}</td>
                        </tr>
                    <tr>
                `);
            });

            $('#cartData').append(`
                <tr>
                    <th colspan=2></th>
                    <th class="text-right">Total:</th>
                    <th class="text-right">${total.toFixed(2)}</th>
                <tr>
            `);

            $('#bts').hide();
            $('#confirm').show();
        }

        $('#confirm').click(function(){
            //alert("{" + JSON.stringify(jsonCheckout)) + "}";
            $.ajax({
                type: "POST",
                url: "checkout_co.php",
                data: {
                        cart: jsonCheckout,
                        full_address: $('#fullAddress').text()
                      },
                success: function(data) {
                    $('#cart_data').html('Uspesna kupovina. Detalji narudzbine su na strani <a href="profile.php">Profile.</a>');
                    localStorage.removeItem("jsonCart");
                }
            });
        });
    </script>

    <?php
        } else {
            echo "<h4 class='text-center'>To continue shopping, please login</h4>";
        }
    ?>


</body>
</html>
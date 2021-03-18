<?php
    require_once "components/head.php";
?>

<?php
    include "components/nav.php";
?>

<style>
    #cartData img {
        width: 80px;
    }
</style>

    <hr>
    <h2 class="text-center">Checkout</h2>
    <hr>

    <?php
        if(isset($_SESSION["user_id"])) { 
            ?>
            <div class="container">
                <table id="cartData" class="table table-sm">
                    <tr>
                        <!-- <th>Product</th> -->
                        <th colspan=4>Cart Products</th>
                    </tr>
                </table>
            </div>

            <script>
                jsonCheckout = JSON.parse(localStorage.getItem("jsonCart"));
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
            </script>

            <?php
        } else {
            echo "<h4 class='text-center'>To continue shopping, please login</h4>";
        }
    ?>

    <button class="btn btn-info" onclick="window.history.back();">Cancel</button>



</body>
</html>
<?php
    require_once "components/head.php";
?>

<?php
    include "components/nav.php";
?>

<style>
    #cartData img {
        width: 60px;
    }
</style>

    <hr>
    <h2 class="text-center">Checkout</h2>
    <hr>

    <?php
        if(!isset($_SESSION["id"])) { 
            ?>
            <div class="container">
                <table id="cartData" class="table">
                    <tr>
                        <th>Product</th>
                        <th>Image</th>
                        <th>Price</th>
                        <th>Qty</th>
                        <th>Total</th>
                    </tr>
                </table>
            </div>
            <?php
        } else {
            echo "<h4 class='text-center'>To continue shopping, please login</h4>";
        }
    ?>

    <button class="btn btn-info" onclick="window.history.back();">Cancel</button>


    <script>
        jsonCheckout = JSON.parse(localStorage.getItem("jsonCart"));
        var subTotal = total = 0;
        $.each( jsonCheckout, function(index, value) {
            subTotal = value['pprice'] * value['pqty'];
            total += subTotal;
            $('#cartData').append(`
                <tr>
                    <td>${value['pname']}</td>
                    <td><img src="images/products/${value['pid']}.jpeg"></td>
                    <td>${value['pprice']}</td>
                    <td>${value['pqty']}</td>
                    <td>${subTotal.toFixed(2)}</td>
                <tr>
            `);
        });

        $('#cartData').append(`
            <tr>
                <th colspan=3></th>
                <th>Total:</th>
                <th>${total.toFixed(2)}</th>
            <tr>
        `);

 
    </script>
</body>
</html>
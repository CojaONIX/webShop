
<style>
    #divCart {
        background-color: transparent;
        position: fixed;
        bottom: 10px;
        left: 10px;
        z-index: 99;
    }

    #imgCart {
        width: 60px;
        height: 50px;
        cursor: pointer;
        filter: drop-shadow(0 0 6px yellow);
    }

    #badgeCart {
        position: relative;
        top: -15px;
        left: -20px;
    }    
</style>


<div id="divCart" class="">
    <img src="images/cart.png" id="imgCart" data-toggle="modal" data-target="#modalCart"  alt="cart">
    <span id="badgeCart" class="badge badge-pill badge-danger">0</span>
</div>

<div class="modal fade" id="modalCart">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">webShop Cart</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div id="tblCart" class="modal-body">
            </div>

            <div class="card mb-3">
                <div class="card-footer">
                    <h3 id="totalCart" style="text-align: right;">Total: 0.00</h3>
                </div>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <a href="checkout.php" class="btn btn-primary">Checkout</a>
            </div>

        </div>
    </div>
</div>

<script>
    
    jsonCart = JSON.parse(localStorage.getItem("jsonCart"));
    if(jsonCart == null) {
        jsonCart = [];
    }
    var qtyTotal = 0;
    $.each( jsonCart, function(index, value) {
        qtyTotal += parseInt(value['pqty']);
    });
    $('#badgeCart').text(qtyTotal);

    $('#modalCart').on('show.bs.modal', function (e) {
        $('#tblCart').empty();
        $.each( jsonCart, function(index, value) {
            $('#tblCart').append(`
                <div class="card mb-3">
                    <div class="card-header">
                        <button type="button" class="btn btn-danger cartRemoveProduct" style="width: 24px; height: 24px; padding: 0px; float: right;">X</button>
                        <h5>${value['pname']}</h5>
                    </div>

                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <h4>${value['pprice']}</h4>
                            <input type="number" min="1" style="width: 70px; text-align: center;" value=${value['pqty']}>
                            <h4 class="subtotal">0.00</h4>
                        </div>
                    </div>
                </div>`);

        });
        drawTotals();
    })

    $('.ATC').click(function() {
            var id = $(this).data('pid');
            var insertNew = true;
            $('#badgeCart').text(parseInt($('#badgeCart').text()) + 1);
            $.each( jsonCart, function(index, value) {
                if(value['pid'] == id) {
                    value['pqty']++;
                    insertNew = false;
                }
            });
            if(insertNew) {
                jsonCart.push({
                    pid: $(this).data('pid'),
                    pname: $(this).data('pname'),
                    pprice: $(this).data('pprice'),
                    pqty: 1
                });
            }
            localStorage.setItem("jsonCart", JSON.stringify(jsonCart));
        });

        $(document.body)
        .on('click', ".cartRemoveProduct", function () {
                var $card = $(this).closest(".card");
                $card.hide(500, function () {
                    jsonCart.splice( $card.index(), 1 );
                    $card.remove();
                    drawTotals();
                });
        })
        .on('input', "#tblCart .card-body input", function () {
            var v = $(this).val();
            if (v == '') v = 1;
            v = parseInt(v);
            if (v < 1) v = 1;
            $(this).val(v);

            jsonCart[$("#tblCart .card-body input").index($(this))]['pqty'] = $(this).val();
            drawTotals();
        });

        function drawTotals() {
            var total = 0;
            var subTotal;
            var qtyTotal = 0;
            $.each( jsonCart, function(index, value) {
                subTotal = value['pprice'] * value['pqty'];
                total += subTotal;
                $('.subtotal').eq(index).text(subTotal.toFixed(2));
                qtyTotal += parseInt(value['pqty']);
            });
            $('#totalCart').text('Total: ' + total.toFixed(2));
            $('#badgeCart').text(qtyTotal);

            localStorage.setItem("jsonCart", JSON.stringify(jsonCart));
        }


    

</script>
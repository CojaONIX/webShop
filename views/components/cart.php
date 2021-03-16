
<style>
    #imgCart {
        width: 50px;
        height: 40px;
        cursor: pointer;
    }

    #badgeCart {
        position: relative;
        top: -5px;
        left: -15px;
    }    
</style>


<div class="row fixed-bottom m-3">
    <img src="images/cart.jfif" id="imgCart" data-toggle="modal" data-target="#modalCart"  alt="cart">
    <h6><span id="badgeCart" class="badge badge-pill badge-danger">0</span></h6>
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

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Checkout</button>
                <h3>Total:</h3>
                <h3 id="totalCart">0.00</h3>
            </div>

        </div>
    </div>
</div>

<script>
    
    jsonCart = localStorage.getItem("jsonCart");
    if(jsonCart == null) {
        jsonCart = [];
    }
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
                        <div class="row">
                            <h4>${value['pprice']}</h4>
                            <input id="qty${value['pid']}" type="number" min="1" style="width: 70px; text-align: center;" value=${value['pqty']}>
                        </div>
                    </div>

                    <div class="card-footer">
                        <h3 style="text-align: right;">0.00</h3>
                    </div>
                </div>`);

        });
        //$('#tblCart').html(JSON.stringify(jsonCart));
    })
    

</script>
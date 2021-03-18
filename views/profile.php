<?php
    require_once "components/head.php";
?>

<?php
    include "components/nav.php";
?>

<style>

    #tabMenu button {
        margin: 5px;
        cursor: pointer;
        text-align: center;
        transition: 0.3s;
    }



</style>

<main class="container">
    <div id="tabMenu" class="row">
        <button>Profile</button>
        <button>Upload Avatar</button>
        <button>Change Password</button>
        <button>Orders</button>
        <button>Other</button>
    </div>


    <div id="tabContents">
        <div>
            <hr>
            <h2 class="text-center">Profile</h2>
            <hr>
            <p>Fugiat id quis dolor culpa eiusmod anim velit excepteur proident dolor aute qui magna. Ad proident laboris ullamco esse anim Lorem Lorem veniam quis Lorem irure occaecat velit nostrud magna nulla. Velit et et proident Lorem do ea tempor officia dolor. Reprehenderit Lorem aliquip labore est magna commodo est ea veniam consectetur.</p>

        </div>

        <div>
        <hr>
            <h2 class="text-center">Upload Avatar</h2>
            <hr>
            <p>Fugiat id quis dolor culpa eiusmod anim velit excepteur proident dolor aute qui magna. Ad proident laboris ullamco esse anim Lorem Lorem veniam quis Lorem irure occaecat velit nostrud magna nulla. Velit et et proident Lorem do ea tempor officia dolor. Reprehenderit Lorem aliquip labore est magna commodo est ea veniam consectetur.</p>

        </div>

        <div>
        <hr>
            <h2 class="text-center">Change Password</h2>
            <hr>
            <p>Fugiat id quis dolor culpa eiusmod anim velit excepteur proident dolor aute qui magna. Ad proident laboris ullamco esse anim Lorem Lorem veniam quis Lorem irure occaecat velit nostrud magna nulla. Velit et et proident Lorem do ea tempor officia dolor. Reprehenderit Lorem aliquip labore est magna commodo est ea veniam consectetur.</p>

        </div>

        <div>
        <hr>
            <h2 class="text-center">Orders</h2>
            <hr>
            <p>Fugiat id quis dolor culpa eiusmod anim velit excepteur proident dolor aute qui magna. Ad proident laboris ullamco esse anim Lorem Lorem veniam quis Lorem irure occaecat velit nostrud magna nulla. Velit et et proident Lorem do ea tempor officia dolor. Reprehenderit Lorem aliquip labore est magna commodo est ea veniam consectetur.</p>

        </div>

        <div>
        <hr>
            <h2 class="text-center">Other</h2>
            <hr>
            <p>Fugiat id quis dolor culpa eiusmod anim velit excepteur proident dolor aute qui magna. Ad proident laboris ullamco esse anim Lorem Lorem veniam quis Lorem irure occaecat velit nostrud magna nulla. Velit et et proident Lorem do ea tempor officia dolor. Reprehenderit Lorem aliquip labore est magna commodo est ea veniam consectetur.</p>

        </div>
    </div>



</main>

<script>
        $(document).ready(function () {
            $('#tabMenu button').click(function () {
                $('#tabContents > div').slideUp(600);
                $('#tabMenu button').removeClass('active');
                $(this).addClass('active');
                $('#tabContents > div').eq($(this).index()).slideDown(600);
            });
            $('#tabMenu button').addClass('btn btn-outline-primary');
            $('#tabMenu button').eq(0).click();


        });
    </script>
    
</body>
</html>
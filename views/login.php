
<?php
    require_once "components/head.php";
?>
    
<?php
    require_once './components/nav.php';
?>

<div class="container">
    <div class="row mt-6">
        <div class="card col-12 col-sm-8 col-md-6 col-lg-4 mx-auto">
            <div class="card-body">
                <form>
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input
                        type="text"
                        class="form-control"
                        id="username"
                        required
                        />
                    </div>
                    <div class="mb-4">
                        <label for="password" class="form-label">Password</label>
                        <input
                        type="password"
                        class="form-control"
                        id="password"
                        required
                        />
                    </div>
                    <div class="d-grid">
                        <button class="btn btn-primary" type="submit">LOGIN</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>
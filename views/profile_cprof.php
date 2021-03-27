<?php
    $title = "Profile";
    require_once "components/head.php";
    include "components/nav.php";

    $_SESSION['back_page'] = basename($_SERVER['PHP_SELF']);
    if(!isset($_SESSION['user_id'])) {
        header("Location: login.php");
    }
?>

    <div class="col-md-6">
        <div class="card">
            <div class="card-header"><h4>Change Profile</h4></div>
            <div class="card-body">
                <form>
                    <div class="row">
                    <div class="mb-3 col-12 col-sm-6">
                        <label for="firstName" class="form-label">First name</label>
                        <input
                        type="text"
                        class="form-control"
                        id="firstName"
                        required
                        />
                    </div>
                    <div class="mb-3 col-12 col-sm-6">
                        <label for="lastName" class="form-label">Last name</label>
                        <input
                        type="text"
                        class="form-control"
                        id="lastName"
                        required
                        />
                    </div>
                    </div>
                    <div class="row">
                    <div class="mb-3 col-12 col-sm-6">
                        <label for="country" class="form-label">Country</label>
                        <input
                        type="text"
                        class="form-control"
                        id="country"
                        required
                        />
                    </div>
                    <div class="mb-3 col">
                        <label for="phone" class="form-label">Phone</label>
                        <input type="text" class="form-control" id="phone" required />
                    </div>
                    </div>
                    <div class="row">
                    <div class="mb-3 col">
                        <label for="postalCode" class="form-label">Postal code</label>
                        <input
                        type="text"
                        class="form-control"
                        id="postalCode"
                        required
                        />
                    </div>
                    <div class="mb-3 col-12 col-sm-6">
                        <label for="city" class="form-label">City</label>
                        <input type="text" class="form-control" id="city" required />
                    </div>
                    </div>
                    <div class="mb-4">
                        <label for="address" class="form-label">Address</label>
                        <input type="text" class="form-control" id="address" required />
                    </div>

                    <input type="submit" value="Change Profile" class="btn btn-primary form-control">
                </form>
            </div>
        </div>
    </div>
</body>
</html>
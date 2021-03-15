<?php
  require_once "components/head.php";
  require_once './components/nav.php';
?>

  <div class="container">
    <div class="row px-2">
      <div class="card col-12 col-sm-11 col-md-9 col-lg-7 mx-auto">
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
              <div class="mb-3 col-12 col-sm-6">
                <label for="city" class="form-label">City</label>
                <input type="text" class="form-control" id="city" required />
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
              <div class="mb-3 col">
                <label for="phone" class="form-label">Phone</label>
                <input type="text" class="form-control" id="phone" required />
              </div>
            </div>
            <div class="mb-4">
              <label for="address" class="form-label">Address</label>
              <input type="text" class="form-control" id="address" required />
            </div>

            <hr style="background-color: #ccc; padding: 1px; border: none">

            <div class="row">
              <div class="mb-3 col-12 col-sm-6">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" required />
              </div>
              <div class="mb-3 col-12 col-sm-6">
                <label for="username" class="form-label">Username</label>
                <input
                  type="text"
                  class="form-control"
                  id="username"
                  required
                />
              </div>
            </div>
            <div class="row">
              <div class="mb-3 col-12 col-sm-6">
                <label for="password" class="form-label">Password</label>
                <input
                  type="password"
                  class="form-control"
                  id="password"
                  required
                />
              </div>
              <div class="mb-3 col-12 col-sm-6">
                <label for="confirmPassword" class="form-label"
                  >Confirm password</label
                >
                <input
                  type="password"
                  class="form-control"
                  id="confirmPassword"
                  required
                />
              </div>
            </div>
            <small class="d-block mb-3">Already have an account? <a href="login.php">Log in</a></small>
            <button class="btn btn-primary btn-block mb-1" type="submit">REGISTER</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</body>
</html>

<?php
  require_once "components/head.php";
  require_once './components/nav.php';
?>

  <div class="container">
    <div class="row px-2">
      <div class="card col-12 col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card-body">
          <form>
            <div class="row">
              <div class="mb-3 col-12">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" required />
              </div>
              <div class="mb-3 col-12">
                <label for="username" class="form-label">Username</label>
                <input
                  type="text"
                  class="form-control"
                  id="username"
                  required
                />
              </div>
              <div class="mb-3 col-12">
                <label for="password" class="form-label">Password</label>
                <input
                  type="password"
                  class="form-control"
                  id="password"
                  required
                />
              </div>
              <div class="mb-3 col-12">
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

<?php
  require_once "components/head.php";
  require_once './components/nav.php';
?>

  <div class="container">
    <div class="row px-2">
      <div class="card col-12 col-sm-9 col-md-7 col-lg-5 mx-auto">
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
            <div>
              <label for="password" class="form-label">Password</label>
              <input
                type="password"
                class="form-control"
                id="password"
                required
              />
            </div>
            <small class="d-block my-3">Doesn't have an account? <a href="register.php">Register now</a></small>
            <button class="btn btn-primary btn-block mb-1" type="submit">LOGIN</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
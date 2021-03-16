<?php
  // TODO: dodaj pocetak sesije ili u head ili u nav
  // TODO: dodaj na pocetak fajlova proveru ako je session id setovan prebaci ga na home ili shop, ako nije setovan prebaci ga na login ili landing page
  session_start();

  require_once '../db/conn.php';
  require_once '../validation/register.php';

  require_once "./components/head.php";
  require_once './components/nav.php';

  $isValid = true;
  $email = $username = $password = $confirmPassword = "";
  $emailErr = $usernameErr = $passwordErr = $confirmPasswordErr = $passwordMatchErr = false;

  $errMsg = "Invalid input.";
  $passwordMatchErrMsg = "Passwords must match.";

  if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = $_POST["email"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $confirmPassword = $_POST["confirmPassword"];

    if (!validateEmail($email)) {
      $isValid = false;
      $emailErr = true;
    }

    if (!validateUsername($conn, $username)) {
      $isValid = false;
      $usernameErr = true;
    }

    if (!validatePassword($password)) {
      $isValid = false;
      $passwordErr = true;
    }

    if (!validatePassword($confirmPassword)) {
      $isValid = false;
      $confirmPasswordErr = true;
    }

    if (!checkPasswordMatch($password, $confirmPassword)) {
      if (!$passwordErr && !$confirmPasswordErr) {
        $passwordErr = false;
        $confirmPasswordErr = false;
        $passwordMatchErr = true;
      }
      $isValid = false;
    }

    if ($isValid) {
      $email = $conn->real_escape_string($email);
      $username = $conn->real_escape_string($username);
      $password = $conn->real_escape_string($password);
      $confirmPassword = $conn->real_escape_string($confirmPassword);

      // TODO: prebaci na password_hash()
      $hashedPassword = md5($password);

      $sql = "INSERT INTO `users`(`username`, `pass`, `email`)
              VALUES ('$username', '$hashedPassword', '$email');"
      ;

      if ($conn->query($sql)) {
        $_SESSION["id"] = $user_id;
        header("Location: home.php");
      }
    }
  }
?>

  <div class="container">
    <div class="row px-2">
      <div class="card col-12 col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card-body">
          <form action="#" method="POST">
            <div class="row">

              <div class="mb-3 col-12">
                <label for="email" class="form-label">
                  Email*
                </label>
                <input
                  type="email"
                  name="email"
                  id="email"
                  class="form-control <?php if ($emailErr) echo 'is-invalid'; ?>"
                  value="<?php echo $email; ?>"
                  placeholder="test@test.com"
                  aria-describedby="emailHelpBlock"
                  required
                />
                <div id="emailHelpBlock" class="invalid-feedback">
                  <?php if ($emailErr) echo $errMsg; ?>
                </div>
              </div>

              <div class="mb-3 col-12">
                <label for="username" class="form-label">
                  Username*
                </label>
                <input
                  type="text"
                  name="username"
                  id="username"
                  class="form-control <?php if ($usernameErr) echo 'is-invalid'; ?>"
                  value="<?php echo $username; ?>"
                  placeholder="test-er.11"
                  aria-describedby="usernameHelpBlock"
                  required
                />
                <?php if (!$usernameErr) { ?>
                  <small id="usernameHelpBlock" class="form-text text-muted">
                    At least 3 characters (letters, numbers and @ . - _ # $).
                  </small>
                <?php } ?>
                <div id="usernameHelpBlock" class="invalid-feedback">
                  <?php if ($usernameErr) echo $errMsg; ?>
                </div>
              </div>

              <div class="mb-3 col-12">
                <label for="password" class="form-label">
                  Password*
                </label>
                <input
                  type="password"
                  name="password"
                  id="password"
                  class="form-control <?php if ($passwordErr || $passwordMatchErr) echo 'is-invalid'; ?>"
                  value="<?php echo $password; ?>"
                  aria-describedby="passwordHelpBlock"
                  required
                />
                <?php if (!$passwordErr && !$passwordMatchErr) { ?>
                  <small id="passwordHelpBlock" class="form-text text-muted">
                    At least 8 characters.
                  </small>
                <?php } ?>
                <div id="passwordHelpBlock" class="invalid-feedback">
                  <?php
                    if ($passwordErr) {
                      echo $errMsg;
                    } elseif ($passwordMatchErr) {
                      echo $passwordMatchErrMsg;
                    }
                  ?>
                </div>
              </div>

              <div class="mb-3 col-12">
                <label for="confirmPassword" class="form-label">
                  Confirm password*
                </label>
                <input
                  type="password"
                  name="confirmPassword"
                  id="confirmPassword"
                  class="form-control <?php if ($confirmPasswordErr || $passwordMatchErr) echo 'is-invalid'; ?>"
                  value="<?php echo $confirmPassword; ?>"
                  aria-describedby="confirmPasswordHelpBlock"
                  required
                />
                <?php if (!$confirmPasswordErr && !$passwordMatchErr) { ?>
                  <small id="confirmPasswordHelpBlock" class="form-text text-muted">
                    At least 8 characters.
                  </small>
                <?php } ?>
                <div id="confirmPasswordHelpBlock" class="invalid-feedback">
                  <?php
                    if ($confirmPasswordErr) {
                      echo $errMsg;
                    } elseif ($passwordMatchErr) {
                      echo $passwordMatchErrMsg;
                    }
                  ?>
                </div>
              </div>

            </div>
            <small class="d-block mb-3 text-right">Already have an account? <a href="login.php">Log in</a></small>
            <button class="btn btn-primary btn-block mb-1" type="submit">REGISTER</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</body>
</html>

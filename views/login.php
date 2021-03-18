<?php
  require_once "components/head.php";
  require_once './components/nav.php';

  //session_start();

  if(isset($_SESSION['user_id'])) {
      header("Location: home.php");
  }

  require_once "../db/conn.php";
  $loginErr = "";
  if($_SERVER["REQUEST_METHOD"] == "POST") {
      $username =  $conn->real_escape_string($_POST["username"]);
      $pass =  $conn->real_escape_string($_POST["pass"]);
      $val = true;
      if(empty($username)) {
          $val = false;
          $loginErr = "Username cannot be left blank!";
      }
      if(empty($pass)) {
          $val = false;
          $loginErr .= "<br>Password cannot be left blank!";
      }

      if($val) {
          $sql = "SELECT * FROM users WHERE username = '$username'";
          $result = $conn->query($sql);
          if($result->num_rows == 0) {
              $loginErr = "This username doesn't exist!";
          } else {
              $row = $result->fetch_assoc();
              $dbPass = $row["pass"];
              if(md5($pass) != $dbPass) {
                  $loginErr .= "<br>Incorect password!";
              } else {
                  $_SESSION["user_id"] = $row["id"];
                  $_SESSION['user_name'] = $row['username'];
                  header("Location: home.php");
              }
          }
      }
  }  
?>

    <div class="container">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
            <div class="card">
                <div class="card-header">
                    <h4>LOGIN<a class="btn btn-outline-primary float-right" href="register.php">or Register</a></h4>
                </div>

                <div class="card-body">
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">                    
                        <div class="form-group">
                            <label for="username">User Name *</label>
                            <input type="text" class="form-control" name="username" id="username" autofocus>
                        </div>
                        <div class="form-group">
                            <label for="pass">Password *</label>
                            <input type="password" class="form-control" name="pass" id="pass">
                        </div>                
                        <input type="submit" value="Login" class="btn btn-primary form-control">
                        <small class="d-block my-3">Doesn't have an account? <a href="register.php">Register now</a></small>
                    </form>
                </div>

                <div class="card-footer">
                    <span class="error"><?php echo $loginErr; ?></span>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
<style>
  #ddAvatar {
    width: 50px;
    border: 1px solid black;
    border-radius: 50%;
    padding: 2px;
    cursor: pointer;
  }
</style>

<nav class="container navbar navbar-expand-md navbar-light bg-light mb-5">

  <a class="navbar-brand" href="home.php"><img width=140; id="logo" src="images/logo.png" alt="logo"></a>
  

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="collapsibleNavbar">

    <ul class="navbar-nav flex-grow-1 text-center">
      <li class="nav-item active">
        <a class="nav-link font-weight-bold" href="home.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link font-weight-bold" href="shop.php">Shop</a>
      </li>
      <li class="nav-item">
        <a class="nav-link font-weight-bold" href="about.php">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link font-weight-bold" href="contact.php">Contact</a>
      </li>
      <li class="nav-item">
        <a class="nav-link font-weight-bold" href="checkout.php">Checkout</a>
      </li>
    </ul>

<?php
  session_start();

  if(isset($_SESSION['user_id'])) { ?>
    <p class="nav-link font-weight-bold">Hello, <?php echo $_SESSION['user_name']; ?></p>
    <div class="dropdown">
      <img class="dropdown-toggle" id="ddAvatar" src="<?php echo "profile/avatars/" . $_SESSION['user_name'] . ".jpg"; ?>" alt="" onerror="this.onerror=null; this.src='profile/avatars/noImage.png'" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="ddAvatar">
        <a class="dropdown-item" href="profile.php">Profile</a>
        <a class="dropdown-item" href="logout.php">Logout</a>
      </div>
    </div>
  <?php
    } else { ?>

    <ul class="navbar-nav nav text-center">
      <li class="nav-item">
        <a class="nav-link" href="login.php">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link pr-0" href="register.php">Register</a>
      </li>
    </ul>
  <?php
  }
?>


  </div>

</nav>


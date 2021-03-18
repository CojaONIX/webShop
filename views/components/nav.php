

<nav class="navbar navbar-expand-md navbar-light bg-light mb-5">

  <a class="navbar-brand" href="home.php"><img id="logo" src="images/logo.png" alt="logo"></a>
  

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="collapsibleNavbar">

    <ul class="navbar-nav flex-grow-1 text-center">
      <li class="nav-item active">
        <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="shop.php">Shop</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact.php">Contact</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="checkout.php">Checkout</a>
      </li>
    </ul>

<?php
  session_start();

  if(isset($_SESSION['user_id'])) { ?>
      <ul class="navbar-nav nav text-center">
      <li class="nav-item">
        <a class="nav-link" href="profile.php">Hello, <?php echo $_SESSION['user_name']; ?></a>
      </li>
      <li class="nav-item">
        <a class="nav-link pr-0" href="logout.php">Logout</a>
      </li>
    </ul>
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

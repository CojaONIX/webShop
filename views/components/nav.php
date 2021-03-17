<!-- TODO: ovde treba da se ispita da li je korisnik logovan, ako nije prikazi samo login/register -->
<!-- TODO: ako jeste, prikazi, ostalo i logout... -->
<!-- TODO: ako je korisnik admin (role === "admin" - treba da se prepravi baza) onda ubaci i link ka admin stranicama (ADMIN) -->
<!-- TODO: mozda da se stavi podmeni za admina ako ima vise linkova/stranica, ili na admin stranicama da se ubaci jos jedan navbar -->

<!-- REMINDER: neka u tabeli "users" default "role" vrednost php postavlja kao "user", a rucno ce se unositi admini (role === "admin")  -->

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
        <a class="nav-link" href="#">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contact</a>
      </li>
    </ul>

    <ul class="navbar-nav nav text-center">
      <li class="nav-item">
        <a class="nav-link" href="login.php">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link pr-0" href="register.php">Register</a>
      </li>
    </ul>

  </div>

</nav>

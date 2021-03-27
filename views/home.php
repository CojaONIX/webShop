

<?php
    $title = "Home";
    require_once "components/head.php";
?>

<?php
    include "components/nav.php";
    $_SESSION['back_page'] = basename($_SERVER['PHP_SELF']);
?>

<?php
    include "components/cart.php";
?>

<?php
    include "components/slider.php";
?>

<?php
    include "components/commercials.php";
?>

<?php
    include "components/nav_categories.php";
?>

<?php
    include "components/featured.php";
?>

<?php
    require_once "components/footer.php";
?>
</body>
</html>

<?php
  // TODO: mozda da dodas ispitivanje vise slucajeva i vracanje kustomizovanih poruka...?

  // ! validacija za first n last name, country, city, address (neka ga za sada da svi mora da budu do 45 karaktera)
  function validateString($str) {
    $except = preg_match('/[^a-zA-Z\ĐđŽžĆćČčŠš\s]/', $str);
    $length = strlen($str);

    if (!$except && $length <= 45) {
      return trim(preg_replace('/\s\s+/', ' ', $str));
    }
    return false;
  }

  // ! validacija za postal code, phone (neka ga za sada da oba mora da budu do 10 brojeva)
  function validateNumber($str) {
    $except = preg_match('/\d/', $str);
    $length = strlen($str);

    //  TODO: usaglasi sa bazom, da li da se primora unosenje striktnog broja cifara, ili koliko minimum cifara mora...
    if (!$except && $length <= 10) return true;
    return false;
  }

  function validateEmail($str) {
    $except = preg_match('/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix', $str);
    $length = strlen($str);

    // TODO: dodaj proveru da li u bazi vec postoji email
    if ($except && $length <= 45) return true;
    return false;
  }

  function validateUsername($conn, $str) {
    // TODO: mozda da izbacis potpuno ili smanjis broj dozvoljenih spec chara
    $except = preg_match('/[^a-zA-Z\ĐđŽžĆćČčŠš\d\.\@\-\_\#\$]/', $str);
    $length = strlen($str);

    if (!$except && $length >= 3 && $length <= 45) {
      $sql = "SELECT * FROM users WHERE username = '$str'";

      if (!$conn->query($sql)->num_rows) return true;
    }
    return false;
  }

  function validatePassword($str) {
    $length = strlen($str);

    // TODO: u bazi je stavljeno CHAR(32), toliko vraca md5(), ako se prebacujes na password_hash() stavi VARCHAR(255)
    // TODO: dodaj regex za proveru da li sadrzi barem 1 veliko slovo, 1 specijalan char i 1 broj
    if ($length >= 8 && $length <= 32) return true;
    return false;
  }

  function checkPasswordMatch($str1, $str2) {
    if ($str1 === $str2) return true;
    return false;
  }
?>

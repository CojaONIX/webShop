<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>phpShop - Home</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">
    <script src="main.js"></script>

    <style>
        
    </style>
</head>
<body>
    <?php
        include "nav.php";
    ?>

    <h1>Home stranica</h1>
    <p>Ceo projekat radimo po uzoru na: <a href="https://www.nopcommerce.com/en/demo">nopCommerce</a>. Cini mi se da je najbolje po dizajnu i funkcionalnostima.</p>
    <p>Pogledajte Admin area i Frontend demo stranice. Odatle cemo da izaberemo sta da radimo.</p>

    <h3>Bootstrap dizajn</h3>
    <p>Oko dizajna ne moramo nesto da se posebno trudimo u pocetku. Bitno je da ima responsive sto bs odmah omogucava. Kasnije mozemo da doradjujemo sam dizajn. Verzija 4.5.2 - izasao je i 5 ali da ne proucavamo sada razlike. </p>

    <h3>Stranica Home:</h3>
    <p>U pocetku treba da uma meni vidljivih strana za korisnika i login i register. Neke reklame, moze samo u bs slajderu. Nove proizvode i mozda Na popustu. Footer sa linkovima.</p>

    <h3>Korpa</h3>
    <p>Zajednicka za sve strane. Neka cuva narucene na local (realizacija preko jQuery ili js), kasnije cemo razmotriti mogucnosti i potrebu da se cuva u bazi.</p>

    <h5>Stilove i js bih da pisemo trenutno u stranicama, zbog boljeg fokusa sta rade. Kasnije da sve prebacimo u externe fajlove.</h5>




    <?php
        include "inter/nav_inter.html";
        include "footer.php";
    ?>

    <script>
    
    </script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categortries</title>
</head>
<body>
    <?php
        $id = $_GET['id'];
        echo "id = " . $id;
    ?>
    <h2>Forma za brisanje kategorije, samo ako je 'prazna'.</h2>
    <h2>Moze Prikaz podataka kao u R_*</h2>
    <h2>Forma ima samo id kategorije koji se brise.</h2>
    <h2>Povratak na admin index (odustajemo od brisanja).</h2>
</body>
</html>
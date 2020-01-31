<?php
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sõiduaeg Form</title>
</head>
<body>
<form action="Sõiduaeg.php" method="get">
    <h3>Lisa sõiduaeg:</h3>
    <label for="algus_aeg">Algus: </label>
    <input type="text" name="algus_aeg" id="algus_aeg" placeholder="HH:MM">
    <br>
    <label for="lopp_aeg">Lõpp: </label>
    <input type="text" name="lopp_aeg" id="lopp_aeg" placeholder="HH:MM">
    <input type="submit" value="Salvesta.csv">
</form>
</body>
</html>
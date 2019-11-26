<?php
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>06 - PHP - Vormid</title>
</head>
<body>
    <h1>Andmed</h1>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="get">
        <h3>Kera</h3>
        Radius <input type="text" name="Kera.r"><br>

        <h3>Koonus</h3>
        Radius <input type="text" name="K.raadius"><br>
        Korgus <input type="text" name="K.korgus"><br>

        <h3>Silindri ruumala</h3>
        Radius <input type="text" name="S.r"><br>
        Korgus <input type="text" name="S.k"><br>
        <input type="submit" value="Saada">
    </form>
</body>
</html>
<menu>
    <a href="index.php?leht=avaleht">Avaleht</a>
    <a href="index.php?leht=Porfoolio">Portfoolio</a>
    <a href="index.php?leht=Kaart">Kaart</a>
    <a href="index.php?leht=Kontakt">Kontakt</a>
</menu>

<?php
if (!empty($_GET['leht'])){
    $leht = htmlspecialchars($_GET['leht']);
    $lubatud = array('avaleht', 'Porfoolio', 'Kaart', 'Kontakt');
    $kontroll = in_array($leht, $lubatud);
    if ($kontroll == true) {
        include($leht . '.php');
    } else {
        echo 'Valitud lehte ei eksisteeri!';
    }
}
?>

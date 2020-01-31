<?php
// uhenduse oloomine

function connect($host, $user, $pass, $dbname){
    // uhendus
    $link = mysqli_connect($host, $user, $pass, $dbname);
    // kui uhendust ei tekkinud
    if($link === false){
        echo "Pois, sull on probleem.<br>";
        exit;
    }
    mysqli_set_charset($link, 'utf8');

    //olevasolev uhendus tagastame pohiprogrammile
    return $link;
}

// paringu saatmine

function query($sql, $link){
    $result = mysqli_query($link, $sql);
    if($result === false){
        echo 'Probleem paringuga <b>'.$sql.'</b><br>';
     return false;
    }
    return $result;
}

function getData($sql, $link) {
    $result = query($sql, $link);
    $data = array();
    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
        $data[] = $row;
    }
    if(count($data) == 0) {
        return false;
    }
    return $data;
}
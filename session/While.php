<?php error_reporting(-1); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<?php

//$i = 1;
//echo '<table border = "3">' . "\n";
//while($i <= 10){
//    echo "\t<tr>\n";
//    $n = 1;
//    while($n <=10){
//        $s = $i*$n;
//        echo "\t\t<td>  $i * $n = $s </td>" . "\n";
//        $n++;
//    }
//    echo "\t</tr>\n";
//    $i++;
//}
//echo '</table>';


echo '<table border = "3">' . "\n";
for ($i = 1; $i <= 10; $i++) {
    echo "\t<tr>\n";

    for ($n = 1; $n <= 10; $n++) {
        $s = $i*$n;
        echo "\t\t<td>  $i * $n = $s </td>" . "\n";
    }
    echo "\t</tr>\n";
}
echo '</table>';

/*$i = 1;
while($i <= 10){
	echo $i . '<br>';
	$i++; // $i = $i + 1; $i += 1;
}*/

/*$i = 1;
echo "<table border=\"1\">\n";
while($i <= 15){
	echo "\t<tr>\n";
	$n = 1;
	while($n <= 5){
		echo "\t\t<td>Row $i | Col - $n</td>\n";
		$n++;
	}
	echo "\t</tr>\n";
	$i++;
}
echo '</table>';*/

/*$year = 1900;
echo '<select>' . "\n";
	while($year <= 2015){
		echo "\t<option value='$year'>$year</option>\n";
		$year++;
	}
echo '</select>';*/

/*$i = 11;
while($i <= 10){
	echo $i++ . '<br>';
}*/

//$i = 10;
//do{
//    echo $i++ . '<br>';
//}while($i <= 10);
//
//
?>

</body>
</html>
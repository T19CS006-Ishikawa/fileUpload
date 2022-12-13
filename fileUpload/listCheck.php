<?php
$result = glob('./upfile/*.txt');
var_dump($result);
/*
$fname = $result[0];
$handle = fopen($fname,"r");
while($line = fgets($handle)){
    echo $line;
}
*/
$count = 0;
/*
while($count <= count($result) ){
    echo $result[$count];
    echo '<br>';
    $count++;
}
fclose($handle);
*/

  ?>

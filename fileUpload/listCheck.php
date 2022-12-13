<?php
$result = glob('./upfile/*.txt');
var_dump($result);

$count = 0;
$name = array();
$path = $result[0];
echo $path;
/*
while($count <= count($result) ){
    //echo $result[$count];
    $name[] = $result[$count];
    echo $name[$count];
    echo '<br>';
    $count++;
}
*/


//fclose($handle);


  ?>

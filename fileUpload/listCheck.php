<?php
$result = glob('./upfile/*.csv');
var_dump($result);

$count = 0;
$name = array();
$path = $result[0];
echo $path."<br>";

$rf = fopen($path,"r");

fclose(handle);

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

<?php
$result = glob('./upfile/*.txt');
var_dump($result);

$count = 0;
$name = array();
while($count <= count($result) ){
    //echo $result[$count];
    $name[] = $result[$count];
    echo $name[$count];
    echo '<br>';
    print($name);
    echo '<br>';
    $count++;
}


//fclose($handle);


  ?>

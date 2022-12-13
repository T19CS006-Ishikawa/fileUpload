<?php
$result = glob('./upfile/*.txt');
var_dump($result);

$count = 0;

while($count <= count($result) ){
    echo $result[$count];
    echo '<br>';
    $count++;
}
$path =  fopen($result[0],"r");

while($line = fgets($path)){
    echo $line."<BR>";
}

fclose($path);

//fclose($handle);


  ?>

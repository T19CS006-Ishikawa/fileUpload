<?php
$result = glob('./upfile/');
//var_dump($result);
$fname = $result[0];
$handle = fopen($fname,"r");
while($line = fgets($handle)){
    echo $line;
}
fclose($handle);

  ?>

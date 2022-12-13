
<?php
//呼び出されるPHP(ex. getPath.php)
//$dir = @opendir('/upfile');

$result = glob('./upfile/*.csv');

//var_dump($result);

$handle = fopen("./upfile/list.txt","a");

$cCount = 0;
while($cCount <= count(result)){
    fputs($handle, $result[cCount]."<br>");
    $cCount++;
}

fclose($handle);
$print = fopen("./upfile/list.txt","r");
while($line = fgets($print)){
    echo $line;
}
fclose($print);
/*
$count = 0;

while($count <= count($result) ){
    echo $result[$count];
    echo '<br>';
    $count++;
}
*/
?>






<?php
//呼び出されるPHP(ex. getPath.php)
//$dir = @opendir('/upfile');

$result = glob('./upfile/*.csv');

//var_dump($result);

$handle = fopen("list.txt","a");

$cCount = 0;
while($cCount <= count(result)){
    fputs($handle, $result[cCount]."<br>");
    $cCount++;
}
fclose($handle);

/*
$count = 0;

while($count <= count($result) ){
    echo $result[$count];
    echo '<br>';
    $count++;
}
*/
?>






<?php
//呼び出されるPHP(ex. getPath.php)
//$dir = @opendir('/upfile');

$result = glob('./upfile/*.csv');
//var_dump($result);
$count = 0;

while($count <= count($result) ){
    echo $result[$count];
    echo '<br>';
    $count++;
}
?>





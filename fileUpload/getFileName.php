
<?php
//呼び出されるPHP(ex. getPath.php)
//$dir = @opendir('/upfile');

$result = glob('./upfile/*');

//var_dump($result);


$print = fopen("./upfile/list.txt","r");

    echo $print;
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





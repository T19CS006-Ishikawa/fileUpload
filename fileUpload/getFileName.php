
<?php
//呼び出されるPHP(ex. getPath.php)
//$dir = @opendir('/upfile');

$result = glob('./upfile/*');

//var_dump($result);


$print = fopen("./upfile/list.txt","r");
$name = fgets($print);
echo $name;
/*
while($line = fgets($print)){
    echo $line;
}
fclose($print);
*/

/*
$count = 0;

while($count <= count($result) ){
    echo $result[$count];
    echo '<br>';
    
    $count++;
}
*/
?>





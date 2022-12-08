
<?php
//呼び出されるPHP(ex. getPath.php)
//$dir = @opendir('/upfile');

$result = glob('./SampleDirectory/*.php');
var_dump($result);
?>





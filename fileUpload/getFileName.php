

<?php
//呼び出されるPHP(ex. getPath.php)
$dir = @opendir('/fileup');

if($dir)
{
while($file = readdir($dir)) 
{
 if (!is_dir($file)){echo $file ."\n";}
}
closedir($dir);
}

?>



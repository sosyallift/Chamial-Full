<?php 
echo __FILE__;exit;
$f = fopen('test.txt', 'w+');
fwrite($f, 'Hoang XUan Hao');
fclose($f);
?>
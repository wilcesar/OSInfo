<?php 
session_start();
session_unset();
session_destroy();

echo 'Obrigado pela preferencia';
$meta = '<meta http-equiv="refresh" content="2;URL=../Login/logar.php" />';
echo $meta;
?>
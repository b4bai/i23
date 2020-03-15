<?php
setcookie('cnt',1);
echo "hello".$_POST['txt1']."<br>";
echo "you have access page ".$_COOKIE['cnt']."times<br>";
$_COOKIE['cnt']=$_COOKIE['cnt']+1;
echo "<a href='slip13.php'>slip13.php</a>";
?>

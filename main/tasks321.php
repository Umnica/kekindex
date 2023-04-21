<?php
print "Задание к Модулю 3<br><br>";

print "Задание 2.1 <br><br>";

$num = isset($_GET['a']) ? intval($_GET['a']) + 1 : 0;
echo "<a href='?a=$num'>$num</a>";

?>


<a class="nav-item" href="tasks321.php">Задание 3.2.1</a>
<a class="nav-item" href="tasks322.php">Задание 3.2.2</a>
<a class="nav-item" href="tasks323.php">Задание 3.2.3</a>
<br>


<?php
print "Задание к Модулю 3<br><br>";

print "Задание 2.1 <br><br>";

$num = isset($_GET['a']) ? intval($_GET['a']) + 1 : 0;
echo "<a href='?a=$num'>$num</a>";

?>


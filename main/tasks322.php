<?php
print "Задание к Модулю 3<br><br>";

print "Задание 2.2 <br><br>";

$num = isset($_GET['a']) ? intval($_GET['a']) : 0;

$num1 = $num*10+1;
$num2 = $num*10+2;
$num3 = $num*10+3;
$num4 = $num*10+4;
$num5 = $num*10+5;
$num6 = $num*10+6;
$num7 = $num*10+7;
$num8 = $num*10+8;
$num9 = $num*10+9;
$num10 = $num*10+10;

$next = isset($_GET['a']) ? intval($_GET['a']) + 1: 0;
$prev = isset($_GET['a']) ? intval($_GET['a']) - 1: 0;

if (intval($_GET['a']) != 0) {	
	echo "<a href='?a=$prev'><<</a>";
}

echo "<div>$num1 $num2 $num3 $num4 $num5 $num6 $num7 $num8 $num9 $num10</div>";


echo "<a href='?a=$next'>>></a>";

?>


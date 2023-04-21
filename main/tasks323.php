<?php

if (isset($_GET['page'])) {
	$temp = intval($_GET['page']);
	echo "Это страница № $temp";
	return;
}

print "Задание к Модулю 3<br><br>";

print "Задание 2.3 <br><br>";



$num = isset($_GET['a']) ? intval($_GET['a']) : 0;

$page = isset($_GET['page']) ? intval($_GET['page']) : 0;

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

echo "<br>";

echo "<a href='?page=$num1'>$num1 </a>";
echo "<a href='?page=$num2'>$num2 </a>";
echo "<a href='?page=$num3'>$num3 </a>";
echo "<a href='?page=$num4'>$num4 </a>";
echo "<a href='?page=$num5'>$num5 </a>";
echo "<a href='?page=$num6'>$num6 </a>";
echo "<a href='?page=$num7'>$num7 </a>";
echo "<a href='?page=$num8'>$num8 </a>";
echo "<a href='?page=$num9'>$num9 </a>";
echo "<a href='?page=$num10'>$num10 </a>";


echo "<br>";

echo "<a href='?a=$next'>>></a>";

?>


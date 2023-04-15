<?php
print "Задание к Модулю 3<br><br>";

print "Задание 1. Калькулятор<br><br>";

print "
<form name='form' action='tasks3.php' method='get'>
<input type='text' name='a' id='a' placeholder='a'>
<input type='text' name='b' id='b' placeholder='b'>
<input type='text' name='op' id='op' placeholder='op'>
<button type='submit'>Решить</button>
</form>
";

$a = intval($_GET['a']);
$b = intval($_GET['b']);
$op = $_GET['op'];

print 
"a: $a<br>
 b: $b<br>
 op: $op<br>";

 function cal($a, $b, $op)
 {
    $res='ошибка';

    if ($op == '+') { $res = $a + $b; }
    if ($op == '-') { $res = $a - $b; }
    if ($op == '*') { $res = $a * $b; }
    if ($op == '/' && $b != 0) { $res = $a / $b; }

    return $res;
 }

$res = cal($a, $b, $op);
print "<br>Решение: $res<br><br>";











?>
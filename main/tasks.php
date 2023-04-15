 <?php


echo $_GET['subject'];

print "1";
print "<br>";
print "Создайте программу, выводящую числа от 1 до 100.";
print "<br>";

for ($i=1; $i<=100; $i++){
    print $i;
    print " ";

    if (fmod($i, 10) == 0) {
        print "<br>";
    }
}



///////////1//////////////////
print "1.1.";
print "<br>";
print "Создайте программу, выводящую числа в таблице по возрастанию слева направо, по 10 чисел в строке.";
print "<br>";

print "<table border='1'>";
for ($i=1; $i<=10; $i++){
    print "<tr>";
    for($j=1; $j<=10; $j++){
        $k = ($i-1) * 10 +  $j;
        print "<td> $k </td>";
    }
    print "</tr>";
}
print "</table>"; 
    

print "1.2.";
print "<br>";
print "Введите управляющую переменную $m,10<$m<100
, значение которой будет задаваться в начале программы. Программа должна выводить таблицу чисел от 1 до $m
, по 10 чисел в строке.";
print "<br>";

$m = 50; 
print "<table border='1'>";
for ($i = 1; $i <= $m; $i++){
    print "<tr>";
    for($j=1; $j<=10; $j++){
        $k = ($i-1) * 10 +  $j;
        print "<td> $k </td>";
    }
    print "</tr>";
}
echo "<table>"; 

print "<br>";

for ($i=1; $i<=100; $i++){
    print $i;
    print " ";

    if (fmod($i, 10) == 0) {
        print "<br>";
    }
}

///////////1.4//////////////////

$c = 3; // значение управляющей переменной
echo "<table>";

for ($i = 1; $i <= 10; $i++) {
  echo "<tr>";
  for ($j = 1; $j <= 10; $j++) {
    $color = ($i * $j) % $c == 0 ? "red" : "black";
    echo "<td style='color: $color'>" . $i * $j . "</td>";
  }
  echo "</tr>";
}

echo "</table>";









?>
<?php
$p = intval($_GET['p']);
$m = intval($_GET['m']);

print "<body>
    
    <form name='form' action='tasks.php' method='get'>
      <input type='text' name='p' id='p' placeholder='p'>
      <input type='text' name='m' id='m' placeholder='m'>
      <input type='text' name='c' id='c' placeholder='c'>
      <button type='submit'>Решить</button>
    </form>

</body>";


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
print "<br>";

/////////////////////////////

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
print "<br>";

//////////////////////////////

print "1.2";
print "<br>";
print "Введите управляющую переменную $ m,10<$ m<100
, значение которой будет задаваться в начале программы. Программа должна выводить таблицу чисел от 1 до $m
, по 10 чисел в строке.";
print "<br>";
print "<br>";

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

///////////////////////////////

print "1.3";
print "<br>";
print "Введите управляющую переменную $ p,1<$ m<20
, значение которой будет задаваться в начале программы. Программа должна выводить таблицу чисел от 1 до $ m,
 по $ p
 чисел в строке. Для последней ячейки, при необходимости, используйте colspan.";
print "<br>";
print "<br>";



print "<table border='1'>";

for ($i = 1; $i <= $m; $i++){
    print "<tr>";
    for($j=1; $j<=$p; $j++){
        $k = ($i-1) * $p +  $j;
        print "<td> $k </td>";
    }
    print "</tr>";
}

echo "<table>"; 
print "<br>";

/////////////////1.4///////////////////
print "1.4";
print "<br>";
print "Введите управляющую переменную $ c,1 < $ c < 10,
значение которой будет задаваться в начале программы.
Программа должна выводить ту же таблицу, подкрашивая все числа кратные 
$ c
красным цветом.";
print "<br>";

print "<table border='1' >";

for ($i=0; $i<intval($_GET['p']); $i++) {
    print "<tr>";
    for ($j=1; $j<=intval($_GET['m']); $j++) {

        $color = fmod((intval($_GET['m'])*$i+$j) , 
        intval($_GET['c'])
        ) == 0 ? "red" : "black";
        print "<td style='color: $color'>" . (intval($_GET['m'])*$i+$j) . "</td>";

    }
    print "</tr>";
}

print "</table>"; 





/////////////////2///////////////////
print "2, 2.1";
print "Введите две управляющие переменные $ nmax,$ mmax,
значения которых задаются в начале программы. Таблица, выводимая программой, должна быть размерности $ nmax∗$ mmax.";
print "<br>";

print "<br>";
print "<table border='1' >";

for ($i=0; $i<intval($_GET['p']); $i++) {
    print "<tr>";
    for ($j=1; $j<=intval($_GET['m']); $j++) {

        print "<td>" . (($i+1)*$j) . "</td>";

    }
    

    print "</tr>";
}

print "</table>"; 


/////////////////2.2///////////////////
print "2.2";

print "<body>
    
    <form name='form' action='tasks.php' method='get'>
      <input type='text' name='nMin' id='nMin' placeholder='nMin'>
      <input type='text' name='nMax' id='nMax' placeholder='nMax'>
      <input type='text' name='mMin' id='mMin' placeholder='mMin'>
      <input type='text' name='mMax' id='mMax' placeholder='mMax'>
      <button type='submit'>Решить</button>
    </form>

</body>";

print "<br>";
print "<table border='1' >";

for ($i=0; $i<intval($_GET['nMax']); $i++) {
    if ($i+1 > intval($_GET['nMin'])) {
        print "<tr>";
        for ($j=1; $j<=intval($_GET['mMax']); $j++) {

            if ($j > intval($_GET['mMin'])) {
                print "<td>" . (($i+1)*$j) . "</td>";
            }
            
        }
    }
    

    print "</tr>";
}

print "</table>"; 




?>
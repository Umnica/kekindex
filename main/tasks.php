 <?php

print "<body>
    
    <form name='form' action='tasks.php' method='get'>
      <input type='text' name='p' id='p' placeholder='p'>
      <input type='text' name='m' id='m' placeholder='m'>
      <input type='text' name='c' id='c' placeholder='c'>
      <button type='submit'>Решить</button>
    </form>

</body>";

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

$m = intval($_GET['p']); 
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



///////////1.2//////////////////



print "<br>";

for ($i=1; $i<=intval($_GET['m']); $i++){
    print $i;
    print " ";

    if (fmod($i, 10) == 0) {
        print "<br>";
    }
}



///////////1.3//////////////////


print "<br>";

for ($i=1; $i<=intval($_GET['p']); $i++){
    print $i;
    print " ";

    if (fmod($i, intval($_GET['m'])) == 0) {
        print "<br>";
    }
}



/////////////////1.4///////////////////
print "1.4";

print "<br>";
print "<table border='1' >";

for ($i=0; $i<intval($_GET['p']); $i++) {
    print "<tr>";
    for ($j=1; $j<=intval($_GET['m']); $j++) {


        $color = fmod((intval($_GET['m'])*$i+$j) , intval($_GET['c'])) == 0 ? "red" : "black";
        print "<td style='color: $color'>" . (intval($_GET['m'])*$i+$j) . "</td>";

    }
    

    print "</tr>";
}

print "</table>"; 


?>
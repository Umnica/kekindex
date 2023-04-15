 <?php


echo $_GET['subject'];

print "<br>";

for ($i=1; $i<=100; $i++){
    print $i;
    print " ";

    if (fmod($i, 10) == 0) {
        print "<br>";
    }
}



///////////1//////////////////

    print "<table border='1'>";
        for ($i
=1; $i
<=100; $i
++){
            print "<tr>";
                print "<td> $i
 </td>";
            print "</tr>";
        }
    print "</table>"; 
    
///////////1.1//////////////////


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
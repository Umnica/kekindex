 <?php

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

    









?>
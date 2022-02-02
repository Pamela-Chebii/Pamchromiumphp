<?php


echo "<h3>Switch Statements</h3>";
$day = "Wed";

switch ($day){

    case "Mon":
        echo "Today is Monday, Read a book";
        break;
    case "Tue":
        echo "Today is Tuesday, Learn Javascript";
        break;
    case "Wed":
        echo "Today is Wednesday, Learn PHP";
        break;
    case "Thur":
        echo "Today is Thursday, Go swimming";
        break;
    case "Fri":
        echo "Today is Friday, Go for prayers";
        break;
    Default:
        echo "Rest, its the weekend";
        break;

}

echo "<h3>While Loops</h3>";

$a = 1;
while ($a <=10 ){
    $a++;
    echo "The value of a is $a <br>";
}

echo "<h3>Do While Loops</h3>";

$b = 1;
do{
    $b++;
    echo "The value of b is $b <br>";
}
while ($b<=10);


echo "<h3>For Loops</h3>";
for($c=1; $c<=8; $c++){
    echo "The value of c is $c <br>";
}
echo "<hr>";

echo "<h3>Even Numbers</h3>";
for($d=0; $d<=50; $d+=2){
    echo "The value of d is $d <br>";
}
echo "<h3>Odd Numbers</h3>";
for($e=1; $e<=50; $e+=2){
    echo "The value of e is $d <br>";
}

echo "<h3>Pattern</h3>";

$n = 7;

for ($i = 0; $i < $n; $i++) {

    for ($j = 0; $j <= $i; $j++) {
        echo "*";
    }
    echo "<br>";
}
echo "<h3>Pattern</h3>";
for($row=1; $row<=7; $row++){
    for ($star=1; $star<$row;$star++){
        print "*";
    }
    echo "<br>";
}




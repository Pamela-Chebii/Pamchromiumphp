<?php
echo "<h3>Switch Statements</h3>";

$day = "sun";

switch ($day){

    case "Mon":
        echo "Today is Monday, Go to school";
        break;
    case "Tue":
        echo "Today is Tuesday, do homework";
        break;
    case "Wed":
        echo "Today is Wednesday, do physical exercise";
        break;
    case "Thur":
        echo "Today is Thursday, read a novel";
        break;
    default:
        echo "Today is weekend, take a rest";
        break;
}
echo "<br>";
echo "<h3>Favourite color</h3>";
$favcolor = "purple";

switch ($favcolor){
    case "red":
        echo "Your favourite color is red";
        break;

    case "orange":
        echo "Your favourite color is orange";
        break;

    default:
        echo "Neither green nor red";
}


echo "<h3>While loop</h3>";
$i = 1;

while
($i < 6)
{

    echo "$i <br>";
    $i++;
}

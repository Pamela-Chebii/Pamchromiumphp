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
($i <= 8)
{

    echo "$i <br>";
    $i++;
}

echo "<br>";
echo "<h3>Do While loop</h3>";
$f = 1;
do{
    echo "The value of f is $f <br>";
    $f++;
}
while($f<=8);

echo "<h3>Indexed Array</h3>";

$color = array("red", "green", "orange", "purple");
print_r($color);
echo "<br>";
foreach ($color as $value){
    echo "$value<br>";
}

echo "<h3>Associative Array</h3>";

$age = array("Mark"=>30, "Pamela"=>26, "Grace"=>34, "James"=>37);
print_r($age);
echo "<br>";
foreach ($age as $key=>$value){
    echo "Your age $key is $value<br>";
}
// Sorting according to values ascending order
asort($age);
print_r($age);
echo "<br>";

// Sorting according to values descending order
arsort($age);
print_r($age);
echo "<br>";

echo "<h3>Pattern</h3>";
for ($x=0;$x<=6;$x++){ //increments the value of X by 1
    for ($y=0;$y<=$x;$y++){ //replaces the value of X by *
        echo "*";
    }
    echo "<br>";
}
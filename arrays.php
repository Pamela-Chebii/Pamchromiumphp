<?php

echo "<h3>Indexed Array</h3>";

$language= array("Javascript", "PHP", "Ruby", "R");
print_r($language);
echo "<br>";

foreach ($language as $value){
    echo "$value <br>";
}

//sorting in ascending order

sort($language);
print_r($language);
echo "<br>";
//sorting in descending order
rsort($language);
print_r($language);

echo "<br>";
echo "<hr>";

echo "<h3>Associative Array</h3>";

$marks = array("peter"=>34, "Jane"=>67, "Henry"=>87, "Lucy"=>45);

print_r($marks);
echo "<br>";
foreach ($marks as $key=>$value){
    echo "Your marks $key is $value <br>";

}

//sorting in ascending order by value

asort($marks);
print_r($marks);
echo "<br>";

//sorting in descending order by value
arsort($marks);
print_r($marks);
echo "<br>";

//sorting in ascending order by key

ksort($marks);
print_r($marks);
echo "<br>";

//sorting in descending order by key
krsort($marks);
print_r($marks);

echo "<br>";
echo "<hr>";

echo "<h3>Multidimensional Array</h3>";

$contacts = array(
    array(
        "name"=>"Pamela Chebii",
        "email" => "pamela@gmail.com",
        "pnumber" =>"0722123123"
    ),
    array(
        "name"=>"Mercy Nyakio",
        "email" => "nyakio@gmail.com",
        "pnumber" =>"0722453173"
    ),
    array(
        "name"=>"Grace Ndung'u",
        "email" => "grace@gmail.com",
        "pnumber" =>"0717454273"
    )
);

echo "Email address for Grace is " .$contacts[2]["email"];

echo "<br>";

// Print all the values for each person
$num =0;
foreach ($contacts as $person){
    $num++;
    echo "<br><b>Person #$num</b><br>";
    foreach ($person as $key=>$value){
        echo "$key: $value <br>";
    }

}
echo "<br>";
/*
$keys = array_keys($contacts);
for($i = 0; $i < count($contacts); $i++) {
    echo $keys[$i] . "<br>";
    foreach($contacts[$keys[$i]] as $key => $value) {
        echo $key . " : " . $value . "<br>";
    }
    echo "<br>";
}
*/
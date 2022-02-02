<?php

echo  "<h3>Arithmetic Operations</h3>";
$num1 = 34; $num2 = 45;

$sum = $num1 + $num2;
$sub = $num2 - $num1;
$prod = $num1 * $num2;
$div = $num2 / $num1;
$mod = $num2 % $num1;

echo "The sum of $num1 & $num2 is $sum";
echo "<br>";
echo "The diff of $num1 & $num2 is $sub";
echo "<br>";
echo "The product of $num1 & $num2 is $prod";
echo "<br>";
echo "The div of $num1 & $num2 is $div";
echo "<br>";
echo "The mod of $num1 & $num2 is $mod";
echo "<br>";

echo "<br>";

echo  "<h3>Assignment Operations</h3>";
$a = 10;
print "$a";
echo "<br>";

$a += 10;
print "The new value of a is $a";
echo "<br>";

$a *= 10;
print "The new value of a is $a";
echo "<br>";
$a -= 10;
print "The new value of a is $a";
echo "<br>";
$a /= 10;
print "The new value of a is $a";
echo "<br>";

$a %= 10;
print "The new value of a is $a";
echo "<br>";


echo "<hr>";


echo  "<h3>Decremnt/ Increment Operations</h3>";

$b = 50;

echo "The value of b is $b";
echo "<br>";

$b++;
echo "The value of b is $b";
echo "<br>";

++$b;
echo "The value of b is $b";
echo "<br>";

$b--;
echo "The value of b is $b";
echo "<br>";

--$b;
echo "The value of b is $b";
echo "<br>";

echo "<hr>";


echo  "<h3>Comparison Operators</h3>";

$age = -3;

if ($age>18){
    print "You are an adult";
}
else{
    print "You are an adult";
}
echo "<br>";
if ($age>18){
    print "You are an adult";
}
elseif ($age>12){
    print "You are a teenager";
}
else{
    print "You are a child";
}
echo "<br>";


if ($age>=18 & $age<=100 ){
    print "You are an adult";
}
elseif ($age>12 & $age<18){
    print "You are a teenager";
}
elseif ($age>0 & $age<12){
    print "You are a child";
}
else{
    print "There is no such age";
}

echo "<hr>";

echo  "<h3>Student Grades</h3>";

$marks = -89;

if ($marks>=70 & $marks<=100 ){
    print "Grade A";
}
elseif ($marks>=60 & $marks<=69) {
    print "Grade B";
}
elseif ($marks>=50 & $marks<=59) {
    print "Grade C";
}
elseif ($marks>=40 & $marks<=49) {
    print "Grade D";
}
elseif ($marks>=0 & $marks<=39) {
    print "Grade F";
}
else {
    print "Invalid Number";
}

echo "<hr>";
// Gross salary of an individual
echo  "<h3>Net Salary</h3>";

$salary = 30000;
/*
 * Basic salary >= 10,000, Medical allowance = 20%, House Allowance = 50%, Tax 10%
 *Basic salary >= 20,000, Medical allowance = 20%, House Allowance = 50%, Tax 10%
 *Basic salary >= 30,000, Medical allowance = 20%, House Allowance = 50%, Tax 10%
 *Basic salary >= 40,000, Medical allowance = 20%, House Allowance = 50%, Tax 10%
 */

if ($salary>= 10000 & $salary<=20000){
    $netsalary = $salary + (0.5*$salary +0.2*$salary) - 0.1*$salary;
    print "The Net salary is $netsalary";
}
elseif ($salary>= 20000 & $salary<=30000){
    $netsalary = $salary + (0.6*$salary +0.25*$salary) - 0.1*$salary;
    print "The Net salary is $netsalary";
}
elseif ($salary>= 30000 & $salary<=40000){
    $netsalary = $salary + (0.65*$salary +0.3*$salary) - 0.12*$salary;
    print "The Net salary is $netsalary";
}
elseif ($salary>40000){
    $netsalary = $salary + (0.7*$salary +0.4*$salary) - 0.12*$salary;
    print "The Net salary is $netsalary";
}
else{
    print "Consult finance officer";
}
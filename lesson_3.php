<?php

//php operators:
//these are used to perform operations to variables and value
//1:arithmetic operators
//2:assignment op
//3:comparison op
//4:logical op

//ARITHMETIC OPERATORS

//+ addition
//- substraction
//*multiolication
//  /division
//%modulus (returns remeinders of a division op)
//**exponential( power od numbers)
echo ("<br>");
$x=5;
$y=29;

$sum = $x + $y;

echo "$x + $y = $sum <br> ";


$diff = $y- $x;

echo "$y - $x = $diff <br>";

$exp =$y ** $x;

echo "$y ** $x = $exp <br>";


$mod = $y % $x;

echo "$y % $x =$mod <br>";


//assignment op
//used to right a value to a variable


$x=5;
$y=29;


$x= $x + $y;
$x += $y;


//comparison ops

//1.== equals
//2. === identical:the two values have the same data type and same value or they are equal
//3.!= nor equal
//4.<>not equal
//5!== not identical
//6.> greater than
//7. <less than
//8>= greater than or equal to
//9<=less than or equal to


$age =18;

var_dump($age ==21);
echo "<br>";
var_dump($age ===18);

echo "<br>";

//increment()

$i = 0;
$i++;
echo $i;


//logical ops
//Assignment: logical ops: and not



?>

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
$x =10;
$b =40;
if ($x ==10 and $b ==40 )
    echo "true";

//They are used to combine condirional statements
//Assignment: logical ops:
//1;And -and;
//2;Or -or
//3; And -
//4;not - ! return true is a condition is not true

$d =3;
$g =5;

if ($d ==3 and $g > 4){
    echo "hello world <br>";
}

//or
if($d < 70 or $g ==70 ){
    echo "hello world <br>";
}

//not
if( $d !== "test") {
    echo  "not identical <br>";

}

if($d != $y){
    echo $d."  is not equal to". $g. "<br>";
}


?>

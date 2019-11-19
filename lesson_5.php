<?php

//looping in php
//looping enables us to repeat a code a number of times as long as the condition is true
types:
//1;while
//2;do..while
//3;for
//4;foreach
//
//while:only used when a coondition is true
//syntax:
//while(conditiion true ){
//    code to be executed only when the condition is true
//}

$x =1;//initializing /starting the loop
while ($x < 5){//checking if condition is true first
    echo "$x hello world <br>";
    $x++;//incimenting the value of x
}


//do while loop
//syntax:
//do{
//    code to execute
//    incremny variable here
//
//}while(condition is true)

echo "WHILE LOOP";
$y = 0;
do{
    echo"hello world <br>";
    $y++;
}while( $y <5);

//for loop -Loops throug a block of code a number of specified

//syntax:
//for(init counter;text counter;increment counter){
//    code to execute



//init counter initializes the starting point of a loop
//text counter evaluates for each loop checks of condition
//increment counter increases the value after each loop


for($i=0; $i <5; $i++){
    echo"value $i <br>";
}

//a function is a block of code that does a specific task when it is called or used



function echoThreetimes(){
    echo"i love coding <br>";
    echo"i am a php geek <br>";
    echo"Coding is awesome <br>";
};

//calling a function
echoThreetimes();
echoThreetimes();
echoThreetimes();


//functions that take arguments
function greetings($name ){
    echo"hello $name <br>";
};
greetings("joash");



function greetings2($firstname ,$secondname ,$idnumber ){
    $fname=$firstname;
    $sname=$secondname;
    $id=$idnumber;

    $details= "your details are<br>
    Firstname:$firstname <br> 
    lastname:$secondname <br>
     id number:$idnumber";

    echo $details;
};

greetings2("john" ,"doe" ,"12345677");



function greetings3($firstname ,$secondname ,$idnumber ){


    $details= "your details are<br>
    Firstname:$firstname <br> 
    lastname:$secondname <br>
     id number:$idnumber";

    return $details;
};

$userdata= greetings3("john" ,"doe" ,"12345677");

echo $userdata. "<br>";

//function with default  values


function greetings5 ($name= "developer"){
    echo "hello $name <br>";
}

greetings5();
greetings5("john");



//ASSIGNMENT
//create a function that takes a number as an argument the number(n) represents the range of a loop .loop from 0to n
//if a number is divisible by 3 echo "FIIZ" if the number is divisible by 5 echo"BUZZ"
//else echo the number that is not divisible by both , echo "FIZBUZ"
//else echo the number that is not divisible

"<br>";
"<br>";
"<br>";

echo "ASSIGNMENT <br>";

$n = 15;

if($n /2 ){
    echo "fizz <br>";
}
if($n /5 ){
    echo"buzz <br>";
}
elseif ($n/2  and $n /5 ){
    echo "fizbuz <br>";
}


function xyz($n)
{
    if ($n % 3 == 0) {
        echo "nekwbj <br>";
    } else if ($n % 5 == 0) {
        echo "1234 <br>";
    } else if ($n % 3 == 0 and $n % 5 == 0) {
        echo "echo <br>";

    }
    xyz(15);
}




















?>

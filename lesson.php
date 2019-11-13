<?php


//echo //basic way in php to out data
//print // basic way in php to out data

//print html code in php

echo "<p>hello ,welcome </p>";//every php statement must end with a semi colon
echo '<br>';
echo " hello am a php string";
echo '<br>';
//a string is a text/or a sequence of character inside a single or double quote

//INTEGER refers to a number
echo 200;
echo '<br>';
$x = 12;
echo '<br>';
$y = 20;
echo '<br>';
echo " i am $y years old";
echo '<br>';
echo "i am  " . $y . " years old";
echo '<br>';

//php_datatype;
//string: wrapped in between a single or double quote
//interger:whole numbers without decimal points
//float:decimal point numbers
//boolean:state:true , false


//STRING:
//a function is a block of code that does something specific
//function in php are written as : functionname()
//strlen().counts numners of characters in a string

echo strlen('hello wrrld welcome');
echo '<br>';

$name = ' john ';

echo strlen($name);


//research on the following string:

//str_word count() : it counts words in a string
 //strrev : it reversesa string(it writes a string backwards )
//strpros: it finds the occarence of a string inside another string
//str_replace:it replaces other characters with another string


//php numbers
//Intergers:its a whole number without decimal point
   //       it must have a tleast one number can be -ve or +ve
 //funcrions that apply to intergers;
      //                              is_int()
    //                                is_interger()
  //                                  is_long()

//var_dump()-returns the type of data ie  is it an interger or a string

$x=30;
var_dump( $x );
//is_int($x);returns a booleam data type if a number is an interger it returns true



//FLOAT
//is a number with a decimal point
//is_float() returns true if a number is adecimal number

$y=3.142;
var_dump(is_float($y))





















?>

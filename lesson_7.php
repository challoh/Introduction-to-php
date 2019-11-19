<?php

//PHP SUPERGLOBALS
//these are predifined variables that can be accesed anywhere
//1;$_SERVER;
//2;$_SESSION;
//3;$_POST;
//4;$_GET;
//5;$_FILES;

//$_SERVER() it is used to obtain info about headers,paths,script location

echo $_SERVER[ "PHP_SELF"]; //RETURNS the file of the current  executing script

echo '<br>';
//$_GET[""] //used to collect data after submitting html file form with method ="GET"
echo '<br>';

if (isset($_GET['myname'])){
    $name=$_GET['myname'];
    echo $name;
}
echo '<br>';

if (isset($_GET['mynum'])){
    $number=$_GET['mynum'];
    echo $number;
}
echo '<br>';

echo'<form action ="" method ="get">';
echo '<input type ="text" name="myname" placeholder="enter name">';
echo '<input type ="number" name="mynum" placeholder="enter number">';
echo '<input type ="submit" name="send" value="send name">';
echo '</form>';


echo '<br>';


echo '<a href="lesson_7.php?name=challoh&number=123456789"></a>';
echo "Name  :" .$_GET ["myname"];
echo "Number :" .$_GET ["mynum"];
























?>

<?php
//indexed arrays
$phones =array("tecno","infinix","samsung");
echo "i like" . $phones [0],",". $phones [1] , "," . $phones [2] ,",";
"<br>";
//assoclative arrays
$salary=array("john"=>"35000" ,"kevo"=> "34000");
echo "john earns".$salary["john"] ."kenyan shillings .";


//looping through associative arrays
//use for each loop


foreach($salary as $key=>$value){
    echo "$key ","$value<br>";
}















?>

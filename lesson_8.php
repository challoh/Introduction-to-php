<?php
//PHP FORMS
//to grab the data we use :
//             if statement
//              isset() function:checks if the superglobal $_POST has a data

//if (isset($_POST["shm"])){
//    $name =$_POST['shm'];
//    echo $name."<br>";
//}
//
//if (isset($_POST["hager"])){
//    $country =$_POST['hager'];
//    echo $country."<br>";
//}



if (isset($_POST['btnsubmit'])) {
    $name = $_POST['shm'];
    $country = $_POST['hager'];

    if (empty($name)) {
        header("location:lesson_8.php?error=please enter name ");
        exit();

    }

    if (empty($country)) {
        header("location:lesson_8.php?error=please enter country");
        exit();

    }
    echo "my name is $name and i come from $country <br>";
}
$error ='';
if (isset($_GET['error'])) {
    $error = $_GET['error'];
    echo "$error";
}



?>



<!--an action determines where the form data will be stored-->

<form action="lesson_8.php " method="post">
    Name : <input type="text" name="shm" >
    Country : <input type="text" name="hager" >
    <input type="submit" name="btnsubmit" value="send data">
</form>



<?php

if (isset($_POST['btnsubmit'])) {
    $name = $_POST['shm'];
    $username = $_POST['username'];
    $Email= $_POST['Email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $confirm = $_POST['C password'];

    if (empty($name)) {
        header("location:assignment.php?error=please enter name ");
        exit();

    }

    if (empty($username)) {
        header("location:assignment.php?error=please enter username");
        exit();

    }
    if (empty($Email)) {
        header("location:assignment.php?error=please enter Email");
        exit();

    }    if (empty($phone)) {
        header("location:assignment.php?error=please enter phone");
        exit();

    }    if (empty($password)) {
        header("location:assignment.php?error=please enter password");
        exit();

    }    if (empty($confirm)) {
        header("location:assignment.php?error=please enter confirm password");
        exit();

    }
}






?>


    <form action="" method="post">
        Name : <input type="text" name="shm " >
        Username: <input type="text" name="username" >
        Email: <input type="text" name="email" >
        Phone: <input type="number" name="number" >
        Password: <input type="text" name="password" >
        Confirm password: <input type="text" name="C password" >
        <input type="submit" name="btnsubmit" value="send " >
    </form>





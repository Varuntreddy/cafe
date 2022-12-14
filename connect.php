<?php
if($_POST){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $people = $_POST['people'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $message = $_POST['message'];
    
    //Database Connection
    $connect = mysqli_connect('localhost', 'root', '');
    $db = mysqli_select_db($connect, 'leisuresquare');
    
    if ($connect) {
        die("Connected");
        mysqli_query($connect, "insert into 'reservation' values('$name','$email','$phone','$people','$date','$time','$message')");
        header("Location: ./index.html");
        exit();
        
    }
    else {
        die("Not connected");
    }
}
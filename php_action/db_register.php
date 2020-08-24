<?php
session_start();

// Connect Database
include_once 'db_connect.php';
// include_once '../register-user.php';

/*
function clear( $input ) {
    global $connect;
    
    // SQL
    $var = mysqli_escape_string($connect, $input);

    // XSS(Cross Site Scripting)
    $var = htmlspecialchars($var);
}*/

// Button Submit
if( isset($_POST['btn-register']) ) {
    // $erros = array();

    $name = mysqli_escape_string($connect, $_POST['name']);
    $username = mysqli_escape_string($connect, $_POST['username']);
    $email = mysqli_escape_string($connect, $_POST['email']);
    $password = mysqli_escape_string($connect, md5($_POST['password']));
    $age = mysqli_escape_string($connect, $_POST['age']);

    // 
    $sql = "INSERT INTO users (name, username, email, password, age) VALUES ('$name', '$username', '$email', '$password', '$age')";

    // verificando se a query foi bem sucedida
    if( mysqli_query($connect, $sql) ) {
        header('Location: ../index.php?sucesso');
    } else {
        header('Location: ../index.php?erro');
    }

}
<?php
// sessão
session_start();

// conexão
require_once 'php_action/db_connect.php';

if( isset( $_POST['btn-edit-profile'] ) ) {

    $id = mysqli_escape_string($connect, $_POST['id']);
    $name = mysqli_escape_string($connect, $_POST['name']);
    $username = mysqli_escape_string($connect, $_POST['username']);
    $email = mysqli_escape_string($connect, $_POST['email']);
    $age = mysqli_escape_string($connect, $_POST['age']);

    $sql = "UPDATE users SET name = '$name', username = '$username', email = '$email', age = '$age' WHERE id = '$id'";

    // verificando se a query foi bem sucedida
    if( mysqli_query($connect, $sql) ) {
        header('Location: profile.php?Atualido-com-sucesso');
    } else {
        header('Location: profile.php?Erro-ao-atualizar');
    }

}
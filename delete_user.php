<?php
// sessão
session_start();

// conexão
require_once 'php_action/db_connect.php';

if( isset( $_POST['btn-delete-user'] ) ) {

    // Verificando qual o ID do usuário
    $id = mysqli_escape_string($connect, $_POST['id']);

    // Deletando usuário
    $sql = "DELETE FROM users WHERE id = '$id'";

    // Verificando se a query foi bem sucedida
    if( mysqli_query($connect, $sql) ) {
        header('Location: ./index.php?usuario-deleteado-com-sucesso');
    } else {
        header('Location: profile.php?erro-ao-deleter-usuario');
    }
    
    //header('Location: ./index.php?usuario deleteado');
    //exit();
}

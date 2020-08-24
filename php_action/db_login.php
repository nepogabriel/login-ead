<?php
// Connect Database
include_once 'db_connect.php';
// include_once '../index.php';

session_start();

// include_once '../index.php';

// Button Submit
if( isset($_POST['btn-login']) ) {
    // $erros = array();

    $email_login = mysqli_escape_string($connect, $_POST['email-login']);
    $password_login = mysqli_escape_string($connect, md5($_POST['password-login']));

    if( empty($email_login) || empty($password_login) ) {
        // header('Location: ../index.php?O-campo-email-senha-precisa-ser-preenchido');
        
        // $error[] = '<li> O campo login/senha precisa ser preenchido. </li>';

        header('location: ../index.php?preencha-todos-os-campos');
    } else {

        // verificando se o email enviado existe no DB
        $sql = "SELECT email FROM users WHERE email = '$email_login'";
        // resultado da consulta 1- Conexão com DB, 2- Comando sql
        $resultado = mysqli_query($connect, $sql);
        
        /*  -Verificando se o email/senha existe no DB.
            -mysqli_num_rows($resultado) > 0
                Verificando o número de linhas que exite na variável
                $resultado(esta consultadno a coluna email no DB e verificando se o email digitado é igual)
                é maior do que 0.*/
        if( mysqli_num_rows($resultado) > 0 ) {
            // criptografando senha antes de inserir no SELECT
            // $password_login = password_hash($password_login, PASSWORD_DEFAULT);
            //$password_login = md5($password_login);
            
            // verificando se a senha digitada é a mesma do DB
            $sql = "SELECT * FROM users WHERE email = '$email_login' AND password = '$password_login'";
            $resultado = mysqli_query($connect, $sql);

            /*Verificando se o email e senha digitados são identicos ao DB*/
            if( mysqli_num_rows($resultado) == 1 ) {
                /* O resultado da consulta $sql(se email e senha conferem) foi atribuida a variável $resultado.
                O mysqli_fetch_array vai converter o resultado em um array e atribuir a variável dados. */
                $dados = mysqli_fetch_array($resultado);

                //if($email_login == $resultado['email'] AND (password_verify($password_login, $resultado['password']))) {}
            
                // Fechando a conexão com o DB
                //mysqli_close($connect);

                // Criando sessões depois de atribuir $resultado em fetch(transformando em array)
                $_SESSION['logado'] = true;
                $_SESSION['id_user'] = $dados['id'];
        
                // redirecionar usuário para página restrita
                header('Location: ../home.php?logado');

            } else {
                header('Location: ../index.php?usuario-e-senha-nao-confere');
            }

        } else {
            header('Location: ../index.php?usuario-inexistente');
        
            // $erros[] = '<li> Usuário inexistente! </li>';
        }
        
    }


}
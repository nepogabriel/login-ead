<?php
session_start();

require_once 'db_connect.php';

// verificando se o usuário está logado
if( !isset( $_SESSION['logado'] ) ) {
    header('location: index.php?voce-nao-esta-logado');
}

// Dados do usuário
$id = $_SESSION['id_user'];
$sql = "SELECT * FROM users WHERE id = '$id'";
$resultado = mysqli_query($connect, $sql);
$dados = mysqli_fetch_array($resultado);

// Fechando conexão com o banco de dados
mysqli_close($connect);

// $msg = false;

if( isset( $_POST['btn_photo_user'] ) ) {

    $formatosPermitidos = array('png', 'jpeg', 'jpg');

    // Pegando extensão de um arquivo
    $extensao = pathinfo( $_FILES['photo_user']['name'], PATHINFO_EXTENSION);
    //echo $extensao;
    //var_dump( $_FILES );

    // Verificando se os formatos permitidos estão na variável $extensao
    if( in_array( $extensao, $formatosPermitidos ) ) {
        $pasta = '../upload/images/';
        $caminhoTemporario = $_FILES['photo_user']['tmp_name']; // caminho temporário do arquivo
        $novoNome = uniqid() . 'id' . $dados['id'] . '.' . $extensao; // renomeando arquivo

        // Movendo o arquivo para uma nova localização 1-Caminho temporario do arquivo 2-Destino
        if( move_uploaded_file( $caminhoTemporario, $pasta . $novoNome ) ) {
            header('Location: ../profile.php?Upload-com-sucesso');
        } else {
            header('Location: ../profile.php?Falha-no-upload');
        }
    } else {
        header('Location: ../profile.php?Formato-invalido');
    }
                    
    // strtolower(converte a string para minusculo) substr(vai cortar o nome do arquivo)
    //$extensao = strtolower( substr( $_FILES['photo_user']['name'], -4 ) );
    // para evitar nome de arquivo duplicado
    //$novo_nome = md5( time() ) . $extensao;
    //$diretorio = "upload/images";

    /*
    Quando um arquivo é enviado pelo PHP, ele é armazenado dentro de um arquivo temporario.
    Essa função é para mover o arquivo
    */
    //move_uploaded_file( $_FILES['photo_user']['tmp_name'], $diretorio.$novo_nome );

    //$sql_code = "INSERT INTO photo_user (codigo, arquivo, data) VALUES(null, '$novo_nome', NOW())";
    //$resultado = mysqli_query($connect, $sql_code);

    // if( mysqli_query($connect, $sql_code) ) {
    //     $msg = 'Arquivo enviado com sucesso!';
    // } else {
    //     $msg = 'Falha ao enviar arquivo';
    // }

    // if( $mysqli->query($sql_code) ) {
    //     $msg = 'Arquivo enviado com sucesso!';
    // } else {
    //     $msg = 'Falha ao enviar arquivo';
    // }
}
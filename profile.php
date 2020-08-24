<?php
require_once 'php_action/db_connect.php';

session_start();

// Verficiando se o usuário está logado
if(!isset($_SESSION['logado'])) {
    header('location: index.php?voce-nao-esta-logado');
}

// Dados do usuário
$id = $_SESSION['id_user'];
$sql = "SELECT * FROM users WHERE id = '$id'";
$resultado = mysqli_query($connect, $sql);
$dados = mysqli_fetch_array($resultado);

// Fechando conexão com o banco de dados
mysqli_close($connect);

include_once 'includes/header.php';
?>

<div class="container-fluid">
    <div class="row">
        
        <?php include_once 'template_parts/menu.php'; ?>

        <div class="col-8 col-md-8">

            <?php
                $page_name = 'Perfil';

                include_once 'template_parts/header.php';
            ?>

            <?php
                // if( $msg != false ) {
                //     echo '<p> $msg </p>';
                // }
            ?>

            <p><strong>Adicionar imagem de perfil aqui</strong></p>
            
            <!-- Adicionar imagem de perfil aqui 
            <div>
                <img src="">
            </div>-->

            <form action="php_action/profile_photo.php" method="POST" enctype="multipart/form-data">
                Arquivo:<br>
                <input type="file" name="photo_user"><br><br>
                <button type="submit" name="btn_photo_user" class="btn btn-outline-success">Enviar Imagem</button>
            </form>

            <br>

            <p>
            Nome:
            <?= $dados['name']; ?>
            </p>

            <p>
            User:
            <?= $dados['username']; ?>
            </p>

            <p>
            E-mail:
            <?= $dados['email']; ?>
            </p>

            <p>
            Idade:
            <?= $dados['age']; ?>
            anos
            </p>


            <div class="row">
            <!-- <a href="teste-form-perfil.php?id=<?= $dados['id']; ?>"> Editar Informações </a> -->

                <button class="btn btn-outline-primary" data-toggle="modal" data-target="#exampleModalCenter"> Editar Informações </button>

                <button class="btn btn-outline-danger ml-3" data-toggle="modal" data-target="#delete_user"> Deletar Usuário </button>


                <?php
                    include_once 'template_parts/modal/edit-profile.php';
                    include_once 'template_parts/modal/delete-user.php';
                ?>
            </div>

        </div>

    </div>
</div>

<?php
include_once 'includes/footer.php';
?>
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

<!-- <header id="header">
    <h2>teste</h2>
</header> -->

<div class="container-fluid">
    <div class="row">

        <?php include_once 'template_parts/menu.php'; ?>

        <div id="content" class="col-8 col-md-8">

            <?php
                $page_name = 'Home';

                include_once 'template_parts/header.php';
            ?>

            <section id="content_section1">

                <h2>Olá, bem-vindo <?= $dados['name']; ?>! </h2>

                <iframe class="mb-5" width="660" height="415" src="https://www.youtube.com/embed/iPbcg5XQ2cg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>    

                <button class="btn btn-outline-primary"> ASSISTIR AULAS AGORA </button>
    
            </section>

            <section id="comments">
                <h4> Comentários </h4>

                <textarea></textarea>
            </section>

        </div>
        
    </div>
</div>

<?php include_once 'includes/footer.php'; ?>
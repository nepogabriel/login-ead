<?php
// session_start();
include_once 'php_action/db_login.php';
include_once 'includes/header.php';
?>

<div class="login_page">
    <div class="teste_login">

        <h2>Área do Aluno</h2>

        <div class="login_area">

            <form action="php_action/db_login.php" method="POST">
                <input type="email" name="email-login" placeholder="E-mail"><br><br>

                <input type="password" name="password-login" placeholder="Senha"><br><br>

                <button type="submit" name="btn-login">Entrar</button>
            </form>

            <br>

            <p>
                Não tem uma conta? 
                <span class="cadastre" data-toggle="modal" data-target="#exampleModalCenter">
                    Cadastre-se
                </span>
            </p>

            <!-- <p>
                Esqueceu a senha? 
                <span class="cadastre" data-toggle="modal" data-target="#exampleModalCenter">
                    Recuperá-la
                </span>
            </p> -->

        </div>

    </div>

    <?php include_once 'template_parts/modal/register.php'; ?>

</div>
<?php include_once 'includes/footer.php'; ?>
<?php
// session_start();

include_once 'includes/header.php';
// include_once 'php_action/db_register.php';
?>

<section>
    <div>
        <h3>Cadastro de Aluno</h3>

        <hr>

        <form action="php_action/db_register.php" method="POST">

            <input type="hidden" name="id">

            Name:<br>
            <input type="text" name="name"><br><br>
            
            Username:<br>
            <input type="text" name="username"><br><br>

            E-mail<br>
            <input type="email" name="email"><br><br>

            Senha:<br>
            <input type="password" name="password"><br><br>

            Idade:<br>
            <input type="text" name="age"><br><br>

            <button type="submit" name="btn-register">Cadastrar</button>
        </form>
    </div>
</section>
    
<?php include_once 'includes/footer.php'; ?>
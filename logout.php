<?php
// Arquivo p/ encerrar a sessão

// iniciando a sessão
session_start();

// limpando a sessão
session_unset();

// destruindo a sessão
session_destroy();

header('location: index.php');
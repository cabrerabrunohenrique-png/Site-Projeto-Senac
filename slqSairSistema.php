<?php
session_start(); // Entra na sessão atual

session_unset(); // Limpa todas as variáveis salvas (apaga o ID e Nome do usuário)

session_destroy(); // Destrói a sessão por completo no servidor

// Redireciona o usuário limpo de volta para a tela de login
header('Location: index.php');
exit;
?>

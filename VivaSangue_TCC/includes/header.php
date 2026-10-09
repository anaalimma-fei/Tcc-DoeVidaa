<?php
$pageTitle = $pageTitle ?? 'VivaSangue';
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="VivaSangue — informações sobre doação de sangue, campanhas e locais oficiais.">
    <title><?= htmlspecialchars($pageTitle) ?> | VivaSangue</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<header class="navbar">
    <a class="brand" href="index.php" aria-label="VivaSangue - página inicial">
        <span class="brand-mark">+</span>
        <span>Viva<span>Sangue</span></span>
    </a>
    <button class="menu-toggle" aria-label="Abrir menu" aria-expanded="false">☰</button>
    <nav class="nav-links" aria-label="Navegação principal">
        <a href="index.php">Início</a>
        <a href="onde-doar.php">Onde doar</a>
        <a href="campanhas.php">Campanhas</a>
        <a href="calendario.php">Calendário</a>
        <a href="como-doar.php">Como doar</a>
        <a href="tipos-sanguineos.php">Tipos sanguíneos</a>
        <a href="faq.php">Dúvidas</a>
    </nav>
</header>
<main>

<?php
require_once __DIR__ . '/../config/database.php';
require_once __DIR__ . '/../config/auth.php';
requireAdmin();
?>
<!DOCTYPE html><html lang="pt-BR"><head><meta charset="UTF-8"><meta name="viewport" content="width=device-width,initial-scale=1"><title>Locais | VivaSangue</title><link rel="stylesheet" href="../assets/css/style.css"></head>
<body><div class="admin-layout"><aside class="admin-side"><div class="brand"><span class="brand-mark">+</span><span>Viva<span>Sangue</span></span></div><hr><a href="dashboard.php">Dashboard</a><a href="campanhas.php">Campanhas</a><a href="locais.php">Locais</a><a href="instituicoes.php">Instituições</a><a href="interessados.php">Interessados</a><a href="../index.php">Ver site</a><a href="logout.php">Sair</a></aside>
<main class="admin-main"><h1>Locais</h1><div class="card"><p>Área preparada para CRUD de locais. O banco e os relacionamentos já estão estruturados para expansão do TCC.</p><button class="btn btn-primary" onclick="alert('Tela CRUD de demonstração. Implemente os formulários conforme o fluxo do TCC.')">Adicionar registro</button></div></main></div></body></html>

<?php
require_once __DIR__ . '/../config/database.php';
require_once __DIR__ . '/../config/auth.php';
requireAdmin();

$stats = [
 'campanhas' => (int)$pdo->query('SELECT COUNT(*) FROM campanhas')->fetchColumn(),
 'ativas' => (int)$pdo->query("SELECT COUNT(*) FROM campanhas WHERE status IN ('Agendada','Em andamento')")->fetchColumn(),
 'encerradas' => (int)$pdo->query("SELECT COUNT(*) FROM campanhas WHERE status = 'Encerrada'")->fetchColumn(),
 'locais' => (int)$pdo->query('SELECT COUNT(*) FROM locais')->fetchColumn(),
 'instituicoes' => (int)$pdo->query('SELECT COUNT(*) FROM instituicoes')->fetchColumn(),
 'interessados' => (int)$pdo->query('SELECT COUNT(*) FROM interessados')->fetchColumn(),
];
?>
<!DOCTYPE html><html lang="pt-BR"><head><meta charset="UTF-8"><meta name="viewport" content="width=device-width,initial-scale=1"><title>Dashboard | VivaSangue</title><link rel="stylesheet" href="../assets/css/style.css"></head>
<body><div class="admin-layout">
<aside class="admin-side"><div class="brand"><span class="brand-mark">+</span><span>Viva<span>Sangue</span></span></div><hr><a href="dashboard.php">Dashboard</a><a href="campanhas.php">Campanhas</a><a href="locais.php">Locais</a><a href="instituicoes.php">Instituições</a><a href="interessados.php">Interessados</a><a href="../index.php">Ver site</a><a href="logout.php">Sair</a></aside>
<main class="admin-main"><h1>Dashboard</h1><p class="muted">Olá, <?= htmlspecialchars($_SESSION['admin_nome'] ?? 'Administrador') ?>.</p>
<div class="stats">
<div class="stat"><span>Campanhas</span><strong><?= $stats['campanhas'] ?></strong></div><div class="stat"><span>Ativas</span><strong><?= $stats['ativas'] ?></strong></div><div class="stat"><span>Encerradas</span><strong><?= $stats['encerradas'] ?></strong></div><div class="stat"><span>Locais</span><strong><?= $stats['locais'] ?></strong></div>
<div class="stat"><span>Instituições</span><strong><?= $stats['instituicoes'] ?></strong></div><div class="stat"><span>Interessados</span><strong><?= $stats['interessados'] ?></strong></div>
</div>
<div class="card" style="margin-top:25px"><h2>Visão geral</h2><p class="muted">O painel foi estruturado para acompanhar campanhas, locais, instituições e pessoas interessadas.</p></div>
</main></div></body></html>

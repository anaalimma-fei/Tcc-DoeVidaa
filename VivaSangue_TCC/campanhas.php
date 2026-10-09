<?php
$pageTitle = 'Campanhas';
require __DIR__ . '/includes/header.php';
?>

<section class="page-header"><div class="container"><div class="eyebrow">Campanhas</div><h1>Campanhas de doação</h1><p class="muted">Os dados abaixo são fictícios e servem apenas para demonstrar a interface do TCC.</p></div></section>
<section class="section"><div class="container">
<div class="filters">
<div class="field"><label>Cidade</label><select><option>Todas</option><option>Santo André</option><option>São Paulo</option><option>Mauá</option></select></div>
<div class="field"><label>Data</label><input type="date"></div>
<div class="field"><label>Instituição</label><select><option>Todas</option><option>Instituição Exemplo</option></select></div>
<div class="field"><label>Tipo sanguíneo solicitado</label><select><option>Não informado</option><option>A+</option><option>O+</option><option>O-</option></select></div>
</div>
<div class="grid grid-3">
<?php
$campanhas = [
 ['Doe Vida — Exemplo','Instituição Demonstrativa','15/10/2026','Santo André/SP','Agendada'],
 ['Gota de Esperança — Exemplo','Instituição Demonstrativa','22/10/2026','São Paulo/SP','Agendada'],
 ['Viva a Vida — Exemplo','Instituição Demonstrativa','30/10/2026','Mauá/SP','Agendada'],
];
foreach ($campanhas as $c):
?>
<article class="card campaign-card">
<span class="badge demo">Fictícia • TCC</span>
<h3><?= htmlspecialchars($c[0]) ?></h3>
<p class="muted"><?= htmlspecialchars($c[1]) ?></p>
<p><strong>Data:</strong> <?= $c[2] ?><br><strong>Local:</strong> <?= $c[3] ?><br><strong>Status:</strong> <?= $c[4] ?></p>
<button class="btn btn-primary" onclick="alert('Detalhes de demonstração. Confirme informações com a instituição oficial.')">Ver detalhes</button>
</article>
<?php endforeach; ?>
</div>
</div></section>

<?php require __DIR__ . '/includes/footer.php'; ?>

<?php
$pageTitle = 'Onde doar';
require __DIR__ . '/includes/header.php';
?>

<section class="page-header"><div class="container"><div class="eyebrow">Localização</div><h1>Onde doar</h1><p class="muted">Encontre locais oficiais e confira as informações diretamente com a instituição responsável.</p></div></section>
<section class="section"><div class="container">
<div class="notice"><strong>Confirme antes de ir:</strong> horários, atendimento, necessidade de agendamento e demais condições podem mudar. Consulte o canal oficial da instituição.</div>
<div class="filters">
<div class="field"><label for="cidade">Cidade</label><select id="cidade"><option>Todas</option><option>Santo André</option><option>São Paulo</option><option>Mauá</option></select></div>
<div class="field"><label for="regiao">Região</label><select id="regiao"><option>Todas</option><option>ABC Paulista</option><option>São Paulo</option></select></div>
<div class="field"><label for="tipo">Atendimento</label><select id="tipo"><option>Todos</option><option>Posto fixo</option><option>Campanha</option></select></div>
<div class="field"><label for="busca">Pesquisar</label><input id="busca" data-search placeholder="Nome ou cidade"></div>
</div>
<div class="grid grid-3">
<article class="card" data-search-item><span class="badge demo">Demonstração</span><h3>Centro VivaSangue Exemplo</h3><ul class="info-list"><li>📍 Santo André/SP</li><li>Rua Exemplo, 100</li><li>🕒 Seg–Sex, 08:00–16:00</li><li>☎ (11) 0000-0000</li><li>Posto fixo</li></ul><a class="btn btn-outline" href="https://www.google.com/maps" target="_blank" rel="noopener">Ver no mapa</a></article>
<article class="card" data-search-item><span class="badge demo">Demonstração</span><h3>Instituição Exemplo Central</h3><ul class="info-list"><li>📍 São Paulo/SP</li><li>Av. Exemplo, 200</li><li>🕒 Seg–Sáb, 07:00–15:00</li><li>☎ (11) 0000-0000</li><li>Posto fixo</li></ul><a class="btn btn-outline" href="https://www.google.com/maps" target="_blank" rel="noopener">Ver no mapa</a></article>
<article class="card" data-search-item><span class="badge demo">Demonstração</span><h3>Posto Exemplo Mauá</h3><ul class="info-list"><li>📍 Mauá/SP</li><li>Av. Demonstrativa, 300</li><li>🕒 Ter–Sex, 08:30–14:30</li><li>☎ (11) 0000-0000</li><li>Campanha</li></ul><a class="btn btn-outline" href="https://www.google.com/maps" target="_blank" rel="noopener">Ver no mapa</a></article>
</div>
</div></section>

<?php require __DIR__ . '/includes/footer.php'; ?>

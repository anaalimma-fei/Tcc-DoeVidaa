<?php
$pageTitle = 'Tipos sanguíneos';
require __DIR__ . '/includes/header.php';
?>

<section class="page-header"><div class="container"><div class="eyebrow">Educação</div><h1>Tipos sanguíneos</h1><p class="muted">Os tipos sanguíneos são classificados principalmente pelos sistemas ABO e Rh.</p></div></section>
<section class="section"><div class="container">
<div class="blood-grid">
<div class="blood-type">A+</div><div class="blood-type">A−</div><div class="blood-type">B+</div><div class="blood-type">B−</div>
<div class="blood-type">AB+</div><div class="blood-type">AB−</div><div class="blood-type">O+</div><div class="blood-type">O−</div>
</div>
<div class="card" style="margin-top:28px">
<h2>Compatibilidade</h2>
<p class="muted">A compatibilidade para transfusões depende do componente sanguíneo e dos sistemas de classificação envolvidos. Em uma aplicação real, esta informação deve ser apresentada a partir de fonte médica oficial e nunca como recomendação personalizada.</p>
<table>
<tr><th>Doador</th><th>Observação geral</th></tr>
<tr><td>O−</td><td>Conhecido por sua ampla compatibilidade para hemácias em situações específicas, conforme protocolos clínicos.</td></tr>
<tr><td>AB+</td><td>Tem ampla compatibilidade para receber hemácias, observados os protocolos transfusionais.</td></tr>
<tr><td>Outros tipos</td><td>A compatibilidade deve considerar ABO, Rh e o componente transfundido.</td></tr>
</table>
</div>
<div class="notice" style="margin-top:20px">Este conteúdo é educativo e não substitui orientação de profissionais de saúde.</div>
</div></section>

<?php require __DIR__ . '/includes/footer.php'; ?>

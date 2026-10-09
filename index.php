<?php
$pageTitle = 'Início';
require __DIR__ . '/includes/header.php';
?>

<section class="hero">
<div class="container hero-grid">
    <div>
        <div class="eyebrow">VivaSangue • Informação e conexão</div>
        <h1>Sua doação pode ajudar alguém.</h1>
        <p>Encontre informações sobre doação de sangue, campanhas e locais oficiais em um só lugar, de forma simples e organizada.</p>
        <div class="actions">
            <a class="btn btn-primary" href="onde-doar.php">Encontrar local de doação</a>
            <a class="btn btn-secondary" href="campanhas.php">Ver campanhas</a>
            <a class="btn btn-outline" href="como-doar.php">Quero saber como doar</a>
        </div>
    </div>
    <div class="hero-card">
        <div class="drop">♥</div>
        <h2>Informação que aproxima.</h2>
        <p class="muted">O VivaSangue conecta potenciais doadores a informações sobre campanhas e locais oficiais.</p>
        <div class="disclaimer"><strong>Importante:</strong> a aptidão para doar é avaliada pela equipe de saúde no local.</div>
    </div>
</div>
</section>

<section class="section">
<div class="container">
    <div class="section-head">
        <div><div class="eyebrow">Como ajudamos</div><h2>Encontre o que precisa</h2></div>
        <p>O projeto reúne recursos para facilitar a busca por informações confiáveis.</p>
    </div>
    <div class="grid grid-3">
        <div class="card"><div class="card-icon">01</div><h3>Locais oficiais</h3><p class="muted">Consulte endereço, horário, telefone e site oficial das instituições cadastradas.</p><a class="btn btn-outline" href="onde-doar.php">Ver locais</a></div>
        <div class="card"><div class="card-icon">02</div><h3>Campanhas</h3><p class="muted">Veja campanhas, datas, horários, locais e informações divulgadas oficialmente.</p><a class="btn btn-outline" href="campanhas.php">Ver campanhas</a></div>
        <div class="card"><div class="card-icon">03</div><h3>Aprenda</h3><p class="muted">Entenda como funciona o processo sem transformar o conteúdo em diagnóstico médico.</p><a class="btn btn-outline" href="como-doar.php">Como doar</a></div>
    </div>
</div>
</section>

<section class="section">
<div class="container">
    <div class="section-head"><div><div class="eyebrow">Demonstração</div><h2>Campanhas em destaque</h2></div><a href="campanhas.php">Ver todas →</a></div>
    <div class="grid grid-3">
        <article class="card campaign-card"><span class="badge demo">Dado fictício • demonstração</span><h3>Doe Vida — Exemplo</h3><p class="muted">Instituição demonstrativa • Santo André/SP</p><p><strong>15/10/2026</strong> • 08:00–13:00</p><a class="btn btn-primary" href="campanhas.php">Ver detalhes</a></article>
        <article class="card campaign-card"><span class="badge demo">Dado fictício • demonstração</span><h3>Gota de Esperança — Exemplo</h3><p class="muted">Instituição demonstrativa • São Paulo/SP</p><p><strong>22/10/2026</strong> • 09:00–15:00</p><a class="btn btn-primary" href="campanhas.php">Ver detalhes</a></article>
        <article class="card campaign-card"><span class="badge demo">Dado fictício • demonstração</span><h3>Viva a Vida — Exemplo</h3><p class="muted">Instituição demonstrativa • Mauá/SP</p><p><strong>30/10/2026</strong> • 08:30–12:30</p><a class="btn btn-primary" href="campanhas.php">Ver detalhes</a></article>
    </div>
</div>
</section>

<section class="section">
<div class="container">
    <div class="section-head"><div><div class="eyebrow">Dúvidas</div><h2>Perguntas frequentes</h2></div><a href="faq.php">Ver todas →</a></div>
    <div class="faq"><button aria-expanded="false">Preciso agendar? <span>+</span></button><div class="faq-answer">Depende da instituição e da campanha. Confirme diretamente com o local oficial antes de comparecer.</div></div>
    <div class="faq"><button aria-expanded="false">Posso doar se estiver tomando medicamento? <span>+</span></button><div class="faq-answer">Os critérios podem variar. Informe os medicamentos à equipe de saúde e siga a orientação da instituição responsável.</div></div>
    <div class="faq"><button aria-expanded="false">Como saber meu tipo sanguíneo? <span>+</span></button><div class="faq-answer">Seu tipo pode ser identificado por exames apropriados ou por registros/documentos oficiais que o indiquem.</div></div>
</div>
</section>

<?php require __DIR__ . '/includes/footer.php'; ?>

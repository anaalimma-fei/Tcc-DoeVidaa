<?php
$pageTitle = 'Dúvidas frequentes';
require __DIR__ . '/includes/header.php';
?>

<section class="page-header"><div class="container"><div class="eyebrow">FAQ</div><h1>Dúvidas frequentes</h1><p class="muted">Respostas gerais. Confirme critérios e procedimentos com uma instituição oficial.</p></div></section>
<section class="section"><div class="container">
<?php
$faqs = [
['Quem pode procurar um serviço de doação?','Qualquer pessoa interessada pode procurar informações em um serviço oficial. A equipe de saúde avaliará os critérios aplicáveis no atendimento.'],
['Como funciona a doação?','O processo normalmente envolve cadastro, triagem e coleta, seguindo os protocolos do serviço escolhido.'],
['Quanto tempo dura o processo?','O tempo total pode variar conforme a instituição, o atendimento e a situação do local. Confirme previamente.'],
['Preciso agendar?','Alguns serviços trabalham com agendamento e outros possuem atendimento conforme disponibilidade. Consulte o local escolhido.'],
['O que devo levar?','A documentação pode variar. Confirme com a instituição antes de comparecer.'],
['Posso doar se estiver tomando algum medicamento?','Isso depende do medicamento e das condições avaliadas pela equipe. Informe todos os medicamentos ao profissional responsável.'],
['Onde posso encontrar um local de doação?','Use a página “Onde doar” do VivaSangue e, antes de ir, confirme as informações no canal oficial da instituição.'],
['Como saber meu tipo sanguíneo?','Ele pode ser identificado por exame apropriado ou registro oficial. Em caso de dúvida, procure orientação adequada.']
];
foreach($faqs as $f): ?>
<div class="faq"><button aria-expanded="false"><?= htmlspecialchars($f[0]) ?><span>+</span></button><div class="faq-answer"><?= htmlspecialchars($f[1]) ?></div></div>
<?php endforeach; ?>
</div></section>

<?php require __DIR__ . '/includes/footer.php'; ?>

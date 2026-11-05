<?php
$pageTitle = 'Quiz de Elegibilidade';
require __DIR__ . '/includes/header.php';
?>

<section class="page-header">
    <div class="container">
        <div class="eyebrow">Descubra agora</div>
        <h1>Posso doar sangue hoje?</h1>
        <p class="muted">Responda a estas perguntas rápidas e veja se você atende aos requisitos básicos iniciais.</p>
    </div>
</section>

<section class="section">
    <div class="container" style="max-width: 600px; margin: 0 auto;">
        <div class="card" id="quiz-container" style="padding: 30px;">
            <div id="quiz-form">
                <div class="field" style="margin-bottom: 15px;">
                    <label>Qual a sua idade?</label>
                    <input type="number" id="q_idade" placeholder="Ex: 25" class="form-control" style="width: 100%; padding: 10px;">
                </div>
                
                <div class="field" style="margin-bottom: 15px;">
                    <label>Seu peso é superior a 50kg?</label>
                    <select id="q_peso" style="width: 100%; padding: 10px;">
                        <option value="">Selecione...</option>
                        <option value="sim">Sim</option>
                        <option value="nao">Não</option>
                    </select>
                </div>

                <div class="field" style="margin-bottom: 15px;">
                    <label>Fez alguma tatuagem ou piercing nos últimos 12 meses?</label>
                    <select id="q_tatuagem" style="width: 100%; padding: 10px;">
                        <option value="">Selecione...</option>
                        <option value="sim">Sim</option>
                        <option value="nao">Não</option>
                    </select>
                </div>

                <div class="field" style="margin-bottom: 20px;">
                    <label>Teve gripe, resfriado ou febre nos últimos 7 dias?</label>
                    <select id="q_gripe" style="width: 100%; padding: 10px;">
                        <option value="">Selecione...</option>
                        <option value="sim">Sim</option>
                        <option value="nao">Não</option>
                    </select>
                </div>

                <button class="btn btn-primary" onclick="calcularQuiz()" style="width: 100%;">Verificar Elegibilidade</button>
            </div>

            <!-- Área de Resultado (Oculta por padrão) -->
            <div id="quiz-resultado" style="display: none; text-align: center; margin-top: 20px;">
                <h2 id="res-titulo"></h2>
                <p id="res-msg" class="muted"></p>
                <button class="btn btn-outline" onclick="reiniciarQuiz()" style="margin-top: 15px;">Refazer Quiz</button>
            </div>
        </div>
        <div class="disclaimer" style="margin-top:20px; text-align: center;"><strong>Importante:</strong> Este quiz é apenas um filtro inicial. A avaliação final é sempre realizada no hemocentro.</div>
    </div>
</section>

<script>
function calcularQuiz() {
    const idade = parseInt(document.getElementById('q_idade').value);
    const peso = document.getElementById('q_peso').value;
    const tatuagem = document.getElementById('q_tatuagem').value;
    const gripe = document.getElementById('q_gripe').value;

    const divForm = document.getElementById('quiz-form');
    const divRes = document.getElementById('quiz-resultado');
    const titulo = document.getElementById('res-titulo');
    const msg = document.getElementById('res-msg');

    if (!idade || !peso || !tatuagem || !gripe) {
        alert("Por favor, responda todas as perguntas.");
        return;
    }

    divForm.style.display = 'none';
    divRes.style.display = 'block';

    if (idade < 16 || idade > 69) {
        titulo.innerHTML = "🛑 Poxa, você não pode doar no momento.";
        msg.innerHTML = "A idade permitida para doação é entre 16 e 69 anos.";
    } else if (peso === 'nao') {
        titulo.innerHTML = "🛑 Poxa, você não pode doar no momento.";
        msg.innerHTML = "É necessário pesar no mínimo 50kg para garantir a sua segurança durante a coleta.";
    } else if (tatuagem === 'sim') {
        titulo.innerHTML = "⏳ Quase lá! Você precisa aguardar.";
        msg.innerHTML = "Quem fez tatuagem ou piercing precisa aguardar 12 meses após o procedimento para doar sangue.";
    } else if (gripe === 'sim') {
        titulo.innerHTML = "⏳ Melhore primeiro!";
        msg.innerHTML = "Aguarde pelo menos 7 dias após o desaparecimento dos sintomas da gripe/resfriado para doar.";
    } else {
        titulo.innerHTML = "✅ Sinal Verde!";
        titulo.style.color = "#388e3c";
        msg.innerHTML = "Pelos critérios básicos, você está apto(a) a doar! Lembre-se de levar um documento oficial com foto e estar bem alimentado. Consulte um hemocentro para a triagem oficial.";
    }
}

function reiniciarQuiz() {
    document.getElementById('quiz-resultado').style.display = 'none';
    document.getElementById('quiz-form').style.display = 'block';
    document.getElementById('res-titulo').style.color = "";
    
    // Limpar campos
    document.getElementById('q_idade').value = '';
    document.getElementById('q_peso').value = '';
    document.getElementById('q_tatuagem').value = '';
    document.getElementById('q_gripe').value = '';
}
</script>

<?php require __DIR__ . '/includes/footer.php'; ?>
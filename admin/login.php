<?php
require_once __DIR__ . '/../config/database.php';
require_once __DIR__ . '/../config/auth.php';

$error = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $senha = $_POST['senha'] ?? '';
    if ($email && $senha) {
        $stmt = $pdo->prepare('SELECT id, nome, senha_hash FROM usuarios WHERE email = ? AND perfil = "admin" LIMIT 1');
        $stmt->execute([$email]);
        $user = $stmt->fetch();
        if ($user && password_verify($senha, $user['senha_hash'])) {
            session_regenerate_id(true);
            $_SESSION['admin_id'] = $user['id'];
            $_SESSION['admin_nome'] = $user['nome'];
            header('Location: dashboard.php');
            exit;
        }
    }
    $error = 'E-mail ou senha inválidos.';
}
?>
<!DOCTYPE html><html lang="pt-BR"><head><meta charset="UTF-8"><meta name="viewport" content="width=device-width,initial-scale=1"><title>Login | VivaSangue</title><link rel="stylesheet" href="../assets/css/style.css"></head>
<body><main class="section"><div class="container" style="max-width:480px">
<div class="card"><div class="brand"><span class="brand-mark">+</span><span>Viva<span>Sangue</span></span></div><h1 style="font-size:2rem">Área administrativa</h1>
<?php if($error): ?><div class="notice"><?= htmlspecialchars($error) ?></div><?php endif; ?>
<form method="post"><div class="field"><label>E-mail</label><input type="email" name="email" required></div><br><div class="field"><label>Senha</label><input type="password" name="senha" required></div><br><button class="btn btn-primary" type="submit">Entrar</button></form>
<p class="muted">Use as credenciais de demonstração definidas no arquivo README.</p></div></div></main></body></html>

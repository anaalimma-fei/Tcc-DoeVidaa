<?php
declare(strict_types=1);
require_once __DIR__ . '/../config/database.php';

header('Content-Type: application/json; charset=utf-8');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['erro' => 'Método não permitido']);
    exit;
}

$nome = trim($_POST['nome'] ?? '');
$email = filter_var($_POST['email'] ?? '', FILTER_VALIDATE_EMAIL);
$campanha = filter_input(INPUT_POST, 'campanha_id', FILTER_VALIDATE_INT);

if ($nome === '' || !$email || !$campanha) {
    http_response_code(422);
    echo json_encode(['erro' => 'Preencha os dados obrigatórios corretamente.']);
    exit;
}

$stmt = $pdo->prepare('INSERT INTO interessados (campanha_id, nome, email) VALUES (?, ?, ?)');
$stmt->execute([$campanha, $nome, $email]);

echo json_encode(['sucesso' => true, 'mensagem' => 'Interesse registrado.']);

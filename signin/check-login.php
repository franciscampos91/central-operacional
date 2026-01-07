<?php
session_start();

// Impede acesso direto
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: login.php');
    exit;
}

$usuario = $_POST['usuario'] ?? '';
$senha   = $_POST['senha'] ?? '';

if ($usuario === '' || $senha === '') {
    $_SESSION['erro'] = 'Informe usuário e senha.';
    header('Location: login.php');
    exit;
}

/**
 * ENDPOINT DA API
 * Ajuste o domínio conforme seu ambiente
 */
$urlApi = 'http://localhost/API/WS/login.php';

$dados = [
    'usuario' => $usuario,
    'senha'   => $senha
];

// Chamada da API via cURL
$ch = curl_init($urlApi);
curl_setopt_array($ch, [
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POST           => true,
    CURLOPT_POSTFIELDS     => json_encode($dados),
    CURLOPT_HTTPHEADER     => [
        'Content-Type: application/json'
    ]
]);

$resposta = curl_exec($ch);
$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);

// Falha de comunicação
if ($resposta === false || $httpCode !== 200) {
    $_SESSION['erro'] = 'Erro ao acessar o serviço de autenticação.';
    header('Location: login.php');
    exit;
}

$retorno = json_decode($resposta, true);

// Resposta inválida
if (!is_array($retorno)) {
    $_SESSION['alert'] = 'danger';
    $_SESSION['msg'] = 'Resposta inválida da API.';
    header('Location: login.php');
    exit;
}


if ($retorno['status'] == 'erro') {
    $_SESSION['alert'] = 'danger';
    $_SESSION['msg'] = $retorno['mensagem'];
    header('Location: login.php');
    exit;
} else if ($retorno['status'] == 'ok') {
    $_SESSION['alert'] = 'success';
    $_SESSION['msg'] = $retorno['mensagem'];
    header('Location: login.php');
    exit;
}


// Resposta inválida
/*if (!is_array($retorno)) {
    $_SESSION['erro'] = 'Resposta inválida da API.';
    header('Location: login.php');
    exit;
}*/

if ($retorno['status'] === 'ok') {

    $_SESSION['usuario_id']   = $retorno['usuario']['id'];
    $_SESSION['usuario_nome'] = $retorno['usuario']['nome'];

    header('Location: ../index.php');
    exit;

}

$_SESSION['erro'] = $retorno['mensagem'] ?? 'Usuário ou senha inválidos.';
header('Location: login.php');
exit;

<?php

require_once __DIR__ . '/../../Model/Efetivo.php';
require_once __DIR__ . '/../../../lib/Database/Connection.php';

$efetivo = Efetivo::listarEfetivo();

// Cabeçalhos para download
header('Content-Type: text/csv; charset=UTF-8');
header('Content-Disposition: attachment; filename="plano_chamada_copom.csv"');

// Importante para Excel (UTF-8 com BOM)
echo "\xEF\xBB\xBF";

// Abre saída
$output = fopen('php://output', 'w');

// Cabeçalho do CSV
fputcsv($output, [
    'Grad.',
    'RE',
    'Nome',
    'Guerra',
    'E-mail funcional',
    'Telefone',
    'E-mail pessoal',
    'Endereço',
    'Num.',
    'Complemento',
    'Bairro',
    'Cidade',
    'Referência',
    'Contato recado',
    'Telefone recado'
], ';');

// Dados
if (!empty($efetivo)) {
    foreach ($efetivo as $pessoa) {
        fputcsv($output, [
            $pessoa['pt_gr'],
            $pessoa['re'] . '-' . $pessoa['dg_re'],
            $pessoa['nome'],
            $pessoa['guerra'],
            $pessoa['email'],
            "=\"{$pessoa['telefone']}\"",
            $pessoa['email_particular'],
            $pessoa['endereco'],
            $pessoa['numero'],
            $pessoa['complemento'],
            $pessoa['bairro'],
            $pessoa['cidade'],
            $pessoa['referencia'],
            $pessoa['contato_recado'],
            "=\"{$pessoa['telefone_recado']}\""
        ], ';');
    }
}

fclose($output);
exit;

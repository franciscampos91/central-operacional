<?php

require_once __DIR__ . '/../../Model/Efetivo.php';
require_once __DIR__ . '/../../../lib/Database/Connection.php';

$efetivo = Efetivo::listarEfetivo();

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Impressão – Efetivo COPOM</title>

  <!-- Bootstrap (opcional para table) -->
  <link href="/assets/bootstrap.min.css" rel="stylesheet">

  <style>
    /* === CONFIGURAÇÃO DE IMPRESSÃO === */
    @page {
      size: A4 landscape;
      margin: 1cm;
    }

    body {
      margin: 0;
      padding: 10px;
      font-size: 12px;
      font-family: Arial, sans-serif;
    }

    /* Oculta tudo que não seja impressão */
    .no-print {
      display: none !important;
    }

    /* Tabela */
    table {
      width: 100%;
      border-collapse: collapse;
    }

    .table-zebra tbody tr:nth-child(even) {
        background-color: #f8f9fa;
    }

    th, td {
      border: 1px solid #e9ecef;
      padding: 4px;
      white-space: nowrap;
      font-size: 11px;
    }

    thead {
      background: #f1f1f1;
    }

    /* Evita quebra de linha dentro da tabela */
    td, th {
      white-space: nowrap;
    }

    /* Evita quebra de tabela entre páginas */
    tr {
      page-break-inside: avoid;
    }

    /* Força impressão colorida (quando suportado) */
    * {
      -webkit-print-color-adjust: exact;
      print-color-adjust: exact;
    }

    @media print {
  body {
    font-size: 11px;
  }

  .btn, nav, aside {
    display: none !important;
  }
}

  </style>
</head>
<body>

  <h3 class="text-center mb-3">
    COPOM CPI-7
    <br>
    PLANO DE CHAMADA
  </h3>

      <table class="table table-bordered table-striped text-nowrap table-zebra">

        <tr>
            <th>Grad.</th>
            <th>RE</th>
            <th>Nome</th>
            <th>Guerra</th>
            <th>E-mail funcional</th>
            <th>Telefone</th>
            <th>E-mail pessoal</th>
            <th>Endereço</th>
            <th>Num.</th>
            <th>Complemento</th>
            <th>Bairro</th>
            <th>Cidade</th>
            <th>Referência</th>
            <th>Contato recado</th>
            <th>Telefone recado</th>
        </tr>

          <?php if (!empty($efetivo)): ?>
          <?php foreach ($efetivo as $pessoa): ?>
              <tr>
                  <td><?= htmlspecialchars($pessoa['pt_gr']) ?></td>
                  <td><?= htmlspecialchars($pessoa['re']) ?>-<?= htmlspecialchars($pessoa['dg_re']) ?></td>
                  <td><?= htmlspecialchars($pessoa['nome']) ?></td>
                  <td><?= htmlspecialchars($pessoa['guerra']) ?></td>
                  <td><?= htmlspecialchars($pessoa['email']) ?></td>
                  <td><?= htmlspecialchars($pessoa['telefone']) ?></td>
                  <td><?= htmlspecialchars($pessoa['email_particular']) ?></td>
                  <td><?= htmlspecialchars($pessoa['endereco']) ?></td>
                  <td><?= htmlspecialchars($pessoa['numero']) ?></td>
                  <td><?= htmlspecialchars($pessoa['complemento']) ?></td>
                  <td><?= htmlspecialchars($pessoa['bairro']) ?></td>
                  <td><?= htmlspecialchars($pessoa['cidade']) ?></td>
                  <td><?= htmlspecialchars($pessoa['referencia']) ?></td>
                  <td><?= htmlspecialchars($pessoa['contato_recado']) ?></td>
                  <td><?= htmlspecialchars($pessoa['telefone_recado']) ?></td>
              </tr>
          <?php endforeach; ?>
      <?php else: ?>
          <tr>
              <td colspan="15" class="text-center">Nenhum registro encontrado</td>
          </tr>
      <?php endif; ?>

    </table>

  <script>
    // Abre automaticamente a tela de impressão
    window.onload = function () {
      //window.print();
    }
  </script>

</body>
</html>

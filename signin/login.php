<?php
    session_start();

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Login do Sistema</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f4f6f9;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .login-card {
            width: 100%;
            max-width: 380px;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
            background: #fff;
        }
    </style>
</head>
<body>

<div class="login-card">
    <h4 class="text-center mb-4">Acesso ao Sistema</h4>

    <form id="formLogin" method="post" action="check-login.php">
        <div class="mb-3">
            <label class="form-label">Usuário</label>
            <input type="text" name="usuario" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Senha</label>
            <input type="password" name="senha" class="form-control" required>
        </div>

        <?php if (!empty($_SESSION['msg'])): ?>
            <div class="alert alert-<?= $_SESSION['alert'] ?? 'danger' ?> mt-3">
                <?= $_SESSION['msg']; ?>
            </div>

            <?php
                // 🔥 limpa a mensagem depois de exibir
                unset($_SESSION['msg'], $_SESSION['alert']);
            ?>
        <?php endif; ?>


        <div class="d-grid">
            <button type="submit" class="btn btn-primary">
                Entrar
            </button>
        </div>

        <div id="msg" class="mt-3 text-center"></div>
    </form>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>

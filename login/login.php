<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="login.css">
</head>

<body>
    <div class="d-flex justify-content-center align-items-center vh-100">
        <div class="card p-4 shadow" style="width: 300px;">
            <h4 class="text-center mb-4">Login para Array</h4>
            <form method="POST" action="cripto.php">
                <!-- Usuário -->
                <div class="mb-3">
                    <label for="usuario" class="form-label">Usuário</label>
                    <input type="text" class="form-control" name="usuario" placeholder="Digite seu usuário aqui" required>
                </div>
                <!-- Senha -->
                <div class="mb-3">
                    <label for="senha" class="form-label">Senha</label>
                    <input type="password" class="form-control" name="senha" placeholder="Digite sua senha aqui" required>
                </div>
                <!-- Botão de login -->
                <button type="submit" class="btn btn-primary w-100">Entrar</button>
            </form>
            <div class="mt-3 text-center">
                <p>Não tem uma conta? <a href="https://youtu.be/dQw4w9WgXcQ?si=dfoGG1AkwHp5pi5b">Registrar aqui!</a></p>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
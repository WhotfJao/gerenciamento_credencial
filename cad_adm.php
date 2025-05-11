<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastrar Administrador - Gerenciador de Credenciais</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts for better typography -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&family=Montserrat:wght@700&display=swap" rel="stylesheet">
    <style>
        body {
            min-height: 100vh;
            background: url('assets/background.svg') no-repeat center center fixed;
            background-size: cover;
            font-family: 'Inter', Arial, Helvetica, sans-serif;
            position: relative;
        }
        .blur-bg {
            position: fixed;
            inset: 0;
            background: rgba(20, 23, 28, 0.82);
            backdrop-filter: blur(6px);
            z-index: 0;
        }
        .main-container {
            position: relative;
            z-index: 1;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .card {
            border-radius: 2.2rem;
            box-shadow: 0 2rem 4rem rgba(33,37,41,0.18), 0 1rem 2rem rgba(33,37,41,0.10);
            padding: 2.8rem 2.2rem;
            font-family: 'Inter', Arial, Helvetica, sans-serif;
        }
        .card h1, .card h3, .card h4 {
            font-family: 'Montserrat', Arial, Helvetica, sans-serif;
            font-weight: 700;
        }
        .card h1 {
            font-size: 2rem;
        }
        .card h3 {
            font-size: 1.3rem;
        }
        .card h4 {
            font-size: 1.1rem;
        }
        .card form .mb-3, .card form .mb-4 {
            margin-bottom: 2rem !important;
        }
        .form-label {
            font-weight: 500;
        }
        .btn-primary {
            padding: 0.85rem 0;
            font-size: 1.15rem;
            border-radius: 1rem;
            font-family: 'Montserrat', Arial, Helvetica, sans-serif;
            font-weight: 700;
            letter-spacing: 0.5px;
        }
    </style>
</head>
<body>
    <div class="blur-bg"></div>
    <div class="main-container">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-7 col-lg-6">
                    <div class="card shadow">
                        <h1 class="text-center mb-3 text-primary">Gerenciamento de Credenciais Sistemas Devisate</h1>
                        <h3 class="text-center mb-4 text-success">BANCO DE DADOS CRIADO COM SUCESSO...</h3>
                        <h4 class="text-center mb-4">Cadastrar usuário administrador</h4>
                        <form action="sucess.php">
                            <div class="mb-3">
                                <label for="name" class="form-label">Nome:</label>
                                <input type="text" class="form-control" id="name" name="nome" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">E-mail:</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            <div class="mb-4">
                                <label for="password" class="form-label">Senha:</label>
                                <input type="password" class="form-control" id="password" name="senha" required>
                            </div>
                            <button type="submit" class="btn btn-primary w-100">Cadastrar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Gerenciamento de Credenciais Sistema Devisate</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts: Montserrat for titles, Inter for body -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&family=Montserrat:wght@700&display=swap" rel="stylesheet">
    <style>
        body {
            min-height: 100vh;
            background: url('assets/background.svg') no-repeat center center fixed;
            background-size: cover;
            position: relative;
            font-family: 'Inter', Arial, Helvetica, sans-serif;
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
            border-radius: 2rem;
            box-shadow: 0 2rem 4rem rgba(33,37,41,0.18), 0 1rem 2rem rgba(33,37,41,0.10);
            padding: 2.5rem 2rem;
            font-family: 'Inter', Arial, Helvetica, sans-serif;
        }
        .card-body {
            padding: 2.5rem 2rem;
        }
        .pag_titulo {
            margin-bottom: 2.5rem !important;
            font-family: 'Montserrat', Arial, Helvetica, sans-serif;
            font-weight: 700;
            font-size: 2.1rem;
            letter-spacing: 0.5px;
        }
        .sub_titulo {
            margin-bottom: 2.5rem !important;
            font-family: 'Montserrat', Arial, Helvetica, sans-serif;
            font-weight: 600;
            font-size: 1.35rem;
            letter-spacing: 0.2px;
        }
        .banco .mb-3, .banco .mb-4 {
            margin-bottom: 2rem !important;
        }
        .banco label {
            margin-bottom: 0.7rem;
            font-family: 'Inter', Arial, Helvetica, sans-serif;
            font-weight: 500;
        }
        .form-control, .btn, .form-label {
            font-family: 'Inter', Arial, Helvetica, sans-serif;
        }
        .btn-primary {
            padding: 0.85rem 0;
            font-size: 1.15rem;
            border-radius: 1rem;
            font-family: 'Montserrat', Arial, Helvetica, sans-serif;
            font-weight: 700;
            letter-spacing: 0.5px;
        }

        /* Placeholder animado */
        .form-control::-webkit-input-placeholder {
            color: #adb5bd;
            opacity: 1;
            transition: none;
            white-space: nowrap;
            display: inline-block;
            animation: placeholder-move 12s linear infinite;
        }
        .form-control::-moz-placeholder {
            color: #adb5bd;
            opacity: 1;
            white-space: nowrap;
            display: inline-block;
            animation: placeholder-move 12s linear infinite;
        }
        .form-control:-ms-input-placeholder {
            color: #adb5bd;
            opacity: 1;
            white-space: nowrap;
            display: inline-block;
            animation: placeholder-move 12s linear infinite;
        }
        .form-control::placeholder {
            color: #adb5bd;
            opacity: 1;
            white-space: nowrap;
            display: inline-block;
            animation: placeholder-move 12s linear infinite;
        }
        @keyframes placeholder-move {
            0% { transform: translateX(0); }
            10% { transform: translateX(0); }
            90% { transform: translateX(-60%); }
            100% { transform: translateX(-60%); }
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
                        <div class="card-body">
                            <h2 class="pag_titulo text-center mb-3 fw-bold">Gerenciamento de Credenciais Sistema Devisate</h2>
                            <h4 class="sub_titulo text-center mb-4 fs-6 text-muted">
                                Insira abaixo as credenciais para que possamos configurar corretamente o banco de dados de seu sistema.
                            </h4>
                            <form action="cad_adm.php" class="banco">
                                <div class="mb-3">
                                    <label for="ip" class="form-label">Servidor:</label>
                                    <input type="text" class="form-control" id="ip" name="servidor" placeholder="Insira aqui o nome do servidor ou endereço de acesso">
                                </div>
                                <div class="mb-3">
                                    <label for="user" class="form-label">Usuário:</label>
                                    <input type="text" class="form-control" id="user" name="usuario" placeholder="Insira o usuário do seu sistema (nos sistemas locais é root)">
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label">Senha:</label>
                                    <input type="password" class="form-control" id="password" name="senha" placeholder="A senha de acesso de seu servidor (nos locais, normalmente é em branco)">
                                </div>
                                <div class="mb-4">
                                    <label for="name" class="form-label">Base:</label>
                                    <input type="text" class="form-control" id="name" name="base" placeholder="Nome da Base de Dados que você vai conectar">
                                </div>
                                <button type="submit" class="btn btn-primary w-100">Criar banco de dados</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


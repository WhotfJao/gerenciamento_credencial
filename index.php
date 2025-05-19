<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Gerenciamento de Credenciais Sistema Devisate</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts: Bungee para títulos, Rubik para textos -->
    <link href="https://fonts.googleapis.com/css2?family=Bungee&family=Rubik:wght@400;500;700&display=swap" rel="stylesheet">
    <style>
        body {
            min-height: 100vh;
            background: linear-gradient(135deg, #0093C6 0%, #54BAD8 100%);
            position: relative;
            font-family: 'Rubik', Arial, Helvetica, sans-serif;
            overflow-x: hidden;
        }
        .bg-graphic {
            position: fixed;
            top: -80px; left: -80px;
            width: 400px; height: 400px;
            background: radial-gradient(circle, #F7DC1B 0%, #0093C6 80%, transparent 100%);
            opacity: 0.13;
            z-index: 0;
            filter: blur(12px);
        }
        .bg-graphic2 {
            position: fixed;
            bottom: -100px; right: -100px;
            width: 500px; height: 500px;
            background: radial-gradient(circle, #54BAD8 0%, #192C47 80%, transparent 100%);
            opacity: 0.10;
            z-index: 0;
            filter: blur(16px);
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
            border-radius: 2.5rem;
            box-shadow: 0 0.5rem 2.5rem #192C47cc, 0 0.5rem 1rem #0093C660;
            padding: 2.8rem 2.2rem;
            background: #fff;
            border: 3px solid #0093C6;
            position: relative;
            overflow: hidden;
        }
        .card::before {
            content: '';
            position: absolute;
            top: -60px; right: -60px;
            width: 180px; height: 180px;
            background: radial-gradient(circle, #F7DC1B 0%, transparent 80%);
            opacity: 0.18;
            z-index: 0;
        }
        .card-body {
            position: relative;
            z-index: 1;
            padding: 2.5rem 2rem;
        }
        .pag_titulo {
            margin-bottom: 2.2rem !important;
            font-family: 'Bungee', Arial, Helvetica, sans-serif;
            font-weight: 700;
            font-size: 2.3rem;
            letter-spacing: 1.5px;
            color: #192C47;
            text-shadow: 1px 2px 0 #F7DC1B, 0 2px 8px #0093C6a0;
        }
        .pag_titulo span {
            color: #F7DC1B;
            text-shadow: 1px 2px 0 #192C47;
        }
        .sub_titulo {
            margin-bottom: 2.2rem !important;
            font-family: 'Bungee', Arial, Helvetica, sans-serif;
            font-weight: 400;
            font-size: 1.2rem;
            letter-spacing: 0.5px;
            color: #0093C6;
        }
        .banco label {
            margin-bottom: 0.7rem;
            font-family: 'Rubik', Arial, Helvetica, sans-serif;
            font-weight: 600;
            color: #192C47;
        }
        .form-control {
            border-radius: 1.2rem;
            border: 2px solid #0093C6;
            background: #f7fafc;
            font-family: 'Rubik', Arial, Helvetica, sans-serif;
            font-size: 1.1rem;
            color: #192C47;
            transition: border 0.2s;
        }
        .form-control:focus {
            border-color: #F7DC1B;
            box-shadow: 0 0 0 0.2rem #F7DC1B55;
            background: #fffbe6;
            color: #0093C6;
        }
        .btn-primary {
            background: linear-gradient(90deg, #0093C6 0%, #54BAD8 100%);
            border: none;
            padding: 1rem 0;
            font-size: 1.2rem;
            border-radius: 1.2rem;
            font-family: 'Bungee', Arial, Helvetica, sans-serif;
            font-weight: 700;
            letter-spacing: 1px;
            color: #192C47;
            box-shadow: 0 2px 12px #192C4740;
            transition: background 0.18s, transform 0.12s, color 0.18s;
        }
        .btn-primary:hover, .btn-primary:focus {
            background: linear-gradient(90deg, #F7DC1B 0%, #0093C6 100%);
            color: #192C47;
            transform: scale(1.03);
        }
        .img-top {
            width: 100px;
            height: 100px;
            object-fit: cover;
            border-radius: 50%;
            margin: 0 auto 1.5rem auto;
            display: block;
            border: 4px solid #F7DC1B;
            box-shadow: 0 2px 16px #0093C650;
            background: #fff;
        }
        @media (max-width: 600px) {
            .card { padding: 1.2rem 0.5rem; }
            .card-body { padding: 1.2rem 0.5rem; }
            .pag_titulo { font-size: 1.3rem; }
        }
    </style>
</head>
<body>
    <div class="bg-graphic"></div>
    <div class="bg-graphic2"></div>
    <div class="main-container">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-7 col-lg-6">
                    <div class="card shadow">
                        <div class="card-body">
                            <img src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png" class="img-top" alt="Credenciais">
                            <h2 class="pag_titulo text-center mb-3 fw-bold">Gerencie Suas Credenciais <span>Devisate</span></h2>
                            <h4 class="sub_titulo text-center mb-4 fs-6">
                                Preencha as informações para configurar o banco de dados do seu sistema de forma rápida e segura!
                            </h4>
                            <form action="cad_adm.php" class="banco">
                                <div class="mb-3">
                                    <label for="ip" class="form-label">Servidor:</label>
                                    <input type="text" class="form-control" id="ip" name="servidor" placeholder="Ex: db01.meuservidor.com" required>
                                </div>
                                <div class="mb-3">
                                    <label for="user" class="form-label">Usuário:</label>
                                    <input type="text" class="form-control" id="user" name="usuario" placeholder="Usuário do banco (ex: root)" required>
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label">Senha:</label>
                                    <input type="password" class="form-control" id="password" name="senha" placeholder="Senha do banco" required>
                                </div>
                                <div class="mb-4">
                                    <label for="name" class="form-label">Base:</label>
                                    <input type="text" class="form-control" id="name" name="base" placeholder="Nome da Base de Dados" required>
                                </div>
                                <button type="submit" class="btn btn-primary w-100">Configurar Banco de Dados</button>
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


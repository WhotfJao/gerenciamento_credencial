<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastrar Administrador - Gerenciador de Credenciais</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bungee&family=Rubik:wght@400;500;700&display=swap" rel="stylesheet">
    <style>
        body {
            min-height: 100vh;
            background: linear-gradient(120deg, #0093C6 0%, #54BAD8 100%);
            font-family: 'Rubik', Arial, Helvetica, sans-serif;
            position: relative;
        }
        .bg-graphic {
            position: fixed;
            top: -60px; left: -60px;
            width: 320px; height: 320px;
            background: radial-gradient(circle, #F7DC1B 0%, #0093C6 80%, transparent 100%);
            opacity: 0.13;
            z-index: 0;
            filter: blur(12px);
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
        .card h1, .card h3, .card h4 {
            font-family: 'Bungee', Arial, Helvetica, sans-serif;
            font-weight: 700;
        }
        .card h1 {
            font-size: 2.1rem;
            color: #192C47;
            text-shadow: 1px 2px 0 #F7DC1B, 0 2px 8px #0093C6a0;
        }
        .card h3 {
            font-size: 1.25rem;
            color: #0093C6;
        }
        .card h4 {
            font-size: 1.1rem;
            color: #F7DC1B;
            text-shadow: 1px 1px 0 #192C47;
        }
        .form-label {
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
            width: 90px;
            height: 90px;
            object-fit: cover;
            border-radius: 50%;
            margin: 0 auto 1.2rem auto;
            display: block;
            border: 4px solid #F7DC1B;
            box-shadow: 0 2px 16px #0093C650;
            background: #fff;
        }
        @media (max-width: 600px) {
            .card { padding: 1.2rem 0.5rem; }
            .card-body { padding: 1.2rem 0.5rem; }
            .card h1 { font-size: 1.3rem; }
        }
    </style>
</head>
<body>
    <div class="bg-graphic"></div>
    <div class="main-container">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-7 col-lg-6">
                    <div class="card shadow">
                        <img src="https://cdn-icons-png.flaticon.com/512/3135/3135823.png" class="img-top" alt="Administrador">
                        <h1 class="text-center mb-3">Credenciais Devisate</h1>
                        <h3 class="text-center mb-4">Banco de Dados Pronto!</h3>
                        <h4 class="text-center mb-4">Cadastre o Administrador</h4>
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
                            <button type="submit" class="btn btn-primary w-100">Cadastrar Administrador</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


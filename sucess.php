<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Sucesso - Gerenciador de Credenciais</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            min-height: 100vh;
            background: url('assets/background.svg') no-repeat center center fixed;
            background-size: cover;
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
            padding: 3rem 2.5rem;
            min-width: 350px;
        }
        .card h1 {
            font-family: 'Montserrat', Arial, Helvetica, sans-serif;
            font-weight: 700;
            font-size: 2rem;
            margin-bottom: 2rem !important;
        }
        .card h3 {
            font-family: 'Montserrat', Arial, Helvetica, sans-serif;
            font-weight: 600;
            font-size: 1.3rem;
            margin-bottom: 2.2rem !important;
        }
        .btn-lg {
            padding: 1rem 0;
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
                    <div class="card shadow text-center">
                        <h1 class="text-primary">Gerenciador de Credenciais Sistemas Devisate</h1>
                        <h3 class="text-success">Administrador cadastrado com sucesso!</h3>
                        <div class="d-grid">
                            <a href="home.php" class="btn btn-primary btn-lg mt-3">Acessar o sistema</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


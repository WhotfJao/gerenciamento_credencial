<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Sucesso - Gerenciador de Credenciais</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bungee&family=Rubik:wght@400;500;700&display=swap" rel="stylesheet">
    <style>
        body {
            min-height: 100vh;
            background: linear-gradient(120deg, rgb(0,110,255) 0%, #5eaaff 100%);
            font-family: 'Rubik', Arial, Helvetica, sans-serif;
            position: relative;
        }
        .bg-graphic {
            position: fixed;
            top: -60px; left: -60px;
            width: 320px; height: 320px;
            background: radial-gradient(circle, #fff 0%, rgb(0,110,255) 80%, transparent 100%);
            opacity: 0.15;
            z-index: 0;
            filter: blur(10px);
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
            box-shadow: 0 0.5rem 2.5rem rgba(0,110,255,0.18), 0 0.5rem 1rem rgba(94,170,255,0.12);
            padding: 3rem 2.5rem;
            min-width: 350px;
            background: #fff;
            border: 3px solid rgb(0,110,255);
            position: relative;
            overflow: hidden;
        }
        .card::before {
            content: '';
            position: absolute;
            top: -60px; right: -60px;
            width: 180px; height: 180px;
            background: radial-gradient(circle, rgb(0,110,255) 0%, transparent 80%);
            opacity: 0.13;
            z-index: 0;
        }
        .card h1 {
            font-family: 'Bungee', Arial, Helvetica, sans-serif;
            font-weight: 700;
            font-size: 2rem;
            margin-bottom: 2rem !important;
            color: rgb(0,110,255);
            text-shadow: 1px 2px 0 #fff, 0 2px 8px rgba(0,110,255,0.6);
        }
        .card h3 {
            font-family: 'Bungee', Arial, Helvetica, sans-serif;
            font-weight: 600;
            font-size: 1.3rem;
            margin-bottom: 2.2rem !important;
            color: #5eaaff;
        }
        .btn-lg {
            padding: 1rem 0;
            font-size: 1.15rem;
            border-radius: 1.2rem;
            font-family: 'Bungee', Arial, Helvetica, sans-serif;
            font-weight: 700;
            letter-spacing: 1px;
            background: linear-gradient(90deg, rgb(0,110,255) 0%, #5eaaff 100%);
            border: none;
            box-shadow: 0 2px 12px rgba(0,110,255,0.25);
            transition: background 0.18s, transform 0.12s;
        }
        .btn-lg:hover, .btn-lg:focus {
            background: linear-gradient(90deg, #5eaaff 0%, rgb(0,110,255) 100%);
            transform: scale(1.03);
        }
        .img-success {
            width: 90px;
            height: 90px;
            object-fit: cover;
            border-radius: 50%;
            margin: 0 auto 1.2rem auto;
            display: block;
            border: 4px solid rgb(0,110,255);
            box-shadow: 0 2px 16px rgba(0,110,255,0.25);
            background: #fff;
        }
    </style>
</head>
<body>
    <div class="bg-graphic"></div>
    <div class="main-container">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-7 col-lg-6">
                    <div class="card shadow text-center">
                        <img src="https://cdn-icons-png.flaticon.com/512/845/845646.png" class="img-success" alt="Sucesso">
                        <h1>Credenciais Devisate</h1>
                        <h3>Administrador cadastrado com sucesso!</h3>
                        <div class="d-grid">
                            <a href="home.php" class="btn btn-lg mt-3 text-white">Acessar o sistema</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($title) ? $title : 'Gerenciador de Credenciais'; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Bungee&family=Rubik:wght@400;500;700&display=swap" rel="stylesheet">
    <style>
        .navbar-blue {
            background: linear-gradient(90deg, #0093C6 0%, #54BAD8 100%) !important;
            font-family: 'Bungee', Arial, Helvetica, sans-serif;
            box-shadow: 0 2px 12px #192C4740;
        }
        .navbar-brand {
            font-family: 'Bungee', Arial, Helvetica, sans-serif;
            font-size: 2rem;
            color: #fff !important;
            letter-spacing: 2px;
            text-shadow: 1px 2px 0 #192C47, 0 2px 8px #F7DC1B;
            display: flex;
            align-items: center;
        }
        .navbar-nav {
            align-items: center;
        }
        .nav-link {
            background: #F7DC1B;
            color: #192C47 !important;
            font-family: 'Rubik', Arial, Helvetica, sans-serif;
            font-weight: 700;
            font-size: 1.1rem;
            margin-left: 1rem;
            border-radius: 1.2rem;
            padding: 8px 22px !important;
            transition: background 0.18s, color 0.18s;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .nav-link:hover, .nav-link:focus {
            background: #fffbe6;
            color: #0093C6 !important;
        }
        .navbar .container, .navbar .navbar-collapse {
            align-items: center !important;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-blue mb-4">
        <div class="container align-items-center">
            <a class="navbar-brand fw-bold" href="index.php">
                <img src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png" alt="Logo" width="36" style="margin-right:8px;">GC-SD
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse align-items-center" id="navbarNav">
                <ul class="navbar-nav ms-auto align-items-center">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Entrar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Cadastrar</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

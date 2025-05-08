<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciamento de Credenciais</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
</head>
<body>

    <h2>Gerenciamento de Credenciais Sistema Devisate</h2>
    <h4>Insira abaixo as credenciais para que possamos configurar corretamente o banco de dados de seu sistema.</h4>

    <form action="cad_adm.php" class="banco">
        <label for="">Servidor:</label>
        <input type="text" id="ip" name="Insira aqui o nome do servidor ou endereço de acesso">
        <label for="">Usuário:</label>
        <input type="text" id="user" name="Insira o usuário do seu sistema (nos sistemas locais é root)">
        <label for="">Senha:</label>
        <input type="password" id="password" name="A senha de acesso de seu servidor (nos locais, normalmente é em branco)">
        <label for="">Base:</label>
        <input type="text" id="name" name="Nome da Base de Dados que você vai conectar">   
        <button>Criar banco de dados</button>  
    </form>


</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.min.js" integrity="sha384-RuyvpeZCxMJCqVUGFI0Do1mQrods/hhxYlcVfGPOfQtPJh0JCw12tUAZ/Mv10S7D" crossorigin="anonymous"></script>
</html>
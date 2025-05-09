<?php $title = "Cadastrar Usuario"; ?>
<?php include 'header.php'; ?>

<body>
    <h1 class="pag_titulo">Gerenciamento de Credenciais Sistemas Devisate</h1>
    <h3 class="sub_titulo">BANCO DE DADOS CRIADO COM SUCESSO...</h3>
    
    <h4 class="form_titulo">Cadastrar usuario admnistrador </h4>
    <form action="sucess.php">
        <label for="">Nome:</label>
        <input type="text" id="name" name="nome">
        <label for="">E-mail:</label>
        <input type="email" id="email" name="email">
        <label for="">Senha:</label>
        <input type="password" id="password" name="senha">
        <button>Cadastrar</button>        
    </form>

<?php include 'footer.php'; ?>
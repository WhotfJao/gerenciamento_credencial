<?php $title = "Gerenciador de Credenciais"; ?>
<?php include 'header.php'; ?>

    <h2 class="pag_titulo">Gerenciamento de Credenciais Sistema Devisate</h2>
    <h4 class="sub_titulo">Insira abaixo as credenciais para que possamos configurar corretamente o banco de dados de seu sistema.</h4>

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

<?php include 'footer.php'; ?>

<?php include 'header.php'; ?>

<!-- Google Fonts para títulos e textos -->
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&family=Montserrat:wght@700&display=swap" rel="stylesheet">

<style>
body {
    background: #f3f4f6 !important; /* Cinza claro, quase branco */
    font-family: 'Inter', Arial, Helvetica, sans-serif !important;
}

.card-func {
    cursor: pointer;
    z-index: 1;
    box-shadow: 0 1.5rem 3rem rgba(33,37,41,0.25), 0 0.5rem 1rem rgba(33,37,41,0.10);
    transition: 
        box-shadow 0.18s,
        transform 0.18s;
    border: 2px solid transparent;
    font-family: 'Inter', Arial, Helvetica, sans-serif !important;
    background: #fff;
    border-radius: 2rem; /* Arredondamento igual em todos os cards */
}
.card-func:hover, .card-func:focus {
    box-shadow: 0 2.5rem 4.5rem rgba(13,110,253,0.25), 0 1rem 2rem rgba(33,37,41,0.15);
    outline: none !important;
    border-color: transparent !important;
    transform: translateY(-4px) scale(1.03);
}

.card-func.card-func-active {
    position: fixed !important;
    top: 50% !important;
    left: 50% !important;
    width: 520px;
    max-width: 98vw;
    height: auto !important;
    transform: translate(-50%, -50%) scale(1.12);
    box-shadow: 0 2rem 4rem rgba(33,37,41,0.35), 0 1rem 2rem rgba(33,37,41,0.15);
    z-index: 1050;
    border: 2px solid #0d6efd;
    background: #fff;
    padding: 0;
    display: flex;
    flex-direction: column;
    align-items: stretch;
    overflow: visible;
    font-family: 'Inter', Arial, Helvetica, sans-serif !important;
    border-radius: 2rem; /* Igual ao card normal */
}

.card-func .card-title,
.card-func.card-func-active .card-title {
    font-size: 1.3rem;
    font-weight: 700;
    color: #0d6efd;
    margin-bottom: 0.7rem;
    font-family: 'Montserrat', Arial, Helvetica, sans-serif !important;
}

.card-func .card-text,
.card-func.card-func-active .card-text {
    font-size: 1rem;
    color: #6c757d;
    font-family: 'Inter', Arial, Helvetica, sans-serif !important;
    margin-bottom: 1.1rem;
    line-height: 1.7;
}

.card-func.card-func-active .card-img-top,
.card-func .card-img-top {
    border-radius: 2rem 2rem 0 0 !important; /* Mesma borda do card */
    max-height: 260px;
    object-fit: cover;
    width: 100%;
}

.card-func.card-func-active .card-body,
.card-func .card-body {
    padding: 1.7rem;
    max-height: 260px;
    overflow-y: auto;
    font-family: 'Inter', Arial, Helvetica, sans-serif !important;
    line-height: 1.7;
}

.card-func.card-func-active .card-details {
    font-size: 1rem;
    color: #495057;
    margin-top: 1.2rem;
    line-height: 1.7;
    font-family: 'Inter', Arial, Helvetica, sans-serif !important;
}

.card-func.card-func-active .close-card {
    position: absolute;
    top: 10px;
    right: 16px;
    font-size: 1.5rem;
    color: #888;
    background: none;
    border: none;
    z-index: 2;
    cursor: pointer;
    transition: color 0.2s;
    font-family: 'Inter', Arial, Helvetica, sans-serif !important;
}
.card-func.card-func-active .close-card:hover {
    color: #0d6efd;
}

/* Restante do site */
h1, h2, h3, h4, h5, h6 {
    font-family: 'Montserrat', Arial, Helvetica, sans-serif !important;
    margin-bottom: 1.2rem;
    line-height: 1.25;
}
p, ul, li, a, span, label, input, button, div, .list-group-item {
    font-family: 'Inter', Arial, Helvetica, sans-serif !important;
    margin-bottom: 1.1rem;
    line-height: 1.7;
}
.list-group-item {
    background: transparent;
    border: none;
    margin-bottom: 0.7rem;
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const cards = document.querySelectorAll('.card-func');
    let blurBg = null;
    let activeCard = null;
    let originalContent = {};

    // Conteúdo detalhado para cada card
    const cardDetails = [
        {
            title: "Cadastro de Usuários",
            img: "https://img.freepik.com/vetores-gratis/ilustracao-do-conceito-de-login-seguro_114360-757.jpg?w=740&t=st=1715450100~exp=1715450700~hmac=6b2b2e2a2e8e2e8e2e8e2e8e2e8e2e8e2e8e2e8e2e8e2e8e2e8e2e8e2e8e2e",
            text: "Clique para saber mais sobre como adicionar e gerenciar administradores.",
            details: `<b>Gerencie administradores facilmente:</b><br>
                <ul>
                    <li>Adicione novos usuários administradores com diferentes níveis de permissão.</li>
                    <li>Edite ou remova administradores conforme necessário.</li>
                    <li>Visualize o histórico de acessos e ações de cada usuário.</li>
                </ul>
                <p>O cadastro de usuários permite que você mantenha o controle total sobre quem pode acessar e gerenciar as credenciais do sistema, aumentando a segurança e a organização.</p>`
        },
        {
            title: "Segurança de Dados",
            img: "https://img.freepik.com/vetores-gratis/ilustracao-do-conceito-de-protecao-de-dados_114360-497.jpg?w=740&t=st=1715450200~exp=1715450800~hmac=6b2b2e2a2e8e2e8e2e8e2e8e2e8e2e8e2e8e2e8e2e8e2e8e2e8e2e8e2e8e2e",
            text: "Clique para saber mais sobre como protegemos suas informações.",
            details: `<b>Proteção avançada para suas credenciais:</b><br>
                <ul>
                    <li>Criptografia de dados sensíveis em banco de dados.</li>
                    <li>Políticas de senha forte e renovação periódica.</li>
                    <li>Monitoramento de tentativas de acesso não autorizado.</li>
                </ul>
                <p>Com foco em segurança, nosso sistema garante que apenas pessoas autorizadas tenham acesso às informações, reduzindo riscos de vazamento e ataques.</p>`
        },
        {
            title: "Controle de Acesso",
            img: "https://img.freepik.com/vetores-gratis/ilustracao-do-conceito-de-controle-de-acesso_114360-4971.jpg?w=740&t=st=1715450300~exp=1715450900~hmac=6b2b2e2a2e8e2e8e2e8e2e8e2e8e2e8e2e8e2e8e2e8e2e8e2e8e2e8e2e8e2e",
            text: "Clique para saber mais sobre permissões e acessos.",
            details: `<b>Permissões sob medida:</b><br>
                <ul>
                    <li>Defina quem pode acessar cada área do sistema.</li>
                    <li>Crie grupos de usuários com permissões específicas.</li>
                    <li>Audite acessos e ações para garantir conformidade.</li>
                </ul>
                <p>O controle de acesso permite que você personalize a experiência de cada usuário, mantendo a segurança e a eficiência do sistema.</p>`
        }
    ];

    cards.forEach((card, idx) => {
        // Salva o conteúdo original para restaurar depois
        originalContent[idx] = card.innerHTML;

        card.addEventListener('click', function () {
            if (activeCard) return; // Só um card ativo por vez

            // Cria o fundo escurecido
            blurBg = document.createElement('div');
            blurBg.className = 'card-func-blur-bg';
            document.body.appendChild(blurBg);

            // Monta o conteúdo detalhado
            card.innerHTML = `
                <button class="close-card" title="Fechar" aria-label="Fechar">&times;</button>
                <img src="${cardDetails[idx].img}" class="card-img-top" alt="${cardDetails[idx].title}">
                <div class="card-body">
                    <div class="card-title">${cardDetails[idx].title}</div>
                    <div class="card-text">${cardDetails[idx].text}</div>
                    <div class="card-details mt-3">${cardDetails[idx].details}</div>
                </div>
            `;

            card.classList.add('card-func-active');
            activeCard = card;

            // Impede scroll do body
            document.body.style.overflow = 'hidden';

            // Ao clicar no fundo, remove o destaque
            blurBg.addEventListener('click', removeHighlight);

            // Ao clicar no botão de fechar, remove o destaque
            card.querySelector('.close-card').addEventListener('click', function(e) {
                e.stopPropagation();
                removeHighlight();
            });
        });
    });

    function removeHighlight() {
        if (!activeCard) return;
        // Restaura o conteúdo original do card
        const idx = Array.from(cards).indexOf(activeCard);
        activeCard.innerHTML = originalContent[idx];
        activeCard.classList.remove('card-func-active');
        activeCard = null;
        if (blurBg) {
            blurBg.style.opacity = 0;
            setTimeout(() => {
                if (blurBg) blurBg.remove();
                blurBg = null;
            }, 180);
        }
        document.body.style.overflow = '';
    }
});
</script>

<div class="container my-5">
    <div class="row mb-5">
        <div class="col-md-8 d-flex flex-column justify-content-center">
            <h1 class="display-4 fw-bold text-primary mb-3" style="font-family: 'Montserrat', Arial, Helvetica, sans-serif;">Bem-vindo ao Gerenciador de Credenciais</h1>
            <p class="lead" style="font-family: 'Inter', Arial, Helvetica, sans-serif;">
                O gerenciamento de credenciais é fundamental para garantir a segurança e o controle de acesso em sistemas digitais. 
                Com um bom gerenciamento, você protege dados sensíveis, evita acessos não autorizados e mantém a integridade das informações da sua empresa.
            </p>
            <p style="font-family: 'Inter', Arial, Helvetica, sans-serif;">
                Nosso sistema permite cadastrar, armazenar e gerenciar credenciais de forma prática e segura, facilitando o controle de usuários e acessos ao banco de dados.
            </p>
        </div>
        <div class="col-md-4 d-flex align-items-center">
            <img src="https://img.freepik.com/vetores-gratis/ilustracao-do-conceito-de-seguranca-de-senha_114360-4322.jpg?w=740&t=st=1715450000~exp=1715450600~hmac=6b2b2e2a2e8e2e8e2e8e2e8e2e2e8e2e8e2e8e2e8e2e8e2e8e2e8e2e8e2e" 
                alt="Segurança de Credenciais" class="img-fluid shadow" style="border-radius:2rem;">
        </div>
    </div>

    <h2 class="text-center mb-4" style="font-family: 'Montserrat', Arial, Helvetica, sans-serif;">Funcionalidades do Sistema</h2>
    <div class="row mb-5">
        <div class="col-md-4">
            <div class="card h-100 shadow-sm card-func text-center">
                <img src="https://img.freepik.com/vetores-gratis/ilustracao-do-conceito-de-login-seguro_114360-757.jpg?w=740&t=st=1715450100~exp=1715450700~hmac=6b2b2e2a2e8e2e8e2e8e2e8e2e8e2e8e2e8e2e8e2e8e2e8e2e8e2e8e2e8e2e" class="card-img-top" alt="Cadastro de Usuários">
                <div class="card-body">
                    <div class="card-title">Cadastro de Usuários</div>
                    <div class="card-text">Clique para saber mais sobre como adicionar e gerenciar administradores.</div>
                </div>
                <div class="text-primary fw-bold small pb-2" style="letter-spacing:1px;font-family: 'Montserrat', Arial, Helvetica, sans-serif;">Clique para saber mais</div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card h-100 shadow-sm card-func text-center">
                <img src="https://img.freepik.com/vetores-gratis/ilustracao-do-conceito-de-protecao-de-dados_114360-497.jpg?w=740&t=st=1715450200~exp=1715450800~hmac=6b2b2e2a2e8e2e8e2e8e2e8e2e8e2e8e2e8e2e8e2e8e2e8e2e8e2e8e2e8e2e" class="card-img-top" alt="Segurança de Dados">
                <div class="card-body">
                    <div class="card-title">Segurança de Dados</div>
                    <div class="card-text">Clique para saber mais sobre como protegemos suas informações.</div>
                </div>
                <div class="text-primary fw-bold small pb-2" style="letter-spacing:1px;font-family: 'Montserrat', Arial, Helvetica, sans-serif;">Clique para saber mais</div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card h-100 shadow-sm card-func text-center">
                <img src="https://img.freepik.com/vetores-gratis/ilustracao-do-conceito-de-controle-de-acesso_114360-4971.jpg?w=740&t=st=1715450300~exp=1715450900~hmac=6b2b2e2a2e8e2e8e2e8e2e8e2e8e2e8e2e8e2e8e2e8e2e8e2e8e2e8e2e8e2e" class="card-img-top" alt="Controle de Acesso">
                <div class="card-body">
                    <div class="card-title">Controle de Acesso</div>
                    <div class="card-text">Clique para saber mais sobre permissões e acessos.</div>
                </div>
                <div class="text-primary fw-bold small pb-2" style="letter-spacing:1px;font-family: 'Montserrat', Arial, Helvetica, sans-serif;">Clique para saber mais</div>
            </div>
        </div>
    </div>

    <h2 class="text-center mb-4" style="font-family: 'Montserrat', Arial, Helvetica, sans-serif;">Por que Gerenciar Credenciais?</h2>
    <div class="row justify-content-center mb-5">
        <div class="col-md-10">
            <ul class="list-group list-group-flush fs-5" style="font-family: 'Inter', Arial, Helvetica, sans-serif;">
                <li class="list-group-item"><span class="text-primary fw-bold">Segurança:</span> Reduz riscos de vazamento de dados e ataques cibernéticos.</li>
                <li class="list-group-item"><span class="text-primary fw-bold">Organização:</span> Facilita o controle de acessos e permissões.</li>
                <li class="list-group-item"><span class="text-primary fw-bold">Conformidade:</span> Ajuda a cumprir normas e regulamentações de proteção de dados.</li>
                <li class="list-group-item"><span class="text-primary fw-bold">Praticidade:</span> Centraliza o gerenciamento de usuários e senhas em um só lugar.</li>
            </ul>
        </div>
    </div>

    <div class="row text-center">
        <div class="col">
            <a href="index.php" class="btn btn-primary btn-lg px-5 shadow" style="font-family: 'Montserrat', Arial, Helvetica, sans-serif;">Comece agora</a>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>
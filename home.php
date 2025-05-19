<?php include 'header.php'; ?>

<link href="https://fonts.googleapis.com/css2?family=Bungee&family=Rubik:wght@400;500;700&display=swap" rel="stylesheet">

<style>
body {
    background: linear-gradient(135deg,rgb(203, 243, 255) 0%,rgb(124, 209, 255) 100%) !important;
    font-family: 'Rubik', Arial, Helvetica, sans-serif !important;
}
.bg-graphic-home {
    position: fixed;
    top: -80px; left: -80px;
    width: 400px; height: 400px;
    background: radial-gradient(circle, #F7DC1B 0%, #0093C6 80%, transparent 100%);
    opacity: 0.10;
    z-index: 0;
    filter: blur(12px);
}
.bg-graphic2-home {
    position: fixed;
    bottom: -100px; right: -100px;
    width: 500px; height: 500px;
    background: radial-gradient(circle, #54BAD8 0%, #192C47 80%, transparent 100%);
    opacity: 0.07;
    z-index: 0;
    filter: blur(16px);
}
.card-func {
    cursor: pointer;
    z-index: 1;
    box-shadow: 0 1.5rem 3rem #192C4740, 0 0.5rem 1rem #0093C630;
    transition: box-shadow 0.18s, transform 0.18s;
    border: 2px solid #0093C6;
    font-family: 'Rubik', Arial, Helvetica, sans-serif !important;
    background: #fff;
    border-radius: 2rem;
}
.card-func:hover, .card-func:focus {
    box-shadow: 0 2.5rem 4.5rem #192C4770, 0 1rem 2rem #0093C650;
    outline: none !important;
    border-color: #F7DC1B !important;
    transform: translateY(-4px) scale(1.04);
}
.card-func.card-func-active {
    position: fixed !important;
    top: 50% !important;
    left: 50% !important;
    width: 520px;
    max-width: 98vw;
    height: auto !important;
    transform: translate(-50%, -50%) scale(1.12);
    box-shadow: 0 2rem 4rem #192C47cc, 0 1rem 2rem #0093C660;
    z-index: 1050;
    border: 2px solid #0093C6;
    background: #fff;
    padding: 0;
    display: flex;
    flex-direction: column;
    align-items: stretch;
    overflow: visible;
    font-family: 'Rubik', Arial, Helvetica, sans-serif !important;
    border-radius: 2rem;
}
.card-func .card-title,
.card-func.card-func-active .card-title {
    font-size: 1.3rem;
    font-weight: 700;
    color: #192C47;
    margin-bottom: 0.7rem;
    font-family: 'Bungee', Arial, Helvetica, sans-serif !important;
}
.card-func .card-text,
.card-func.card-func-active .card-text {
    font-size: 1rem;
    color: #0093C6;
    font-family: 'Rubik', Arial, Helvetica, sans-serif !important;
    margin-bottom: 1.1rem;
    line-height: 1.7;
}
.card-func.card-func-active .card-img-top,
.card-func .card-img-top {
    border-radius: 2rem 2rem 0 0 !important;
    max-height: 260px;
    object-fit: cover;
    width: 100%;
    border-bottom: 3px solid #F7DC1B;
    background: #fff;
}
.card-func.card-func-active .card-body,
.card-func .card-body {
    padding: 1.7rem;
    max-height: 260px;
    overflow-y: auto;
    font-family: 'Rubik', Arial, Helvetica, sans-serif !important;
    line-height: 1.7;
}
.card-func.card-func-active .card-details {
    font-size: 1rem;
    color: #192C47;
    margin-top: 1.2rem;
    line-height: 1.7;
    font-family: 'Rubik', Arial, Helvetica, sans-serif !important;
}
.card-func.card-func-active .close-card {
    position: absolute;
    top: 10px;
    right: 16px;
    font-size: 1.5rem;
    color: #0093C6;
    background: none;
    border: none;
    z-index: 2;
    cursor: pointer;
    transition: color 0.2s;
    font-family: 'Rubik', Arial, Helvetica, sans-serif !important;
}
.card-func.card-func-active .close-card:hover {
    color: #F7DC1B;
}
h1, h2, h3, h4, h5, h6 {
    font-family: 'Bungee', Arial, Helvetica, sans-serif !important;
    margin-bottom: 1.2rem;
    line-height: 1.25;
    color: #192C47;
    text-shadow: 1px 2px 0 #F7DC1B, 0 2px 8px #0093C6a0;
}
h1 span, h2 span {
    color: #F7DC1B;
    text-shadow: 1px 2px 0 #192C47;
}
p, ul, li, a, span, label, input, button, div, .list-group-item {
    font-family: 'Rubik', Arial, Helvetica, sans-serif !important;
    margin-bottom: 1.1rem;
    line-height: 1.7;
}
.list-group-item {
    background: transparent;
    border: none;
    margin-bottom: 1.2rem;
    color: #192C47;
    font-weight: 600;
    font-size: 1.45rem;
    padding: 1.2rem 1.5rem;
}
.list-group-item .text-primary {
    color: #192C47 !important;
    background: #F7DC1B;
    padding: 4px 14px;
    border-radius: 12px;
    font-size: 1.1em;
}
.btn-primary {
    background: linear-gradient(90deg, #F7DC1B 0%, #ffe96a 100%);
    border: none;
    padding: 1.2rem 0;
    font-size: 1.35rem;
    border-radius: 1.2rem;
    font-family: 'Bungee', Arial, Helvetica, sans-serif;
    font-weight: 700;
    letter-spacing: 1px;
    color: #192C47;
    box-shadow: 0 2px 12px #192C4740;
    transition: background 0.18s, transform 0.12s, color 0.18s;
}
.btn-primary:hover, .btn-primary:focus {
    background: linear-gradient(90deg, #0093C6 0%, #54BAD8 100%);
    color: #fff;
    transform: scale(1.03);
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const cards = document.querySelectorAll('.card-func');
    let blurBg = null;
    let activeCard = null;
    let originalContent = {};

    // Volte para as imagens originais (estilo flat/minimalista)
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
        originalContent[idx] = card.innerHTML;

        card.addEventListener('click', function () {
            if (activeCard) return;
            blurBg = document.createElement('div');
            blurBg.className = 'card-func-blur-bg';
            blurBg.style.position = 'fixed';
            blurBg.style.inset = 0;
            blurBg.style.background = 'rgba(0,147,198,0.10)';
            blurBg.style.zIndex = 1040;
            blurBg.style.backdropFilter = 'blur(4px)';
            document.body.appendChild(blurBg);

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
            document.body.style.overflow = 'hidden';
            blurBg.addEventListener('click', removeHighlight);
            card.querySelector('.close-card').addEventListener('click', function(e) {
                e.stopPropagation();
                removeHighlight();
            });
        });
    });

    function removeHighlight() {
        if (!activeCard) return;
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

<div class="bg-graphic-home"></div>
<div class="bg-graphic2-home"></div>
<div class="container my-5">
    <div class="row mb-5">
        <div class="col-md-8 d-flex flex-column justify-content-center">
            <h1 class="display-4 fw-bold mb-3" style="font-family: 'Bungee', Arial, Helvetica, sans-serif;">
                Bem-vindo ao <span></br>Gerenciador de Credenciais</span>
            </h1>
            <p class="lead" style="color:#192C47;">
                O gerenciamento de credenciais é fundamental para garantir a segurança e o controle de acesso em sistemas digitais. 
                Com um bom gerenciamento, você protege dados sensíveis, evita acessos não autorizados e mantém a integridade das informações da sua empresa.
            </p>
            <p style="color:#192C47;">
                Nosso sistema permite cadastrar, armazenar e gerenciar credenciais de forma prática e segura, facilitando o controle de usuários e acessos ao banco de dados.
            </p>
        </div>
        <div class="col-md-4 d-flex align-items-center">
            <img src="https://img.freepik.com/vetores-gratis/ilustracao-do-conceito-de-seguranca-de-senha_114360-4322.jpg?w=740&t=st=1715450000~exp=1715450600~hmac=6b2b2e2a2e8e2e8e2e8e2e8e2e2e8e2e8e2e8e2e8e2e8e2e8e2e8e2e8e2e" 
                alt="Segurança de Credenciais" class="img-fluid shadow" style="border-radius:2rem;">
        </div>
    </div>

    <h2 class="text-center mb-4"><span>Funcionalidades do Sistema</span></h2>
    <div class="row mb-5">
        <div class="col-md-4">
            <div class="card h-100 shadow-sm card-func text-center">
                <img src="https://img.freepik.com/vetores-gratis/ilustracao-do-conceito-de-login-seguro_114360-757.jpg?w=740&t=st=1715450100~exp=1715450700~hmac=6b2b2e2a2e8e2e8e2e8e2e8e2e8e2e8e2e8e2e8e2e8e2e8e2e8e2e8e2e8e2e" class="card-img-top" alt="Cadastro de Usuários">
                <div class="card-body">
                    <div class="card-title">Cadastro de Usuários</div>
                    <div class="card-text">Clique para saber mais sobre como adicionar e gerenciar administradores.</div>
                </div>
                <div class="fw-bold small pb-2" style="color:#F7DC1B;letter-spacing:1px;font-family: 'Bungee', Arial, Helvetica, sans-serif;">Clique para saber mais</div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card h-100 shadow-sm card-func text-center">
                <img src="https://img.freepik.com/vetores-gratis/ilustracao-do-conceito-de-protecao-de-dados_114360-497.jpg?w=740&t=st=1715450200~exp=1715450800~hmac=6b2b2e2a2e8e2e8e2e8e2e8e2e8e2e8e2e8e2e8e2e8e2e8e2e8e2e8e2e8e2e" class="card-img-top" alt="Segurança de Dados">
                <div class="card-body">
                    <div class="card-title">Segurança de Dados</div>
                    <div class="card-text">Clique para saber mais sobre como protegemos suas informações.</div>
                </div>
                <div class="fw-bold small pb-2" style="color:#F7DC1B;letter-spacing:1px;font-family: 'Bungee', Arial, Helvetica, sans-serif;">Clique para saber mais</div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card h-100 shadow-sm card-func text-center">
                <img src="https://img.freepik.com/vetores-gratis/ilustracao-do-conceito-de-controle-de-acesso_114360-4971.jpg?w=740&t=st=1715450300~exp=1715450900~hmac=6b2b2e2a2e8e2e8e2e8e2e8e2e8e2e8e2e8e2e8e2e8e2e8e2e8e2e8e2e8e2e" class="card-img-top" alt="Controle de Acesso">
                <div class="card-body">
                    <div class="card-title">Controle de Acesso</div>
                    <div class="card-text">Clique para saber mais sobre permissões e acessos.</div>
                </div>
                <div class="fw-bold small pb-2" style="color:#F7DC1B;letter-spacing:1px;font-family: 'Bungee', Arial, Helvetica, sans-serif;">Clique para saber mais</div>
            </div>
        </div>
    </div>

    <h2 class="text-center mb-4"><span>Por que Gerenciar Credenciais?</span></h2>
    <div class="row justify-content-center mb-5">
        <div class="col-md-10">
            <ul class="list-group list-group-flush fs-5">
                <li class="list-group-item"><span class="text-primary fw-bold">Segurança:</span> Reduz riscos de vazamento de dados e ataques cibernéticos. Permite rastrear acessos e identificar rapidamente tentativas suspeitas.</li>
                <li class="list-group-item"><span class="text-primary fw-bold">Organização:</span> Facilita o controle de acessos e permissões, centralizando informações de usuários e credenciais em um só lugar.</li>
                <li class="list-group-item"><span class="text-primary fw-bold">Conformidade:</span> Ajuda a cumprir normas e regulamentações de proteção de dados, mantendo registros detalhados de acessos e alterações.</li>
                <li class="list-group-item"><span class="text-primary fw-bold">Praticidade:</span> Centraliza o gerenciamento de usuários e senhas, agilizando processos de cadastro, alteração e remoção de acessos.</li>
                <li class="list-group-item"><span class="text-primary fw-bold">Escalabilidade:</span> Permite adicionar novos usuários e permissões conforme o crescimento da empresa, sem perder o controle e a segurança.</li>
                <li class="list-group-item"><span class="text-primary fw-bold">Auditoria:</span> Garante histórico detalhado de ações, facilitando auditorias e investigações internas.</li>
            </ul>
        </div>
    </div>

    <div class="row text-center">
        <div class="col">
            <a href="index.php" class="btn btn-primary btn-lg px-5 shadow">Comece agora</a>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>
const pessoas = {{ efetivo|json_encode|raw }};

// Event delegation: escuta todos os cliques na tabela
document.addEventListener('click', e => {
    const img = e.target.closest('.table__foto'); // verifica se clicou em uma imagem
    if (!img) return;

    const re = img.dataset.re; // pega o RE da imagem
    if (!re) return;

    const pessoa = pessoas.find(p => p.re === String(re));
    if (!pessoa) {
        console.warn('Pessoa não encontrada:', re);
        return;
    }

    // Preenche os dados do modal
    document.getElementById('modalNome').textContent = pessoa.nome;
    document.getElementById('modalCargo').textContent =
        `${pessoa.pt_gr} ${pessoa.re}-${pessoa.dg_re}`;
    document.getElementById('modalFuncao').textContent = pessoa.funcao_copom ?? '';
    const spanEquipe = document.getElementById('modalEquipe');
    if (pessoa.equipe && ['a','b','c','d','e'].includes(pessoa.equipe.toLowerCase())) {
        spanEquipe.textContent = `Equipe ${pessoa.equipe.toUpperCase()}`;
    } else {
        spanEquipe.textContent = pessoa.equipe ?? '';
    }
    document.getElementById('modalEmail').textContent = pessoa.email ?? '';
    document.getElementById('modalCelular').textContent = pessoa.celular ?? pessoa.telefone ?? '';
    document.getElementById('modalFoto').src = `public/img/perfil/${pessoa.re}.jpg`;

    spanEquipe.className = 'span__equipe';
    spanEquipe.classList.add(`span_equipe__${pessoa.equipe}`);

    const spanStatus = document.getElementById('modalStatus');
    spanStatus.className = 'status__efetivo';
    if (pessoa.situacao) {
        spanStatus.classList.add(`status__${pessoa.situacao.toLowerCase()}`);
        spanStatus.textContent = pessoa.situacao;
    } else {
        spanStatus.textContent = '';
    }
});


// Cria o modal apenas uma vez
function criaModal() {
    const container = document.getElementById('containerModal');
    if (!container.querySelector('#modalCard')) {
        container.innerHTML = `
        <div class="modal fade" id="modalCard" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">        
                    <div class="modal-body card_modal__body">
                        <div class="card_modal__foto">
                            <img id="modalFoto" src="" alt="">
                        </div>
                        <div class="card_modal__desc">
                            <h4 id="modalNome"></h4>
                            <p>
                                <span id="modalCargo"></span>
                                <span id="modalStatus" class="status__efetivo"></span>
                            </p>
                            <hr>
                            <p>
                                <span id="modalFuncao"></span>
                                <span id="modalEquipe" class="span__equipe"></span>
                            </p>
                            <p><span id="modalEmail"></span></p>
                            <p><span id="modalCelular"></span></p>
                        </div>
                        <div class="card_modal__button">
                            <button class="btn btn__secondary" data-bs-dismiss="modal">Fechar</button>
                            <button class="btn btn__primary">Ver mais</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        `;
    }
}

function carregaPessoa(re) {
    const pessoa = pessoas.find(p => p.re === String(re));
    if (!pessoa) {
        console.warn('Pessoa não encontrada:', re);
        return;
    }

    // Preenche os dados do modal
    document.getElementById('modalNome').textContent = pessoa.nome;
    document.getElementById('modalCargo').textContent =
        `${pessoa.pt_gr} ${pessoa.re}-${pessoa.dg_re}`;
    document.getElementById('modalFuncao').textContent = pessoa.funcao_copom ?? '';
    const spanEquipe = document.getElementById('modalEquipe');
    if (pessoa.equipe && ['a','b','c','d','e'].includes(pessoa.equipe.toLowerCase())) {
        spanEquipe.textContent = `Equipe ${pessoa.equipe.toUpperCase()}`;
    } else {
        spanEquipe.textContent = pessoa.equipe ?? '';
    }
    document.getElementById('modalEmail').textContent = pessoa.email ?? '';
    document.getElementById('modalCelular').textContent = pessoa.celular ?? pessoa.telefone ?? '';
    document.getElementById('modalFoto').src = `public/img/perfil/${pessoa.re}.jpg`;

    spanEquipe.className = 'span__equipe';
    spanEquipe.classList.add(`span_equipe__${pessoa.equipe}`);

    const spanStatus = document.getElementById('modalStatus');
    spanStatus.className = 'status__efetivo';
    if (pessoa.situacao) {
        spanStatus.classList.add(`status__${pessoa.situacao.toLowerCase()}`);
        spanStatus.textContent = pessoa.situacao;
    } else {
        spanStatus.textContent = '';
    }
}

// Inicializa modal uma vez
criaModal();

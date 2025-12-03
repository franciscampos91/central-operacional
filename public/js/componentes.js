class TituloBloco extends HTMLElement {
    connectedCallback() {
        const nome = this.getAttribute("nome") || "";
        const desc = this.getAttribute("desc") || "";

        this.innerHTML = `
            <div class="container__titulo">
                <h1>${nome}</h1>
                <p>${desc}</p>
            </div>
        `;
    }
}

customElements.define("titulo-bloco", TituloBloco);

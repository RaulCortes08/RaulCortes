class GameInstructions extends HTMLElement {
    constructor() {
        super();
        this.attachShadow({ mode: "open" });
        this.shadowRoot.innerHTML = `
            <style>
                div { text-align: center; font-family: Arial, sans-serif; }
                button { padding: 10px; margin-top: 10px; cursor: pointer; }
            </style>
            <div>
                <h2>Instrucciones</h2>
                <p>Haz clic en la bola para sumar puntos. ¡Alcanza 5 puntos para ganar!</p>
                <button id="start">Comenzar</button>
            </div>
        `;
    }

    connectedCallback() {
        this.shadowRoot.querySelector("#start").addEventListener("click", () => {
            document.body.innerHTML = "";
            startGame();
        });
    }
}

customElements.define("game-instructions", GameInstructions);

function startGame() {
    let score = 0;
    const gameContainer = document.createElement("div");
    gameContainer.style.textAlign = "center";
    document.body.appendChild(gameContainer);

    const ball = document.createElement("div");
    ball.classList.add("ball");
    document.body.appendChild(ball);

}
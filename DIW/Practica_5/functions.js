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

    function moveBall() {
        return new Promise((resolve) => {
            setTimeout(() => {
                const x = Math.random() * (window.innerWidth - 50);
                const y = Math.random() * (window.innerHeight - 50);
                ball.style.transform = `translate(${x}px, ${y}px)`;
                resolve();
            }, 1000);
        });
    }

    let ballAnimation;
    let ballInterval = setInterval(() => {
        moveBall();
    }, 2000); // Se mueve cada 2 segundos

    function animateBall() {
        ballAnimation = requestAnimationFrame(async () => {
            await moveBall();
            animateBall();
        });
    }

    animateBall();

    ball.addEventListener("click", async () => {
        score++;
        if (score >= 5) {
            cancelAnimationFrame(ballAnimation);
            clearInterval(ballInterval);
            const winMessage = document.createElement("div");
            winMessage.classList.add("win-message");
            winMessage.innerHTML = "<h2>¡Ganaste!</h2>";
            document.body.innerHTML = "";
            document.body.appendChild(winMessage);
        }
    });
}
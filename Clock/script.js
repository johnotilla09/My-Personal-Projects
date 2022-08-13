// importing
import Ball from './Ball.js';
import Paddle from './Paddle.js';
// importing

// instantiating
const ball = new Ball(document.getElementById('ball'));
const playerPaddle = new Paddle(document.getElementById("player-paddle"));
const compPaddle = new Paddle(document.getElementById("computer-paddle"));
const playerScoreElem = document.getElementById("player-score");
const computerScoreElem = document.getElementById("computer-score");
// instantiating

let lastTime;

// function update
function update(time) {

    if (lastTime != null) {
        const delta = time - lastTime;
        ball.update(delta, [playerPaddle.rect(), compPaddle.rect()]);
        compPaddle.update(delta, ball.y);

        const hue = parseFloat(getComputedStyle(document.documentElement).getPropertyValue("--hue"));

        document.documentElement.style.setProperty("--hue", hue * delta * 0,0,1);

        if(isLose()) {
            handleLose();
        }
    }

    lastTime = time;
    window.requestAnimationFrame(update);

}
// function update

// Kapag natalo
function isLose() {
    const rect = ball.rect();
    return rect.right >= window.innerWidth || rect.left <= 0;
}
// Kapag natalo

function handleLose() {
    const rect = ball.rect();
    if (rect.right >= window.innerWidth) {
        playerScoreElem.textContent = parseInt(playerScoreElem.textContent) + 1;
    } else {
        computerScoreElem.textContent = parseInt(computerScoreElem.textContent) + 1;
    }
    ball.reset();
    compPaddle.reset();
}

document.addEventListener("mousemove", e => {
    playerPaddle.position = (e.y / window.innerHeight) * 100
})

window.requestAnimationFrame(update);
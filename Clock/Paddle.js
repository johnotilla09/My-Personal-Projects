
const SPEED = 0.02;

export default class Paddle {

    constructor(paddleElem) {
        this.paddleElem = paddleElem;
        this.reset();
    }

    reset() {
        this.position = 50;
    }

    get position() {
        return parseFloat(getComputedStyle(this.paddleElem).getPropertyValue("--position"));
    }

    set position(value) {
        this.paddleElem.style.setProperty("--position", value);
    }

    rect() {
        return this.paddleElem.getBoundingClientRect();
    }

    update(delta, ballHeight) {
        this.position += SPEED * delta * (ballHeight - this.position);
    }

}
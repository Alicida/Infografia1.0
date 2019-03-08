import {
    TimelineLite
} from "gsap";

class Preloader {
    constructor(args) {
        this.id = args.id || "preloader";
        this.container = document.getElementById(this.id);
        this.init();
    }
    init() {
        document.body.classList.add("loading");
        // window.addEventListener("load", this.hide.bind(this), false);
    }
    hide() {
        document.body.classList.remove("loading");
        TweenMax.to(this.container, 0.35, {
            ease: Power2.easeOut,
            delay: 0.05,
            x: "-100%",
            display: "hide",
            onComplete: () => { 
                this.showPage();
            }
        });
    }
    showPage() {
        $('.item-animable').each((index, el) => {
            this.showItem(el, index);
        });
    }
    showItem(el, index) {
        TweenLite.to(el, 0.38, {
            ease: Power2.easeOut,
            delay: index * 0.05,
            opacity: 1,
            y: 0
        });
    }
}

module.exports = Preloader;

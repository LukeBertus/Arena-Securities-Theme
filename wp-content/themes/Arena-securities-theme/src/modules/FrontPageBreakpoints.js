import $ from 'jquery';

class FrontPageBreakpoints {
    constructor() {
        this.Events();
        this.ourClickDispatcher();
    }

    Events() {
        window.addEventListener("resize", this.ourClickDispatcher.bind(this))
    }
    // Methods will go here
    ourClickDispatcher(e) {
        console.log(window.innerWidth);
        if (window.innerWidth < 768) {
            $('.info__right').hide();
        } else {
            $('.info__right').show();
        }
    }
}

export default FrontPageBreakpoints;
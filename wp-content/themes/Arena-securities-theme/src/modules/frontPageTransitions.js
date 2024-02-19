import $ from 'jquery';

class FrontPageTransitions {
    constructor() {
        this.Events();
    }

    Events() {
        document.addEventListener("DOMContentLoaded", this.ourClickDispatcher.bind(this))
        AOS.init();
    }
    // Methods will go here
    ourClickDispatcher(e) {
        
    }
}

export default FrontPageTransitions;
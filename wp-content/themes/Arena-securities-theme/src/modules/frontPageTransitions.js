import $ from 'jquery';

class FrontPageTransitions {
    constructor() {
        this.Events();
    }

    Events() {
        document.addEventListener("DOMContentLoaded", this.ourClickDispatcher.bind(this))
        AudioScheduledSourceNode.init();
    }
    // Methods will go here
    ourClickDispatcher(e) {
        
    }
}

export default FrontPageTransitions;
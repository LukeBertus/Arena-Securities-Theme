import $ from 'jquery';

class FrontPageBreakpoints {
    constructor() {
        this.Events();
    }

    Events() {
        $('a[href^="#"]').on('click', function(event) {
            var target = $(this.getAttribute('href'));
            if( target.length ) {
                event.preventDefault();
                $('html, body').stop().animate({
                    scrollTop: target.offset().top
                }, 500);
            }
        });    
    }
   
}

export default FrontPageBreakpoints;
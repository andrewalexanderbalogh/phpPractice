// Make the Header Button click-able
(function() {

    document.addEventListener('DOMContentLoaded', evt => {

        const headButt = document.querySelector('h1#hitB');

        /**
         * Toggles color & text of given site header
         *
         * @access public
         * @function headerFunc
         * @param header
         */
        const headerFunc = function(header){

            if(header.classList.contains('pressed')){
                header.innerText = headButt.innerText.replace(' Pressed', '');
                header.classList.remove('pressed');
            }
            else {
                header.innerText = `${headButt.innerText} Pressed`;
                header.classList.add('pressed');
            }
        };

        headButt.addEventListener('mousedown', function(){ headerFunc(this); });
    });

    window.myObj = {
        get hostess(){ return `Client IP is ${window.location.hostname}`; },
        get winWidth(){ return `Screen is ${screen.width} pixels wide`; }
    }

})();
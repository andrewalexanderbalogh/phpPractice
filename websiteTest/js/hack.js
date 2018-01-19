(function(){
    document.addEventListener('DOMContentLoaded', () => {
        if (alertClick){
            alertClick = () => { alert('XSS Attack!'); }
        }
        else {
            let alertClick = () => { alert('XSS Attack!'); }
        }
    });
})();
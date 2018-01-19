document.addEventListener('DOMContentLoaded', function(){
    let result = document.querySelector('#result')
    if (Modernizr.canvas){
        result.innerHTML = "Rejoice!, you can draw on canvas";
    }
    else {
        result.innerHTML = "No canvas draw for you!";
    }

    let myMap = new Map([['a', 'weak'],['b', 'strong'],['c', 'tame']]);
    myMap.set('d', 'dumb');

    if (typeof Modernizr.addTest === 'function' && myMap instanceof Map){
       result.innerHTML = `${result.innerHTML} and we are ${myMap.get('b')}`;
    }

});
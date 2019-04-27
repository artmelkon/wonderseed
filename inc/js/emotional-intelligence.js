/* ### animation for emotional intelligence ### */
// create four boxes with circle
(function() {
    for(var i = 0; i < 4; i++) {
        let box = document.createElement('div');
        box.classList.add('animation-box');
        document.querySelector('.animation-cnt').appendChild(box);
        let circle = document.createElement('div');
        circle.className = 'circle c'+i+' am-brd-radius50 center';
        let txt = document.createTextNode('hello');
        circle.appendChild(txt);
        box.appendChild(circle);    
    }    
})();

let circleBox = document.querySelector('.animation-box'),
circle = document.querySelectorAll('.circle');


circle.forEach(function(el) {
    el.animate([
        { top: 0 },
        { top: '70%'}
    ], {
        duration: 4000,
        easing: 'linear',
        direction: 'alternate',
        iterations: Infinity
    });

    el.animate([
        { left: 0 },
        { left: '70%'}
    ], {
        duration: 4500,
        easing: 'linear',
        direction: 'alternate',
        iterations: Infinity
    });
})
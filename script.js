let list = document.querySelector('#photos .list');
let items = document.querySelectorAll('#photos .list .sliderimg');
let dots = document.querySelectorAll('#photos #slider div');
let prev = document.getElementsByClassName('prev');
let next = document.getElementsByClassName('next');
let active = 0;
let lenghtItems = items.length - 1;
next.onclick = function (){
    if(active + 1 > lenghtItems){
        active = 0;
    }else{
        active = active + 1;
    }
    reloadSlider();
}
function reloadSlider(){
    let checkLeft = items[active].offsetLeft;
    list.style.left = -checkLeft + 'px';
    let lastActiveDot = document.querySelector('#photos #slider .activslide');
    lastActiveDot.classList.remove('activeslide');
    dots[active].classList.add('activeslide');
}



const slider = document.getElementById("slider");
let sliderSection = document.querySelectorAll(".slider__section")[0];
let sliderSectionLast = document.querySelectorAll(".slider__section")[3];
let circulo = document.querySelector(".circulos");

function Next(){
    let sliderSectionFirst = document.querySelectorAll(".slider__section")[0];
    slider.style.marginLeft = "-200%";
    slider.style.transition = "all 1s";
    setTimeout(function(){
        slider.style.transition = "none";
        slider.insertAdjacentElement('beforeend', sliderSectionFirst);
        slider.style.marginLeft = '-100%';
    }, 1000);
}

function Prev(){
    let sliderSectionLast = document.querySelectorAll(".slider__section")[3];
    slider.style.marginLeft = "0";
    slider.style.transition = "all 1s";
    setTimeout(function(){
        slider.style.transition = "none";
        slider.insertAdjacentElement('afterbegin', sliderSectionLast);
        slider.style.marginLeft = '-100%';
    }, 1000);
}

setInterval(function(){
    Next();
},5000)
window.addEventListener('scroll', function(){
    let tituloMZ = document.querySelector(".mz");
    let contenedorZonas = document.querySelector(".mejoreszonas");
    let contenedorPoblaciones = document.querySelector(".contenedor-poblaciones");
    let fondoForm = document.querySelector(".fondo2");
    let footer = document.querySelector(".footer");

    let alturaWindow = window.innerHeight/1.3;

    let distancia = tituloMZ.getBoundingClientRect().top;
    let distancia2 = contenedorZonas.getBoundingClientRect().top;
    let distancia3 = contenedorPoblaciones.getBoundingClientRect().top;
    let distancia4 = fondoForm.getBoundingClientRect().top;
    let distancia5 = footer.getBoundingClientRect().top;

    tituloMZ.classList.add('transform-up');
    contenedorZonas.classList.add('transform-up');
    contenedorPoblaciones.classList.add('transform-up');
    fondoForm.classList.add('transform-up');

    if (distancia <= alturaWindow) {
        tituloMZ.classList.add('aparecer');
    }else{
        tituloMZ.classList.remove('aparecer');
    }

    if (distancia2 <= alturaWindow) {
        contenedorZonas.classList.add('aparecer');
    }else{
        contenedorZonas.classList.remove('aparecer');
    }

    if (distancia3 <= alturaWindow) {
        contenedorPoblaciones.classList.add('aparecer');
    }else{
        contenedorPoblaciones.classList.remove('aparecer');
    }

    if (distancia4 <= alturaWindow) {
        fondoForm.classList.add('aparecer2');
    }else{
        fondoForm.classList.remove('aparecer2');
    }

    if (distancia5 <= alturaWindow) {
        footer.classList.add('aparecer');
    }else{
        footer.classList.remove('aparecer');
    }
});

let botonBuscar = document.getElementById("btn-buscar");

botonBuscar.addEventListener('click', function(){
    let infoBuscar = document.querySelector(".buscar").value;
    if(infoBuscar == "servicios" || infoBuscar == "productos" || infoBuscar == "casa" || infoBuscar == "casas" || infoBuscar == "comprar"){
        document.getElementById("form-buscar").reset();
        location.href = "https://paradiseventacasas.000webhostapp.com/productos.html"
    }else if(infoBuscar == "empresa" || infoBuscar == "informacion" || infoBuscar == "mision" || infoBuscar == "vision"){
        location.href = "https://paradiseventacasas.000webhostapp.com/sobrenosotros.html";
        document.getElementById("form-buscar").reset();
    }else if(infoBuscar == "inicio" || infoBuscar == "paradise" || infoBuscar == "principal"){
        location.href = "https://paradiseventacasas.000webhostapp.com";
        document.getElementById("form-buscar").reset();
    }
});

const slider = document.getElementById("slider");
let sliderSection = document.querySelectorAll(".slider__section")[0];
let sliderSectionLast = document.querySelectorAll(".slider__section")[3];
const btnL = document.querySelector(".slider__btn-left");
const btnR = document.querySelector(".slider__btn-right");
let circulo = document.querySelector(".circulos");
let contenedor = document.querySelector(".contenedor");
let lupa = document.querySelector(".lupa");
let inputBuscar = document.querySelector(".buscar");
let btnBuscar = document.getElementById("btn-buscar");

let btnEnviar = document.getElementById("btn__enviar");

btnEnviar.addEventListener('click', function(){
    let nombre = document.getElementById("nombre").value;
    let correo = document.getElementById("email").value;
    let textArea = document.getElementById("text-area").value;
    if(nombre == "" && correo == ""){
        alert("Por favor ingrese un nombre y correo");
    }else if(nombre == "" && correo == "" && textArea == ""){
        alert("Por favor rellena todos los campos");
    }else if(correo == ""){
        alert("Introduce un correo valido.");
    }else if(nombre == ""){
        alert("Introduce un nombre");
    }else if(textArea == ""){
        alert("Ingresa un mensaje");
    }else if(nombre.length <=3) {
        alert(`El nombre: ${nombre} es muy corto, intenta con un nombre mas largo.`);
    }else{
        document.getElementById("formulario").reset();
        alert(`Bienvenido ${nombre}, en lo siguiente enviaremos un email a este correo que has ingresado: ${correo}, gracias por enviarnos un mensaje`);
    }
});

lupa.addEventListener('click', function(){
    if (inputBuscar.style.display = "none") {
        inputBuscar.style.display = "inline-block";
        btnBuscar.style.display = "inline-block";
        contenedor.style.marginLeft = "29%";
    }
});

btnBuscar.addEventListener('click', function(){
    inputBuscar.style.display = "none";
    btnBuscar.style.display = "none";
    contenedor.style.marginLeft = "50%";
});

let imgzona = document.querySelectorAll(".imgzona")[0];
let parrafo = document.querySelectorAll(".info")[0];
let zona = document.querySelectorAll(".zona")[0];

let imgzona2 = document.querySelectorAll(".imgzona")[1];
let parrafo2 = document.querySelectorAll(".info")[1];
let zona2 = document.querySelectorAll(".zona")[1];

let imgzona3 = document.querySelectorAll(".imgzona")[2];
let parrafo3 = document.querySelectorAll(".info")[2];
let zona3 = document.querySelectorAll(".zona")[2];

let imgzona4 = document.querySelectorAll(".imgzona")[3];
let parrafo4 = document.querySelectorAll(".info")[3];
let zona4 = document.querySelectorAll(".zona")[3];

imgzona.addEventListener('click', function(){
    if(parrafo.style.display == "none"){
        parrafo.style.display = "inline-block";
        zona.style.height = "auto";
        zona.style.width = "100%";
        parrafo2.style.display = "none"
        parrafo3.style.display = "none"
        parrafo4.style.display = "none"
        zona2.style.height = "300px";
        zona3.style.height = "300px";
        zona4.style.height = "300px";
        zona2.style.width = "300px";
        zona3.style.width = "300px";
        zona4.style.width = "300px";
    }else{
        parrafo.style.display = "none";
        zona.style.width = "300px";
        zona2.style.height = "300px";
        zona3.style.height = "300px";
        zona4.style.height = "300px";
        zona2.style.width = "300px";
        zona3.style.width = "300px";
        zona4.style.width = "300px";
    }
});

imgzona2.addEventListener('click', function(){
    if(parrafo2.style.display == "none"){
        parrafo2.style.display = "inline-block";
        zona2.style.height = "auto";
        zona2.style.width = "100%";
        parrafo.style.display = "none"
        parrafo3.style.display = "none"
        parrafo4.style.display = "none"
        zona.style.height = "300px";     
        zona3.style.height = "300px";
        zona4.style.height = "300px";
        zona.style.width = "300px";     
        zona3.style.width = "300px";
        zona4.style.width = "300px";
    }else{
        parrafo2.style.display = "none";
        zona2.style.width = "300px";
        zona.style.height = "300px";     
        zona3.style.height = "300px";
        zona4.style.height = "300px";
        zona.style.width = "300px";     
        zona3.style.width = "300px";
        zona4.style.width = "300px";
    }
});

imgzona3.addEventListener('click', function(){
    if(parrafo3.style.display == "none"){
        parrafo3.style.display = "inline-block";
        zona3.style.height = "auto";
        zona3.style.width = "100%";
        parrafo2.style.display = "none"
        parrafo.style.display = "none"
        parrafo4.style.display = "none"
        zona.style.height = "300px";
        zona2.style.height = "300px";
        zona4.style.height = "300px";
        zona.style.width = "300px";
        zona2.style.width = "300px";
        zona4.style.width = "300px";
    }else{
        parrafo3.style.display = "none";
        zona3.style.width = "300px";
        zona.style.height = "300px";
        zona2.style.height = "300px";
        zona4.style.height = "300px";
        zona.style.width = "300px";
        zona2.style.width = "300px";
        zona4.style.width = "300px";
    }
});

imgzona4.addEventListener('click', function(){
    if(parrafo4.style.display == "none"){
        parrafo4.style.display = "inline-block";
        zona4.style.height = "auto";
        zona4.style.width = "100%";
        parrafo2.style.display = "none"
        parrafo3.style.display = "none"
        parrafo.style.display = "none"
        zona.style.height = "300px";      
        zona2.style.height = "300px";
        zona3.style.height = "300px";
        zona.style.width = "300px";      
        zona2.style.width = "300px";
        zona3.style.width = "300px";
    }else{
        parrafo4.style.display = "none";
        zona4.style.width = "300px";
        zona.style.height = "300px";      
        zona2.style.height = "300px";
        zona3.style.height = "300px";
        zona.style.width = "300px";      
        zona2.style.width = "300px";
        zona3.style.width = "300px";
    }
});


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

btnR.addEventListener('click', function (){
    Next();
});

btnL.addEventListener('click', function (){
    Prev();
});

setInterval(function(){
    Next();
},5000);
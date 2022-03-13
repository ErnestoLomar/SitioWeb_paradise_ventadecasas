let contenedor = document.querySelector(".contenedor");
let lupa = document.querySelector(".lupa");
let inputBuscar = document.querySelector(".buscar");
let btnBuscar = document.getElementById("btn-buscar");

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

function mostrarInfo(){
    alert("PROXIMAMENTE");
}
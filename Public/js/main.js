$(document).ready(function(){
    scrollHeader();
    menuActive();
});

/*=============== CHANGE BACKGROUND HEADER ===============*/
function scrollHeader(){
    const header = document.getElementById('menu_principal');
    // When the scroll is greater than 50 viewport height, add the scroll-header class to the header tag
    if(this.scrollY >= 10){
        header.classList.add('scroll-header');
        header.classList.remove('color_white');
    } else{
        header.classList.remove('scroll-header');  
        if(document.URL.includes("index.html")){
            header.classList.add('color_white');
        }
    } 
}
window.addEventListener('scroll', scrollHeader)

/*=============== MENÚ QUE DETECTA LA PÀGINA ===============*/
function menuActive(){
    const header = document.getElementById("menu_principal");
    const pageHome = document.getElementById("HomePage");

}

function cargandoHome(){
    const header = document.getElementById("menu_principal");
    /* CAMBIO DE COLOR HEADER */
    header.classList.add('color_white'); 
}
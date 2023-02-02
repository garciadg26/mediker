$(document).ready(function(){
    scrollHeader();
    menuActive();
    animationScroll();
});

/*=============== CHANGE BACKGROUND HEADER ===============*/
function scrollHeader(){
    const header = document.getElementById('menu_principal');
    // When the scroll is greater than 50 viewport height, add the scroll-header class to the header tag
    if(this.scrollY >= 10){
        header.classList.add('scroll-header');
        // header.classList.remove('color_white');
    } else{
        header.classList.remove('scroll-header');  
        // header.classList.add('color_white');
    } 
}
window.addEventListener('scroll', scrollHeader)

/*=============== MENÚ QUE DETECTA LA PÀGINA ===============*/
function menuActive(){
    const header = document.getElementById("menu_principal");
    const pageHome = document.getElementById("HomePage");

    // NOSOTROS
    if(document.URL.includes('nosotros.php')){
        $('.navbar-nav li, .list_footer_menu a li').removeClass("active");
        $('.navbar-nav li:nth-child(2), .list_footer_menu a:nth-child(2) li').addClass("active");       
        header.classList.add('color_white');
    }
    // QUÉ HACEMOS
    if(document.URL.includes('que-hacemos.php')){
        $('.navbar-nav li, .list_footer_menu a li').removeClass("active");
        $('.navbar-nav li:nth-child(3), .list_footer_menu a:nth-child(3) li').addClass("active");
        header.classList.add('color_white');
    }
    // NOTICIAS
    if(document.URL.includes('noticias.php')){
        $('.navbar-nav li, .list_footer_menu a li').removeClass("active");
        $('.navbar-nav li:nth-child(5), .list_footer_menu a:nth-child(5) li').addClass("active");       
        header.classList.add('color_white');
    }
    // NOTICIAS
    if(document.URL.includes('productos.php')){
        header.classList.add('color_white');
    }
    // NOTICIAS
    if(document.URL.includes('fosfoflex.php')){
        header.classList.add('color_white');
    }
    // NOTICIAS DETALLE
    if(document.URL.includes('noticias-detalle.php')){
        $('.navbar-nav li, .list_footer_menu a li').removeClass("active");
        $('.navbar-nav li:nth-child(5), .list_footer_menu a:nth-child(5) li').addClass("active");       
        header.classList.add('color_white');
    }
    // DISTRIBUIDORES
    if(document.URL.includes('distribuidores.php')){
        $('.navbar-nav li, .list_footer_menu a li').removeClass("active");
        $('.navbar-nav li:nth-child(6), .list_footer_menu a:nth-child(6) li').addClass("active");       
        header.classList.add('color_white');
    }
    // CONTACTO
    if(document.URL.includes('contacto.php')){
        $('.navbar-nav li, .list_footer_menu a li').removeClass("active");
        $('.navbar-nav li:nth-child(7), .list_footer_menu a:nth-child(7) li').addClass("active");       
        header.classList.add('color_white');
    }
}


/*=============== UNICAMENTE EN EL HOMEPAGE ===============*/
function cargandoHome(){
    const header = document.getElementById("menu_principal");
    $('.navbar-nav li, .list_footer_menu a li').removeClass("active");
    $('.navbar-nav li:nth-child(1), .list_footer_menu a:nth-child(1) li').addClass("active"); 
    // $('.navbar-nav li, .menu_footer li').removeClass("active");
    // $('.navbar-nav li:nth-child(1), .menu_footer li:nth-child(1)').addClass("active");
    /* CAMBIO DE COLOR HEADER */

}

/*=============== SCROLL REVEAL ANIMATION ===============*/
function animationScroll(){
    const sr = ScrollReveal({
        distance: '60px',
        duration: 2500,
        delay: 400,
        // reset: true
    })

    sr.reveal(`.home__header, .section__title`,{delay: 400})
    sr.reveal(`.home__footer`,{delay: 700})
    sr.reveal(`.home__img`,{delay: 900, origin: 'top'})
    
    sr.reveal(`.sponsor__img, .products__card, .footer__logo, .footer__content, .footer__copy`,{origin: 'top', interval: 100})
    sr.reveal(`.specs__data, .discount__animate`,{origin: 'left', interval: 100})
    sr.reveal(`.specs__img, .discount__img`,{origin: 'right'})
    sr.reveal(`.case__img`,{origin: 'top'})
    sr.reveal(`.case__data`)
    
    sr.reveal(`.home__photo1__fade`,{distance: '60px'})
    sr.reveal(`.home__photo1`,{delay: 100})
    sr.reveal(`.home__photo2`,{delay: 200})
    sr.reveal(`.home__photo3`,{delay: 300})
    sr.reveal(`.home__photo4`,{delay: 400})
    sr.reveal(`.home__photo5`,{delay: 500})
    sr.reveal(`.home__photo6`,{delay: 600})
    sr.reveal(`.home__photo7`,{delay: 700})
    sr.reveal(`.home__photo8`,{delay: 800})
    sr.reveal(`.home__photo9`,{delay: 900})
    sr.reveal(`.home__photo10`,{delay: 1000})
    sr.reveal(`.home__photo11`,{delay: 1100})
    sr.reveal(`.home__photo12`,{delay: 1200})
    sr.reveal(`.home__photo13`,{delay: 1300})
    sr.reveal(`.home__photo14`,{delay: 1400})
    sr.reveal(`.home__photo15`,{delay: 1500})
    sr.reveal(`.home__photo16`,{delay: 1600})
    sr.reveal(`.home__photo17`,{delay: 1700})

}
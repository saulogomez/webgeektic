// EVENTO CUANDO SE MUEVE EL SCROLL, EL MISMO APLICA TAMBIEN CUANDO SE RESIZA
var change= false;
$(window).scroll(function(){
    window_y = $(window).scrollTop(); // VALOR QUE SE HA MOVIDO DEL SCROLL
    scroll_critical = parseInt($("#PRIMER_DIV").height()); // VALOR DE TU DIV
    if (window_y > scroll_critical) { // SI EL SCROLL HA SUPERADO EL ALTO DE TU DIV
       // ACA MUESTRAS EL OTRO DIV Y EL OCULTAS EL DIV QUE QUIERES
    } else {
       // ACA HACES TODO LO CONTRARIO
    }
});

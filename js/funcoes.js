var botaoEstado = 0;
function MostrarMenu() {
    if (botaoEstado == 0) {
        $("#botaomenu img").css("background", "linear-gradient(to bottom, #b2242a 0%, #c52e34 10%)");
        $(".menu").fadeIn(300);
        botaoEstado = 1;
    }
    else {
        $("#botaomenu img").css("background", "none");
        $(".menu").fadeOut(300);
        botaoEstado = 0;
    }
}

function FotoGaleria(indice) {
    document.getElementById('foto-atual').src = 'img/galeria/' + indice + '.jpg';
}
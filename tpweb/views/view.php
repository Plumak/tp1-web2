<?php
class JugadoresView{
function MostrarEnView ($info_jugadores) {
require ('templates/jugadores.phtml');
}
    function mostrarMessi ($info_messi) {
 require ('templates/jugadores/messi.phtml');
    }
    function mostrarMichel ($info_michel){
 require ('templates/jugadores/michel.phtml');
    }
    function mostrarSRomero($info_sromero){
require ('templates/jugadores/sromero.phtml');
    }
    function mostrarCRomero($info_cromero){
require ('templates/jugadores/cromero.phtml');
    }
    function mostrarBenedetto($info_benedetto){
require ('templates/jugadores/benedetto.phtml');
    }
    function mostrarClubes ($lista_clubes){
        require ('templates/clubes.phtml');
    }
    function mostrarSantaJugadores ($santa_jugadores){
        require ('templates/clubes/santamarina.phtml');
    }
    function mostrarInterMJugadores ($interm_jugadores){
        require ('templates/clubes/intermiami.phtml');
    }
    function mostrarBocaJugadores ($boca_jugadores){
        require ('templates/clubes/boca.phtml');
    }
    function mostrarTotJugadores ($tot_jugadores){
        require ('templates/clubes/tottenham.phtml');
    }
}
?>
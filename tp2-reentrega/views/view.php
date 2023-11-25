<?php
class JugadoresView{
function MostrarEnViewJugadores($jugadores) {
require ('templates/jugadores.phtml');
}
function MostrarEnViewJugador ($jugador){
    require ('templates/jugador.phtml');
}
function MostrarClubes ($clubes){
        require ('templates/clubes.phtml');
    }
    function MostrarJugadorPorClub ($JugadorPorClub){
        require ('templates/jugadorclub.phtml');
    }
}
?>
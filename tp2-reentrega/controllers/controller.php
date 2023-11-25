<?php
require_once('./models/model_jugadores.php');
require_once ('./models/model_clubes.php');
require_once('./views/view.php');

class informacion_controller{

    private $model;
    private $view;
    private $modelJugadores;
    private $modelClub;

     function __construct () {
        $this -> modelJugadores = new JugadoresModel ();
        $this -> modelClub = new ClubesModel ();
        $this -> view = new JugadoresView ();
    }
     function mostrarJugadores () {
        session_start();
        $jugadores = $this->modelJugadores->ObtenerJugadores();
        $this->view->MostrarEnViewJugadores($jugadores);
    }
    function mostrarJugador ($id) {
        session_start();
        $jugador = $this->modelJugadores->ObtenerJugadorId($id);
        $this->view->MostrarEnViewJugador($jugador);
    }
    function mostrarClubes () {
        session_start();
        $clubes = $this-> modelClub->ObtenerClubes();
        $this-> view->MostrarClubes ($clubes);
    }
    function mostrarJugadoresPorClub ($id){
        session_start();
        $JugadorPorClub = $this->modelClub->obtenerJugadoresPorClub($id);
        $this->view->MostrarJugadorPorClub($JugadorPorClub);
    }
}
?>
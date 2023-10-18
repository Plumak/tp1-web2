<?php
require_once('./models/model_jugadores.php');
require_once ('./models/model_jugador.php');
require_once ('./models/model_clubes.php');
require_once('./views/view.php');

class informacion_controller{

    private $model;
    private $view;
    private $modelAll;
    private $modelClub;

     function __construct () {
        $this -> modelAll = new JugadoresModel ();
        $this -> modelClub = new ClubesModel ();
        $this -> model = new CadaJugadorModel();
        $this -> view = new JugadoresView ();
    }
     function mostrarTodosJugadores () {
        $jugadores = $this->modelAll->getJugadoresInfo();
        $this->view->MostrarEnView($jugadores);
    }
    function mostrarMessi () {
        $messi = $this->model->getJugadorMessi();
        $this-> view->mostrarMessi($messi);
    }
    function mostrarBenedetto () {
        $benedetto = $this->model->getJugadorBenedetto();
        $this-> view->mostrarBenedetto($benedetto);
    }
    function mostrarSRomero () {
        $sromero = $this->model->getJugadorSRomero();
        $this-> view->mostrarSRomero($sromero);
    }
    function mostrarMichel () {
        $michel = $this->model->getJugadorMichel();
        $this-> view->mostrarMichel($michel);
    }
    function mostrarCRomero () {
        $cromero = $this->model->getJugadorCRomero();
        $this-> view->mostrarCRomero($cromero);
    }
    function mostrarClubes () {
        $clubes = $this-> modelClub->getClubes();
        $this-> view->mostrarClubes ($clubes);
    }
    function mostrarInterM(){
     $interm = $this -> modelClub-> getInterM();
     $this-> view-> mostrarInterMJugadores ($interm);
    }
    function mostrarBoca (){
        $boca = $this -> modelClub-> getBoca();
        $this-> view-> mostrarBocaJugadores ($boca);
    }
    function mostrarSanta (){
        $santa = $this -> modelClub-> getSanta();
        $this-> view-> mostrarSantaJugadores ($santa);
    }
    function mostrarTotten (){
        $totten = $this -> modelClub-> getTotten();
        $this-> view-> mostrarTotJugadores ($totten);
    }
}
?>
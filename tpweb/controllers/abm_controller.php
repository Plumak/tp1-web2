<?php
require_once ('models/model_abm.php');
require_once ('views/view_abm.php');
class abm_controller {
    private $model;
    private $view;
    function __construct() {
$this->model= new abmModel ();
$this->view=new abmView ();
    }
     public function Ejecutoabm () {
        $nombre = $_POST['nombre']
        $apellido = $_POST['apellido']
        $edad = $_POST['edad']
        $posicion = $_POST['posicion']
        $abm = $this->model->InfoAbm($nombre,$apellido,$edad,$posicion);
        $this->view->MostrarAbm();
    }
}
?>
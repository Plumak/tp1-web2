<?php
require_once ('./models/model_abm.php');
require_once ('./views/view.php');
require_once ('./helper/user_helper.php');
class abm_controller {
    private $model;
    private $view;
    private $helper;
    function __construct() {
$this->model= new AbmModel ();
$this->view= new JugadoresView ();
$this->helper= new UserHelper();
    }
    function EliminarJugador ($id){
 if (isset ($id)){
    $this->model->EliminarJugador($id);
    header("Location: " . BASE_URL);
 }
 else{
   $this->view->mostrarError("Error falta completar datos");
 }
    }
    function AgregarJugador (){
      $nombre = $_POST["nombre"];
      $apellido = $_POST["apellido"];
      $edad = $_POST["edad"];
      $posicion = $_POST["posicion"];
      $club = $_POST["club"];

      if ((!empty($nombre)) && (!empty($apellido)) && (!empty($edad)) && (!empty($posicion)) && (!empty($club))){

         $this->model->AgregarJugador($nombre,$apellido,$edad,$posicion,$club);
         header("Location: " . BASE_URL);
      }
      else{
         $this->view->mostrarError("Error falta completar datos");
      }
         }

         function EditarJugador (){
      $nombre = $_POST["nombre"];
      $apellido = $_POST["apellido"];
      $edad = $_POST["edad"];
      $posicion = $_POST["posicion"];
      $id_club = $_POST["id_club"];
      $id_jugador = $_POST["id_jugador"];
      if (!empty($id_jugador) && (!empty($nombre)) && (!empty($apellido)) && (!empty($edad)) && (!empty($posicion)) && (!empty($id_club))){
         $this->model->EditarJugador($nombre,$apellido,$edad,$posicion,$id_club,$id_jugador);
         header("Location: " . BASE_URL);
      }
      else{
         $this->view->mostrarError("Error, falta completar datos");
      }
         }
      function EliminarClub($id){
         if (isset ($id)){
            $this->model->EliminarClub($id);
            header("Location: " . BASE_URL. "clubes");
         }
         else{
           $this->view->mostrarError("Error, falta completar datos");
      }
}
function EditarClub (){
   $nombre = $_POST["nombre"];
   $id_club = $_POST["id_club"];
   if ((!empty($nombre)) && (!empty($id_club))) {
      $this->model->EditarClub($nombre,$id_club);
      header("Location: " . BASE_URL. "clubes");
   }
   else{
      $this->view->mostrarError("Error, falta completar datos");
   }
}
function AgregarClub(){
   $nombre = $_POST ["nombre"];
   $id_club = $_POST ["id_club"];
   if((!empty($nombre) && !empty($id_club))){
      $this->model->AgregarClub($id_club,$nombre);
      header("Location: " . BASE_URL. "clubes");
   }
   else{
      $this->view->mostrarError("Error, falta completar datos");
   }
}
}
?>
<?php
require_once ('./controllers/controller.php');
require_once ('./controllers/login_controller.php');
require_once ('./controllers/abm_controller.php');

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');
// leemos la accion que viene por parametro
$action = 'jugadores'; // acción por defecto

if (!empty($_GET['action'])) { // si viene definida la reemplazamos
    $action = $_GET['action']; 
}

$params = explode('/', $action);

$jugadores_controller = new informacion_controller();
$clubes_controller = new informacion_controller();
$login_controller = new login_controller();
$abm_controller = new  abm_controller();

// determina que camino seguir según la acción
switch ($params[0]) {
    case 'jugadores':
        $id = $params[1];
        if (empty ($id)){
        $jugadores_controller->mostrarJugadores();
        }
    else {
        $jugadores_controller->mostrarJugador($id);
    }
    break;
    case 'clubes';
    $id = $params[1];
    if (empty ($id)) {
        $clubes_controller-> mostrarClubes ();
    }
    else{
        $clubes_controller-> mostrarJugadoresPorClub ($id); 
    }
  break;
 case 'login';
 $login_controller-> MostrarLogin ();
 break;
 case 'logout';
 $login_controller-> Logout();
 break;
 case 'auth';
 $login_controller-> AuthUsuario();
 break;
 case 'eliminarjugador';
 $id = $params[1];
 $abm_controller-> EliminarJugador($id);
 break;
 case 'agregarjugador';
 $abm_controller->AgregarJugador();
 break;
 case 'editarjugador';
 $abm_controller-> EditarJugador();
 break;
 case 'eliminarclub';
 $id = $params[1];
 $abm_controller-> EliminarClub($id);
 break;
 case 'agregarclub';
 $abm_controller-> AgregarClub();
 break;
 case 'editarclub';
 $abm_controller-> EditarClub();
 break;
 case 'errorlogin';
 $login_controller->ErrorLogin();
 break;
    default:
        echo('404 Page not found');
        break;
}
?>

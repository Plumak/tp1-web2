<?php
require_once ('./controllers/controller.php');
require_once ('./controllers/login_controller.php');


define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');
// leemos la accion que viene por parametro
$action = 'jugadores'; // acción por defecto

if (!empty($_GET['action'])) { // si viene definida la reemplazamos
    $action = $_GET['action']; 
}

$params = explode('/', $action);

// determina que camino seguir según la acción
switch ($params[0]) {
    case 'jugadores':
        $jugadores_controller = new informacion_controller();
        $jugadores_controller->mostrarTodosJugadores();
        break;
    case 'lionel':
        $jugadores_controller = new informacion_controller();
        $jugadores_controller->mostrarMessi();
        break;
    case 'martin':
        $jugadores_controller = new informacion_controller();
        $jugadores_controller->mostrarMichel();
        break;
    case 'dario':
    $jugadores_controller = new informacion_controller();
        $jugadores_controller->mostrarBenedetto();
        break;
    case 'sergio': 
        $jugadores_controller = new informacion_controller();
        $jugadores_controller->mostrarSRomero();
        break;
    case 'cristian': 
        $jugadores_controller = new informacion_controller();
        $jugadores_controller->mostrarCRomero();
        break;
    case 'categorias';
  $clubes_controller = new informacion_controller ();
  $clubes_controller-> mostrarClubes ();
  break;
  case 'intermiami';
$clubes_controller = new informacion_controller ();
$clubes_controller -> mostrarInterM ();
break;
  case 'boca';
$clubes_controller = new informacion_controller ();
$clubes_controller -> mostrarBoca ();
break;
  case 'santamarina';
$clubes_controller = new informacion_controller ();
$clubes_controller -> mostrarSanta ();
break;
  case 'tottenham';
 $clubes_controller = new informacion_controller ();
 $clubes_controller -> mostrarTotten ();
 break;
 case 'login';
 $login_controller = new login_controller ();
 $login_controller -> obtenerLogin ();
 break;
 case 'logout';
 $login_controller = new login_controller();
 $login_controller -> EjecutarLogout();
 case 'abm';
 $abm_controller = new abm_controller();
 $abm_controller -> Ejecutoabm();
    default:
        echo('404 Page not found');
        break;
}
?>

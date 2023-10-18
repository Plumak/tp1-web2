<?php
require_once ('./models/model_login.php');
require_once ('./views/view_login.php');
class login_controller {
    private $model;
    private $view;
    function __construct(){
        $this->model = new LoginModel ();
        $this->view = new LoginView ();
    }
        function obtenerLogin() {
        $metodo = $_SERVER["REQUEST_METHOD"];

        switch ($metodo) {
            case 'GET':
                $this->view->mostrarLogin();
                break;
            case "POST":
                //valido tener la info 
                if (isset($_POST["username"]) && isset($_POST["password"]) && $_POST["password"] != "") {
                    $username = $_POST["username"];
                    $password = $_POST["password"];
                    $UserPasswordHash = password_hash($password, PASSWORD_BCRYPT);
                    return $UserPasswordHash;
                    //busco el usuario con este user
                    $user = $this->model->getInfoLogin($username);
                    //valido el user
                    if ($user && password_verify ($UserPasswordHash, ($user->password))) {
                        session_start();
                        $_SESSION["username"] = $user->usuario;
                        $_SESSION["password"] = $user->password;
                        header ('Location: abm');
                    // Inicia la session, y re-dirige hacia la seccion jugadores //
                    }

                }
                else{
                    $this->view->mostrarLogin("Login incorrecto");
                }
            default:
                break;
    }
}
function EjecutarLogout () {
    session_start ();
    session_destroy();
    header('Location: login' );
}
}
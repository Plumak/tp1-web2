<?php
require_once ('./models/model_login.php');
require_once ('./views/view_login.php');
require_once ('./views/view.php');
class login_controller {
    private $model;
    private $view;
    function __construct(){
        $this->model = new LoginModel ();
        $this->view = new LoginView ();
    }
        function MostrarLogin() {
                $this->view->mostrarLogin();
        }
    function AuthUsuario(){
                //valido tener la info 
                if ((isset($_POST["username"]) && (isset($_POST["password"])))) {
                    $username = $_POST["username"];
                    $password = $_POST["password"];

                    //busco el usuario con este user
                    $user = $this->model->InfoLogin($username);
                    //valido el user
                    if ((!empty($user) && password_verify($password,$user->password))){
                        session_start();
                        $_SESSION["username"] = $user->usuario;
                        $_SESSION["password"] = $user->password;
                        $_SESSION["logueado"] = true;
                       header ("Location: " . BASE_URL);
                    // Inicia la session, y re-dirige hacia la seccion jugadores //
                    

                }
                else{
                    $this->view->mostrarLoginIncorrecto("Login incorrecto");
                }
            }
    }
function Logout () {
    session_start ();
    session_destroy();
    header("Location: " . BASE_URL."login");
}
}
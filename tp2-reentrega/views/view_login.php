<?php
class LoginView {
    function mostrarLogin(){
        require ('./templates/login.phtml');
    }
    function mostrarLoginIncorrecto(){
        require ('./templates/error.phtml');
    }
}

?>
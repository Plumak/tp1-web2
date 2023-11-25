<?php 
class UserHelper{
    function CheckLoguedIn(){
        session_start();
        if((isset($_SESSION["username"])))
        header("location. " .BASE_URL."login");
    die();
}
}
?>
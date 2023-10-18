<?php
require_once ('config.php');
class LoginModel {
    private $db;
    function __construct (){
        $this->db = new PDO("mysql:host=".HOST.";dbname=".DBNAME.";charset=utf8", 'root', '');
    }

function getInfoLogin ($username){
$query = $this->db->prepare("SELECT * FROM usuarios WHERE usuario = ? ");
$query->execute([$username]);
$usuario = $query->fetch(PDO::FETCH_OBJ);
return $usuario;
}
}
?>
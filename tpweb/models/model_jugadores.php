<?php
require_once ('config.php');
class JugadoresModel {
    private $db;
    function __construct (){
        $this->db = new PDO("mysql:host=".HOST.";dbname=".DBNAME.";charset=utf8", 'root', '');
    }
function getJugadoresInfo() {
        $sentencia = $this->db->prepare("SELECT * FROM jugadores INNER JOIN clubes ON jugadores.id_club = clubes.id_club");
    $sentencia->execute();
    $info_jugadores = $sentencia->fetchAll(PDO::FETCH_OBJ);
    return $info_jugadores;
    }
}
?>
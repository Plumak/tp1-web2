<?php
require_once ('config.php');
class ClubesModel {
    private $db;
    function __construct (){
        $this->db = new PDO("mysql:host=".HOST.";dbname=".DBNAME.";charset=utf8", 'root', '');
    }
    function ObtenerClubes () {
        $query = $this->db-> prepare("SELECT * FROM clubes");
        $query-> execute ();
        $lista_clubes = $query->fetchAll(PDO::FETCH_OBJ);
        return $lista_clubes;
}
function obtenerJugadoresPorClub ($id){
    $sentencia = $this->db->prepare("SELECT * FROM jugadores INNER JOIN clubes ON jugadores.id_club = clubes.id_club WHERE clubes.id_club = ?");
    $sentencia->execute([$id]);
    $JPorClub = $sentencia->fetchAll(PDO::FETCH_OBJ);
    return $JPorClub;
}
}
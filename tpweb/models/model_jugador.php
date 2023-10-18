<?php
require_once ('config.php');
class CadaJugadorModel {
    private $db;
    function __construct (){
        $this->db = new PDO("mysql:host=".HOST.";dbname=".DBNAME.";charset=utf8", 'root', '');
    }
 function getJugadorSRomero () {
    $query = $this->db->prepare("SELECT * FROM jugadores INNER JOIN clubes ON jugadores.id_club = clubes.id_club WHERE id_jugador = 1001");
    $query-> execute ();
    $info_sromero = $query->fetchAll(PDO::FETCH_OBJ);
    return $info_sromero;
}
function getJugadorBenedetto () {
    $query = $this->db->prepare("SELECT * FROM jugadores INNER JOIN clubes ON jugadores.id_club = clubes.id_club WHERE id_jugador = 1002");
    $query-> execute ();
    $info_benedetto = $query->fetchAll(PDO::FETCH_OBJ);
    return $info_benedetto;
}
function getJugadorMessi () {
    $query = $this->db->prepare("SELECT * FROM jugadores INNER JOIN clubes ON jugadores.id_club = clubes.id_club WHERE id_jugador = 1003");
    $query-> execute ();
    $info_messi = $query->fetchAll(PDO::FETCH_OBJ);
    return $info_messi;
}
function getJugadorMichel () {
    $query = $this->db->prepare("SELECT * FROM jugadores INNER JOIN clubes ON jugadores.id_club = clubes.id_club WHERE id_jugador = 1004");
    $query-> execute ();
    $info_michel = $query->fetchAll(PDO::FETCH_OBJ);
    return $info_michel;
}
function getJugadorCRomero () {
    $query = $this->db->prepare("SELECT * FROM jugadores INNER JOIN clubes ON jugadores.id_club = clubes.id_club WHERE id_jugador = 1005");
    $query-> execute ();
    $info_cromero = $query->fetchAll(PDO::FETCH_OBJ);
    return $info_cromero;
}
}
?>
<?php
require_once ('config.php');
class ClubesModel {
    private $db;
    function __construct (){
        $this->db = new PDO("mysql:host=".HOST.";dbname=".DBNAME.";charset=utf8", 'root', '');
    }
    function getClubes () {
        $query = $this->db-> prepare("SELECT * FROM clubes");
        $query-> execute ();
        $lista_clubes = $query->fetchAll(PDO::FETCH_OBJ);
        return $lista_clubes;
    }
    function getInterM (){
        $query = $this->db-> prepare("SELECT * FROM jugadores INNER JOIN clubes ON jugadores.id_club = clubes.id_club WHERE club = 'Inter Miami'");
        $query-> execute ();
        $interm_jugadores = $query->fetchAll(PDO::FETCH_OBJ);
        return $interm_jugadores;
    }
    function getBoca (){
        $query = $this->db-> prepare("SELECT * FROM jugadores INNER JOIN clubes ON jugadores.id_club = clubes.id_club WHERE club = 'Boca Juniors'");
        $query-> execute ();
        $boca_jugadores = $query->fetchAll(PDO::FETCH_OBJ);
        return $boca_jugadores;
    }
    function getSanta (){
        $query = $this->db-> prepare("SELECT * FROM jugadores INNER JOIN clubes ON jugadores.id_club = clubes.id_club WHERE club = 'Santamarina'");
        $query-> execute ();
        $santa_jugadores = $query->fetchAll(PDO::FETCH_OBJ);
        return $santa_jugadores;
    }
    function getTotten (){
        $query = $this->db-> prepare("SELECT * FROM jugadores INNER JOIN clubes ON jugadores.id_club = clubes.id_club WHERE club = 'Tottenham'");
        $query-> execute ();
        $tot_jugadores = $query->fetchAll(PDO::FETCH_OBJ);
        return $tot_jugadores;
    }

}
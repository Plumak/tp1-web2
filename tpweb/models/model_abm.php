<?php
require_once ('config.php')
class AbmModel {
    private $db;
    function __construct (){
        $this->db = new PDO("mysql:host=".HOST.";dbname=".DBNAME.";charset=utf8", 'root', '');
    public function ListaItems (){
        $query = $this->db-> prepare("SELECT * FROM 'jugadores");
        $query-> execute ();
        $ListaJugadores = $query->fetchAll(PDO::FETCH_OBJ);
        return $ListaJugadores;

    public function AgregoItem (){
        $query = $this->db-> prepare("INSERT INTO `jugadores` `nombre`, `apellido`, `edad`, `posicion`) VALUES ('$nombre','$apellido','$edad','$posicion'");
        $query-> execute ();
        $agregoJugador = $query->fetch(PDO::FETCH_OBJ);
        return $agregoJugador;
    }

    public function EliminoItem (){
        $query = $this->db-> prepare("DELETE FROM `jugadores` WHERE name = $nombre");
        $query-> execute ();
        $EliminoJugador = $query->fetch(PDO::FETCH_OBJ);
        return $EliminoJugador;

    }
    public function EditoItem (){
        $query = $this->db-> prepare("UPDATE `jugadores` SET ,`nombre`='$nombre',`apellido`='$apellido',`edad`='$edad',`posicion`='$posicion', WHERE 'nombre' = $nombre ");
        $query-> execute ();
        $EditoJugador = $query->fetch(PDO::FETCH_OBJ);
        return $EditoJugador;
}
}
}
}
?>
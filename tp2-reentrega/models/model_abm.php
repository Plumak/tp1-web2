<?php
require_once ('config.php');
class AbmModel {
    private $db;
    function __construct (){
        $this->db = new PDO("mysql:host=".HOST.";dbname=".DBNAME.";charset=utf8", 'root', '');
    }
     function EliminarJugador ($id){
        $query = $this->db-> prepare("DELETE FROM `jugadores` WHERE id_jugador = ?");
        $query-> execute ([$id]);
        $query->fetch(PDO::FETCH_OBJ);
        return;
    }
     function AgregarJugador ($nombre,$apellido,$edad,$posicion,$club){
        $query = $this->db->prepare("INSERT INTO jugadores (nombre, apellido, edad, posicion, id_club) VALUES (?,?,?,?,?)");
        $query->execute([$nombre,$apellido,$edad,$posicion,$club]);
        return;
    }
     function EditarJugador ($nombre,$apellido,$edad,$posicion,$id_club,$id_jugador){
        $query = $this->db->prepare("UPDATE jugadores SET nombre = ?, apellido = ?, edad = ? , posicion = ? , id_club = ? WHERE id_jugador = ?");
        $query->execute([$nombre,$apellido,$edad,$posicion,$id_club,$id_jugador]);
        return; 
}
function EliminarClub ($id){
    $query = $this->db-> prepare("DELETE FROM clubes WHERE id_club = ? ");
    $query-> execute ([$id]);
    return;
}
function AgregarClub ($id_club,$nombre){
    $query = $this->db->prepare("INSERT INTO clubes (id_club, club) VALUES (?,?)");
    $query->execute([$id_club,$nombre]);
    return;
}
function EditarClub ($nombre,$id_club){
    $query = $this->db->prepare("UPDATE clubes SET club = ? WHERE id_club = ?");
    $query->execute([$nombre,$id_club]);
    return; 
}
}
?>
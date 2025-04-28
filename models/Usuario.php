<?php

require_once 'config/database.php';

class Usuario {
    private $conexion;
    public function __construct() {
        $this->conexion = Database::conectar();
    }

    public function all(){
        $stmt = $this->conexion->query("SELECT * FROM Usuario");
        $usuarios = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $usuarios;
    }

    public function find($id){
        $stmt = $this->conexion->query("SELECT * FROM Usuario WHERE id = $id");
        $usuario = $stmt->fetch(PDO::FETCH_ASSOC);
        return $usuario;
    }

    public function update($id, $name, $lastname) {
        $stmt = $this->conexion->prepare("UPDATE Usuario SET name=?, lastname=? WHERE id=?");
        return $stmt->execute([$name, $lastname, $id]);
    }

}

?>
<?php

require_once 'models/Usuario.php';

class UsuarioController {

    private $usuario;

    public function __construct() {
        $this->usuario = new Usuario();
    }

    public function index() {
        $usuarios = $this->usuario->all();
        include 'views/usuarios/index.php';
    }

    public function find($id) {
        $usuario = $this->usuario->find($id);
        include 'views/usuarios/editar.php';
    }

    public function update($id, $name, $lastname) {
        $userUpdate = $this->usuario->update($id, $name, $lastname);
        header('Location: index.php');
    }

    public function delete($id){
        $userDelete = $this->usuario->delete($id);
        header('Location: index.php');
    }
}

?>
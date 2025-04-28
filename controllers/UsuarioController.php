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

    public function editar($id) {
        $usuario = $this->usuario->find($id);
        include 'views/usuarios/editar.php';
    }
}

?>
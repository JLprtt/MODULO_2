<?php

class Usuario {

    //Propiedades
    private $nombre, $email, $empleo, $titulo, $comentario;

    public function __construct($nombre, $email, $empleo, $titulo, $comentario) {

        $this -> nombre = $nombre;
        $this -> email = $email;
        $this -> empleo = $empleo;
        $this -> titulo = $titulo;
        $this -> comentario = $comentario;

    }

    public function getNombre() {
        return $this->nombre;
    }
    public function getEmail() {
        return $this->email;
    }
    public function getEmpleo() {
        return $this->empleo;
    }
    public function getTitulo() {
        return $this->titulo;
    }
    public function getComentario() {
        return $this->comentario;
    }
}

?>
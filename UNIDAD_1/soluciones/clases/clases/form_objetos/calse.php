<?php
class Persona {
    protected $nombre, $empleo, $estudios, $email, $descripcion, $foto;
    public function __construct($nombre, $empleo, $estudios, $email, $descripcion, $foto){
        $this-> nombre = $nombre;
        $this-> empleo = $empleo;
        $this-> estudios = $estudios;
        $this-> email = $email;
        $this-> descripcion = $descripcion;
        $this-> foto = $foto;
    }

    public function getDatos($dato){
        return $this->$dato;
    }
}
<?php

class Curso {
    private $id;
    private $nombre;
    private $descripcion;
    private $estudiantes; // array de objetos Estudiante
  
    public function __construct($id, $nombre, $descripcion) {
      $this->id = $id;
      $this->nombre = $nombre;
      $this->descripcion = $descripcion;
      $this->estudiantes = array();
    }
  
    public function getId() {
      return $this->id;
    }
  
    public function getNombre() {
      return $this->nombre;
    }
  
    public function getDescripcion() {
      return $this->descripcion;
    }
  
    public function agregarEstudiante(Estudiante $estudiante) {
      $this->estudiantes[] = $estudiante;
    }
  
    public function getEstudiantes() {
      return $this->estudiantes;
    }
  }

  ?>

<?php

// Clase Estudiante
class Estudiante {
    private $id;
    private $nombre;
    private $apellido;
    private $cursos; // array de objetos Curso
  
    public function __construct($id, $nombre, $apellido) {
      $this->id = $id;
      $this->nombre = $nombre;
      $this->apellido = $apellido;
      $this->cursos = array();
    }
  
    public function getId() {
      return $this->id;
    }
  
    public function getNombre() {
      return $this->nombre;
    }
  
    public function getApellido() {
      return $this->apellido;
    }
  
    public function agregarCurso(Curso $curso) {
      $this->cursos[] = $curso;
    }
  
    public function getCursos() {
      return $this->cursos;
    }
  }
  
  
?>
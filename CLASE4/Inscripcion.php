<?php

require_once 'Estudiante.php';
require_once 'Curso.php';

class Inscripcion {
  private $estudiante;
  private $curso;

  public function __construct(Estudiante $estudiante, Curso $curso) {
    $this->estudiante = $estudiante;
    $this->curso = $curso;
    $estudiante->agregarCurso($curso);
    $curso->agregarEstudiante($estudiante);
  }

  public function getEstudiante() {
    return $this->estudiante;
  }

  public function getCurso() {
    return $this->curso;
  }
}














?>
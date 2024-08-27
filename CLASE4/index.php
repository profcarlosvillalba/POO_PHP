<?php

require_once 'Inscripcion.php';

$estudiante1 = new Estudiante(1, 'Juan', 'Pérez');
$estudiante2 = new Estudiante(2, 'María', 'González');

$curso1 = new Curso(1, 'Matemáticas', 'Curso de matemáticas básicas');
$curso2 = new Curso(2, 'Programación', 'Curso de programación en PHP');

$inscripcion1 = new Inscripcion($estudiante1, $curso1);
$inscripcion2 = new Inscripcion($estudiante1, $curso2);
$inscripcion3 = new Inscripcion($estudiante2, $curso1);

// Ahora puedes acceder a los cursos de un estudiante
$cursosDeEstudiante1 = $estudiante1->getCursos();
foreach ($cursosDeEstudiante1 as $curso) {
  echo $curso->getNombre() . "\n";
}

// Ahora puedes acceder a los estudiantes de un curso
$estudiantesDeCurso1 = $curso1->getEstudiantes();
foreach ($estudiantesDeCurso1 as $estudiante) {
  echo $estudiante->getNombre() . "\n";
}

?>